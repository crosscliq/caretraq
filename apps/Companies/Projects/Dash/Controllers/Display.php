<?php 
namespace Companies\Projects\Dash\Controllers;

class Display extends BaseAuth 
{
    use \Dsc\Traits\Controllers\CrudItem;
    
    protected $list_route = null;
    protected $create_item_route = null;
    protected $get_item_route = null;
    protected $edit_item_route = null;
    
     function __construct() {
           $f3 = \Base::instance();
           $this->list_route =  '/'.$f3->get('projects_base').'/displays';
           $this->create_item_route = '/'.$f3->get('projects_base').'/display/create';
           $this->add_item_action = '/'.$f3->get('projects_base').'/display/add';
           $this->edit_item_action = '/'.$f3->get('projects_base').'/display/update/{id}';
           $this->get_item_route = '/'.$f3->get('projects_base').'/display/{id}';
           $this->edit_item_route = '/'.$f3->get('projects_base').'/display/edit/{id}';
           parent::__construct();
    }

    protected function getModel()
    {
        $model = new \Companies\Projects\Dash\Models\Displays;
        return $model;
    }
    
    protected function getItem()
    {
        $f3 = \Base::instance();
        $id = $this->inputfilter->clean( $f3->get('PARAMS.id'), 'alnum' );
        $model = $this->getModel()->setState('filter.id', $id);
        
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
        $f3->set('pagetitle', 'Create Display');

        $f3->set('action', $this->create_item_route);

        $model = new \Companies\Projects\Dash\Models\Projects;
        $list = $model->populateState()->getList();
        $f3->set('projects', $list );

        $f3->set('project_id', $f3->get('GET.pid'));

        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::displays/create.php');
    }
    
    protected function displayEdit()
    {
        $f3 = \Base::instance();
        $f3->set('pagetitle', 'Edit Display');
        $id = $this->getItem()->get( $this->getItemKey() );
        $action = str_replace('{id}', $id, $this->edit_item_action );
        $f3->set('action', $action);
        
        $model = new \Companies\Projects\Dash\Models\Projects;
        $list = $model->populateState()->getList();
        $f3->set('projects', $list );

        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::displays/edit.php');
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