<?php 
namespace Companies\Users\Dash\Controllers;

class Group extends \Admin\Controllers\BaseAuth 
{
    use \Dsc\Traits\Controllers\CrudItem;
    
    protected $list_route = '/dash/users/groups';
    protected $create_item_route = '/dash/users/group';
    protected $get_item_route = '/dash/users/group/{id}';
    protected $edit_item_route = '/dash/users/group/{id}/edit';
    
    protected function getModel()
    {
        $model = new \Companies\Users\Dash\Models\Groups;
        return $model;
    }
    
    protected function getItem()
    {
        $f3 = \Base::instance();
        $id = $this->inputfilter->clean( $f3->get('PARAMS.id'), 'alnum' );
        $model = $this->getModel()
        ->setState('filter.id', $id);
    
        try {
            $item = $model->getItem();
        } catch ( \Exception $e ) {
            \Dsc\System::instance()->addMessage( "Invalid Item: " . $e->getMessage(), 'error');
            $f3->reroute( $this->list_route );
            return;
        }
    
        return $item;
    }
    
    protected function displayCreate()
    {
        $f3 = \Base::instance();
        $f3->set('pagetitle', 'Create Group');
    
        $view = new \Dsc\Template;
        echo $view->render('Companies/Users/Dash/Views::groups/create.php');
    }
    
    protected function displayEdit()
    {
        $f3 = \Base::instance();
        $f3->set('pagetitle', 'Edit Group');
    
        $view = new \Dsc\Template;
        echo $view->render('Companies/Users/Dash/Views::groups/edit.php');
    }
    
    /**
     * This controller doesn't allow reading, only editing, so redirect to the edit method
     */
    protected function doRead(array $data, $key=null)
    {
        $f3 = \Base::instance();
        $id = $this->getItem()->get( $this->getItemKey() );
        $route = str_replace('{id}', $id, $this->edit_item_route );
        $f3->reroute( $route );
    }
    
    protected function displayRead() {}
}