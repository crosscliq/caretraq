<?php 
namespace Companies\Users\Dash\Controllers;

class Users extends \Admin\Controllers\BaseAuth 
{
    public function display()
    {
        \Base::instance()->set('pagetitle', 'Users');
        \Base::instance()->set('subtitle', '');
    
        $model = new \Companies\Users\Dash\Models\Users;
        $state = $model->populateState()->getState();
        \Base::instance()->set('state', $state );
    
        $list = $model->paginate();
        \Base::instance()->set('list', $list );
    
        $pagination = new \Dsc\Pagination($list['total'], $list['limit']);
        \Base::instance()->set('pagination', $pagination );
        
        $model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups ); 
        
        $view = new \Dsc\Template;
        //echo $view->render('Users/Admin/Views::users/list.php');
        echo $view->render('Companies/Users/Dash/Views::users/list.php');
    }
}