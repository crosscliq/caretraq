<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "dash":
        // register event listener
        \Dsc\System::instance()->getDispatcher()->addListener(\Users\Listener::instance());
        
        // register all the routes
       	$f3->route('GET|POST /dash/users', '\Companies\Users\Dash\Controllers\Users->display');
        $f3->route('GET|POST /dash/users/@page', '\Companies\Users\Dash\Controllers\Users->display');
        $f3->route('GET|POST /dash/users/delete', '\Companies\Users\Dash\Controllers\Users->delete');
        $f3->route('GET /dash/user', '\Companies\Users\Dash\Controllers\User->create');
        $f3->route('POST /dash/user', '\Companies\Users\Dash\Controllers\User->add');
        $f3->route('GET /dash/user/@id', '\Companies\Users\Dash\Controllers\User->read');
        $f3->route('GET /dash/user/@id/edit', '\Companies\Users\Dash\Controllers\User->edit');
        $f3->route('POST /dash/user/@id', '\Companies\Users\Dash\Controllers\User->update');
        $f3->route('DELETE /dash/user/@id', '\Companies\Users\Dash\Controllers\User->delete');
        $f3->route('GET /dash/user/@id/delete', '\Companies\Users\Dash\Controllers\User->delete');    

       	 // append this app's UI folder to the path
        $ui = $f3->get('UI');
        $ui .= ";" . $f3->get('PATH_ROOT') . "apps/Companies/Users/Dash/Views/";
        $f3->set('UI', $ui);
        
        // append this app's template folder to the path
        $templates = $f3->get('TEMPLATES');
        $templates .= ";" . $f3->get('PATH_ROOT') . "apps/Site/Templates/";
        $f3->set('TEMPLATES', $templates);
        // TODO set some app-specific settings, if desired
        break;
}
?>