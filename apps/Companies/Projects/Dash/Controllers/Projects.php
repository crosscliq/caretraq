<?php 
namespace Companies\Projects\Dash\Controllers;

class Projects extends BaseAuth 
{
   public function display()
    {
        \Base::instance()->set('pagetitle', 'Projects');
        \Base::instance()->set('subtitle', '');
    
        $model = new \Companies\Projects\Dash\Models\Projects;
        $state = $model->populateState()->getState();
        \Base::instance()->set('state', $state );
    
        $list = $model->paginate();
        \Base::instance()->set('list', $list );
    
        $pagination = new \Dsc\Pagination($list['total'], $list['limit']);
        \Base::instance()->set('pagination', $pagination );
        
        $view = new \Dsc\Template;
        //echo $view->render('Users/Admin/Views::users/list.php');
        echo $view->render('Companies/Projects/Dash/Views::projects/list.php');
    }
}
?> 