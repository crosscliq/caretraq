<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "dash":
    
        $f3->config( $f3->get('PATH_ROOT').'apps/Companies/Projects/config.ini');

      // register all the routes
        $f3->route('GET|POST /dash/projects', '\Companies\Projects\Dash\Controllers\Projects->display');
        $f3->route('GET|POST /dash/projects/@page', '\Companies\Projects\Dash\Controllers\Projects->display');
        $f3->route('GET|POST /dash/projects/delete', '\Companies\Projects\Dash\Controllers\Projects->delete');
        $f3->route('GET /dash/project', '\Companies\Projects\Dash\Controllers\Project->create');
        $f3->route('POST /dash/project', '\Companies\Projects\Dash\Controllers\Project->add');
        $f3->route('GET /dash/project/@id', '\Companies\Projects\Dash\Controllers\Project->read');
        $f3->route('GET /dash/project/@id/edit', '\Companies\Projects\Dash\Controllers\Project->edit');
        $f3->route('POST /dash/project/@id', '\Companies\Projects\Dash\Controllers\Project->update');
        $f3->route('DELETE /dash/project/@id', '\Companies\Projects\Dash\Controllers\Project->delete');
        $f3->route('GET /dash/project/@id/delete', '\Companies\Projects\Dash\Controllers\Project->delete');    

        // TODO set some app-specific settings, if desired
        
        // append this app's UI folder to the path
        $ui = $f3->get('UI');
        $ui .= ";" . $f3->get('PATH_ROOT') . "apps/Companies/Projects/Dash/Views/";
        $f3->set('UI', $ui);
        
        // append this app's template folder to the path
        $templates = $f3->get('TEMPLATES');
        $templates .= ";" . $f3->get('PATH_ROOT') . "apps/Site/Templates/";
        $f3->set('TEMPLATES', $templates);
        
        
        break;
}
?>