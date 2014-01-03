<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "dash":
        // register event listener
        //\Dsc\System::instance()->getDispatcher()->addListener(\Companies\Users\Listener::instance());
        
        $base = 'dash';
        //no action calls diplay function, this should be plural
        //$f3->route("DELETE  /{$base}/@resource/@id", "{$namespace}@resource->delete");
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
        //GROUPS ROUTES
        $f3->route('GET|POST /dash/users/groups', '\Companies\Users\Dash\Controllers\Groups->display');
        $f3->route('GET|POST /dash/users/groups/@page', '\Companies\Users\Dash\Controllers\Groups->display');
        $f3->route('GET|POST /dash/users/groups/delete', '\Companies\Users\Dash\Controllers\Groups->delete');
        $f3->route('GET /dash/users/group', '\Companies\Users\Dash\Controllers\Group->create');
        $f3->route('POST /dash/users/group', '\Companies\Users\Dash\Controllers\Group->add');
        $f3->route('GET /dash/users/group/@id', '\Companies\Users\Dash\Controllers\Group->read');
        $f3->route('GET /dash/users/group/@id/edit', '\Companies\Users\Dash\Controllers\Group->edit');
        $f3->route('POST /dash/users/group/@id', '\Companies\Users\Dash\Controllers\Group->update');
        $f3->route('DELETE /dash/users/group/@id', '\Companies\Users\Dash\Controllers\Group->delete');
        $f3->route('GET /dash/users/group/@id/delete', '\Companies\Users\Dash\Controllers\Group->delete'); 
       // $f3->route('GET|POST  /admin/users/groups/checkboxes', '\Users\Admin\Controllers\Groups->getCheckboxes');






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