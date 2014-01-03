<?php 
namespace Companies\Projects\Dash\Controllers;

class Displays extends BaseAuth 
{
   public function display()
    {
        \Base::instance()->set('pagetitle', 'Projects');
        \Base::instance()->set('subtitle', '');
    
        $model = new \Companies\Projects\Dash\Models\Displays;
        $state = $model->populateState()->getState();
        \Base::instance()->set('state', $state );
    
        $list = $model->paginate();
        \Base::instance()->set('list', $list );
        
        $pagination = new \Dsc\Pagination($list['total'], $list['limit']);
        \Base::instance()->set('pagination', $pagination );
        
        $model = new \Companies\Projects\Dash\Models\Projects;
        $list = $model->populateState()->getList();

        \Base::instance()->set('projects', $list );
       
        $view = new \Dsc\Template;
        echo $view->render('Companies/Projects/Dash/Views::displays/list.php');
    }
}
?> 