<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "dash":
        // register event listener
        \Dsc\System::instance()->getDispatcher()->addListener(\Users\Listener::instance());
        
        $namespace = "\Companies\Users\Dash\Controllers\\";
        $base = 'dash';
        //no action calls diplay function, this should be plural
        $f3->route("GET|POST /{$base}/@resource", "{$namespace}@resource->display");
        $f3->route("GET|POST /{$base}/@resource/pagination/@page", "{$namespace}@resource->display");  
        $f3->route("GET|POST /{$base}/@resource/@action", "{$namespace}@resource->@action");
        $f3->route("GET|POST /{$base}/@resource/@action/@id", "{$namespace}@resource->@action");
        //$f3->route("DELETE  /{$base}/@resource/@id", "{$namespace}@resource->delete");
       
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