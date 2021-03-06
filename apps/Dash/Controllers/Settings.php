<?php 
namespace Dash\Controllers;

class Settings extends BaseAuth 
{
    public function display()
    {
        \Base::instance()->set('pagetitle', 'Settings');
        \Base::instance()->set('subtitle', '');
        
        $view = new \Dsc\Template;
        echo $view->render('settings/default.php');
    }
    
    public function save()
    {
        \Base::instance()->reroute("/admin/settings");
    }
}