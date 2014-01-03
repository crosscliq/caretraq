<?php 
namespace Companies\Projects\Dash\Controllers;

class Assets extends BaseAuth 
{
   public function display()
    {
        \Base::instance()->set('pagetitle', 'Assets');
        \Base::instance()->set('subtitle', '');
    
        /*$model = new \Companies\Users\Dash\Models\Users;
        $state = $model->populateState()->getState();
        \Base::instance()->set('state', $state );
    
        $list = $model->paginate();
        \Base::instance()->set('list', $list );
    
        $pagination = new \Dsc\Pagination($list['total'], $list['limit']);
        \Base::instance()->set('pagination', $pagination );
        
        $model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups ); 
        */
        $view = new \Dsc\Template;
        //echo $view->render('Users/Admin/Views::users/list.php');
        echo $view->render('Companies/Projects/Dash/Views::assets/list.php');
    }
}
?> 