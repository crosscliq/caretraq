<?php 
namespace Dash\Controllers;

class Dashboard extends BaseAuth 
{
    public function display()
    {
        \Base::instance()->set('pagetitle', 'Dashboard');
        \Base::instance()->set('subtitle', '');
                
        $view = new \Dsc\Template;
        echo $view->render('dashboard/default.php');
    }
}
?> 