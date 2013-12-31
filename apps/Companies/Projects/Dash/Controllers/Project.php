<?php 
namespace Companies\Projects\Dash\Controllers;

class Project extends BaseAuth 
{
    use \Dsc\Traits\Controllers\CrudItem;
    
    protected $list_route = '/dash/projects';
    protected $create_item_route = '/dash/project';
    protected $get_item_route = '/dash/project/{id}';
    protected $edit_item_route = '/dash/project/{id}/edit';
    
    protected function getModel()
    {
        $model = new \Companies\Users\Dash\Models\Users;
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
        $f3->set('pagetitle', 'Create User');

        $model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups ); 


        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::projects/create.php');
    }
    
    protected function displayEdit()
    {
        $f3 = \Base::instance();
        $f3->set('pagetitle', 'Edit User');
        
        $model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups );     

        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::projects/edit.php');
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