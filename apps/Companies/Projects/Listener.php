<?php 
namespace Companies\Projects\Dash;

class Listener extends \Prefab 
{
    public function onSystemRebuildMenu( $event )
    {
        if ($mapper = $event->getArgument('mapper')) 
        {
            $mapper->reset();
            $mapper->title = 'Projects';
            $mapper->route = '';
            $mapper->icon = 'fa fa-ticket';
            $mapper->children = array(
                    json_decode(json_encode(array( 'title'=>'Projects', 'route'=>'/admin/projects', 'icon'=>'fa fa-list' )))
                    ,json_decode(json_encode(array( 'title'=>'Add New', 'route'=>'/admin/projects/new', 'icon'=>'fa fa-plus' )))
                    
            );
            $mapper->save();
            
            \Dsc\System::instance()->addMessage('Projects added its admin menu items.');
        }
        
    }
}