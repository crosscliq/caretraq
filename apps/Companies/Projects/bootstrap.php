<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "dash":
    
        $f3->config( $f3->get('PATH_ROOT').'apps/Companies/Projects/config.ini');
        $namespace = "\Companies\Projects\Dash\Controllers\\";
        $base = 'dash/track';
        $f3->set('projects_base', $base);
      
        //Projects Route
        $f3->route("GET|POST /{$base}/projects","\Companies\Projects\Dash\Controllers\Projects->display");
        $f3->route("GET|POST /{$base}/projects/@page","\Companies\Projects\Dash\Controllers\Projects->display");
        $f3->route("GET|POST /{$base}/projects/delete","\Companies\Projects\Dash\Controllers\Projects->delete");
        //CRUD Routes
        $f3->route("GET /{$base}/project/create","\Companies\Projects\Dash\Controllers\Project->create");
        $f3->route("POST /{$base}/project/add","\Companies\Projects\Dash\Controllers\Project->add");
        $f3->route("GET /{$base}/project/read/@id","\Companies\Projects\Dash\Controllers\Project->read");
        $f3->route("GET /{$base}/project/edit/@id","\Companies\Projects\Dash\Controllers\Project->edit");
        $f3->route("GET /{$base}/project/delete/@id","\Companies\Projects\Dash\Controllers\Project->delete");
        $f3->route("POST /{$base}/project/update/@id","\Companies\Projects\Dash\Controllers\Project->update");
        $f3->route("DELETE /{$base}/project/delete/@id","\Companies\Projects\Dash\Controllers\Project->delete");
        $f3->route("GET /{$base}/project/delete/@id","\Companies\Projects\Dash\Controllers\Project->delete");        

        //Displays Route
        $f3->route("GET|POST /{$base}/displays","\Companies\Projects\Dash\Controllers\Displays->display");
        $f3->route("GET|POST /{$base}/displays/@page","\Companies\Projects\Dash\Controllers\Displays->display");
        $f3->route("GET|POST /{$base}/displays/delete","\Companies\Projects\Dash\Controllers\Displays->delete");
        //CRUD Routes
        $f3->route("GET /{$base}/display/create","\Companies\Projects\Dash\Controllers\Display->create");
        $f3->route("POST /{$base}/display/add","\Companies\Projects\Dash\Controllers\Display->add");
        $f3->route("GET /{$base}/display/read/@id","\Companies\Projects\Dash\Controllers\Display->read");
        $f3->route("GET /{$base}/display/edit/@id","\Companies\Projects\Dash\Controllers\Display->edit");
        $f3->route("GET /{$base}/display/delete/@id","\Companies\Projects\Dash\Controllers\Display->delete");
        $f3->route("POST /{$base}/display/update/@id","\Companies\Projects\Dash\Controllers\Display->update");
        $f3->route("DELETE /{$base}/display/delete/@id","\Companies\Projects\Dash\Controllers\Display->delete");
        $f3->route("GET /{$base}/display/delete/@id","\Companies\Projects\Dash\Controllers\Display->delete"); 


        //Asset Route
        $f3->route("GET|POST /{$base}/assets","\Companies\Projects\Dash\Controllers\Assets->display");
        $f3->route("GET|POST /{$base}/assets/@page","\Companies\Projects\Dash\Controllers\Assets->display");
        $f3->route("GET|POST /{$base}/assets/delete","\Companies\Projects\Dash\Controllers\Assets->delete");
        //CRUD Routes
        $f3->route("GET /{$base}/asset/create","\Companies\Projects\Dash\Controllers\Asset->create");
        $f3->route("POST /{$base}/asset/add","\Companies\Projects\Dash\Controllers\Asset->add");
        $f3->route("GET /{$base}/asset/read/@id","\Companies\Projects\Dash\Controllers\Asset->read");
        $f3->route("GET /{$base}/asset/edit/@id","\Companies\Projects\Dash\Controllers\Asset->edit");
        $f3->route("GET /{$base}/asset/delete/@id","\Companies\Projects\Dash\Controllers\Asset->delete");
        $f3->route("POST /{$base}/asset/update/@id","\Companies\Projects\Dash\Controllers\Asset->update");
        $f3->route("DELETE /{$base}/asset/delete/@id","\Companies\Projects\Dash\Controllers\Asset->delete");
        $f3->route("GET /{$base}/asset/delete/@id","\Companies\Projects\Dash\Controllers\Asset->delete"); 




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