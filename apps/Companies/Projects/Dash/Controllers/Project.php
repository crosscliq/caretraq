<?php 
namespace Companies\Projects\Dash\Controllers;

class Project extends BaseAuth 
{
    use \Dsc\Traits\Controllers\CrudItem;
    
    protected $list_route = null;
    protected $create_item_route = null;
    protected $get_item_route = null;
    protected $edit_item_route = null;
    
    function __construct() {
           $f3 = \Base::instance();
           $this->list_route =  '/'.$f3->get('projects_base').'/projects';
           $this->create_item_route = '/'.$f3->get('projects_base').'/project/create';
           $this->add_item_action = '/'.$f3->get('projects_base').'/project/add';
           $this->edit_item_action = '/'.$f3->get('projects_base').'/project/update';
           $this->get_item_route = '/'.$f3->get('projects_base').'/project/{id}';
           $this->edit_item_route = '/'.$f3->get('projects_base').'/project/edit/{id}';
           parent::__construct();
    }

    
    protected function getModel()
    {
        $model = new \Companies\Projects\Dash\Models\Projects;
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
            $this->edit_item_action = $this->edit_item_action.'/'.$item->_id;
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

        $f3->set('action', $this->add_item_action);

        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::projects/create.php');
    }
    
    protected function displayEdit()
    {
        $f3 = \Base::instance();
        $f3->set('pagetitle', 'Edit User');
        $f3->set('action', $this->edit_item_action);
        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::projects/edit.php');
    }
    
    protected function doRead(array $data, $key=null) {
        $f3 = \Base::instance();
        $flash = \Dsc\Flash::instance();
        $f3->set('flash', $flash );
    
        $model = $this->getModel();
        $item = $this->getItem();
    
        $f3->set('model', $model );
        $f3->set('item', $item );
        $f3->set('displays', $model->getDisplays($item->id));


        if (method_exists($item, 'cast')) {
            $item_data = $item->cast();
        } else {
            $item_data = \Joomla\Utilities\ArrayHelper::fromObject($item);
        }
        $flash->store($item_data);
    
        $this->displayRead();
    
        return $this;
    }
    
    protected function displayRead() {
        $f3 = \Base::instance();
        $f3->set('pagetitle', $f3->get('item')->name);
        $f3->set('action', $this->edit_item_action);
        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::projects/detail.php');
    }
}