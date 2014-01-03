<?php 
namespace Companies\Projects\Dash\Models;

class Displays extends Base 
{
    protected $collection = 'projects.displays';
    protected $default_ordering_direction = '1';
    protected $default_ordering_field = 'name';


    public function __construct($config=array())
    {
        $config['filter_fields'] = array(
            'name', 'start_date', 'end_date'
        );
        $config['order_directions'] = array('1', '-1');
        
        parent::__construct($config);
    }
    
    protected function fetchFilters()
    {   
       
        $filter_keyword = $this->getState('filter.keyword');


        if ($filter_keyword && is_string($filter_keyword))
        {
            $key =  new \MongoRegex('/'. $filter_keyword .'/i');
    
            $where = array();
            $where[] = array('display_id'=>$key);
            $where[] = array('name'=>$key);
            $where[] = array('start_date'=>$key);
            $where[] = array('end_date'=>$key);
  
    
            $this->filters['$or'] = $where;
        }
        
        $filter_project_id = $this->getState('filter.project_id');
        if (strlen($filter_project_id))
        { 
            $this->filters['project.id'] = new \MongoId((string) $filter_project_id);
        }

        $filter_id = $this->getState('filter.id');
        if (strlen($filter_id))
        {
            $this->filters['_id'] = new \MongoId((string) $filter_id);
        }
        
      /*  $filter_username_contains = $this->getState('filter.username-contains', null, 'username');
        if (strlen($filter_username_contains))
        {
            $key =  new \MongoRegex('/'. $filter_username_contains .'/i');
            $this->filters['username'] = $key;
        }
        
        $filter_email_contains = $this->getState('filter.email-contains');
        if (strlen($filter_email_contains))
        {
            $key =  new \MongoRegex('/'. $filter_email_contains .'/i');
            $this->filters['email'] = $key;
        }
       

        $filter_password = $this->getState('filter.password');
        if (strlen($filter_password))
        {
            $this->filters['password'] = $filter_password;
        }

        $filter_group = $this->getState('filter.group');

        if (strlen($filter_group))
        {
            $this->filters['groups.id'] = new \MongoId((string) $filter_group);
        }*/
    
        return $this->filters;
    }



    /**
     * Method to auto-populate the model state.
     *
     */
    public function populateState()
    {   
        parent::populateState();

        //$this->setState('filter.project_id' , '52c5cb7023195a056d0041a7');
        
        return $this;
    } 


    public function getList( $refresh=false )
    {
        $fields = $this->getFields();
        $filters = $this->getFilters();
        $options = $this->getOptions();
    
  
        $mapper = $this->getMapper();
        if (!empty($fields) && method_exists($mapper, 'select')) 
        {
            if (is_a($mapper, '\DB\Mongo\Mapper')) {
                $items = $mapper->select($fields, $filters, $options);
            } else {
                $f3 = \Base::instance();
                $items = $mapper->select($f3->csv($fields), $filters, $options);
            }            
        }
        else 
        {
            $items = $mapper->find($filters, $options);
        }                
        
        /*
        if (is_a($mapper, '\DB\Mongo\Mapper')) {
            \Dsc\System::instance()->addMessage(\Dsc\Debug::dump($mapper->cursor()->explain()), 'warning');
        }
        */
    
        return $items;
    }
    
    public function getItem( $refresh=false )
    {
        $filters = $this->getFilters();
        $options = $this->getOptions();
    
        $mapper = $this->getMapper();
        $item = $mapper->findone($filters, $options);
            
        return $item;
    }

    public function save( $values, $options=array(), $mapper=null )
    {
        if (empty($options['skip_validation']))
        {
            $this->validate( $values, $options, $mapper );
        }
        
        $key = strtolower( get_class($this) ) . "." . microtime(true);
        $key = $this->inputfilter->clean($key, 'ALNUM');
        $f3 = \Base::instance();
        $f3->set($key, $values);
        
        // bind the mapper to the values array
        if (empty($mapper)) {
            $mapper = $this->getMapper();
        }
        $mapper->copyFrom( $key );
        $f3->clear($key);

        //TEMP FIX FOR USING REQUEST IN POSTING
        if(!empty($mapper->PHPSESSID)) { unset($mapper->PHPSESSID); }
        

        $model = new \Companies\Projects\Dash\Models\Projects;
        $model->setState('filter.id', $mapper->project_id);
        $project =  $model->getItem();
        $mapper->project =  array("id" =>  $project->_id, "name" => $project->name);
        


        $eventNameSuffix = $this->inputfilter->clean(get_class($this), 'ALNUM');
        
        $event = new \Joomla\Event\Event( 'onBeforeSave' . $eventNameSuffix );
        $event->addArgument('model', $this)->addArgument('mapper', $mapper);
        $event = \Dsc\System::instance()->getDispatcher()->triggerEvent($event);
        
        if ($event->isStopped()) {
            $this->setError( $event->getArgument('error') );
            return $this->checkErrors();
        }
        
        // do the save
        try {
            $mapper->save();
        } catch (\Exception $e) {
            $this->setError( $e->getMessage() );
            return $this->checkErrors();
        }
        
        $event = new \Joomla\Event\Event( 'onAfterSave' . $eventNameSuffix );
        $event->addArgument('model', $this)->addArgument('mapper', $mapper);
        $event = \Dsc\System::instance()->getDispatcher()->triggerEvent($event);
        if ($event->hasArgument('mapper')) {
            $mapper = $event->getArgument('mapper');
        }
        
        return $mapper;
    }
    


}
?>