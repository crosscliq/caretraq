<?php

$f3=require('lib/base.php');

$f3->set('AUTOLOAD','pusherserver/lib/');


function nodePusher($id, $child, $data = array()) {
	
$data['id'] = $id; 
$data['child'] = $child;

	//event to pusher
$app_id = '59967';
$app_key = 'f3b8b0aeaf31c105168e';
$app_secret = '87a99b695fda2400d4fd';

$pusher = new Pusher( $app_key, $app_secret, $app_id );
	$event = 	$pusher->trigger('nodes', 'addnode', $data );

}




$f3->set('DEBUG',1);

$f3->config('config.ini');

$f3->route('GET /',
    function($f3) {
       		
$db=new DB\Jig('db/',DB\Jig::FORMAT_JSON);
$dash=new DB\Jig\Mapper($db,'proofofplacement');
$dash->load(array('@dash=?','1'));

$f3->set('placements', array_reverse($dash->placements));


        $view=new View;

        $f3->set('nodetree', $view->render('nodetree.htm'));

        echo $view->render('dashboard.htm');
    }
);


$f3->route('GET /dav',
    function($f3) {
       		

        $view=new View;

        
        echo $view->render('index-DAV.html');
    }
);


$f3->set('UPLOADS','assets/'); // don't forget to set an Upload directory, and make it writable!


$f3->route('GET|POST /map/@lat/@lng/@name/@color',
    function($f3) {
            
        //event to pusher
$app_id = '59967';
$app_key = 'f3b8b0aeaf31c105168e';
$app_secret = '87a99b695fda2400d4fd';

$pusher = new Pusher( $app_key, $app_secret, $app_id );

$data = array();
$data['lat'] = $f3->get('PARAMS.lat');
$data['lng'] = $f3->get('PARAMS.lng');
$data['name'] = $f3->get('PARAMS.name');
$data['fill'] = $f3->get('PARAMS.color');

    $event =    $pusher->trigger('trafficmap', 'addTraffic', $data );
   

    }
);

$f3->route('GET|POST /map/update/@name/@color',
    function($f3) {
            
        //event to pusher
$app_id = '59967';
$app_key = 'f3b8b0aeaf31c105168e';
$app_secret = '87a99b695fda2400d4fd';

$pusher = new Pusher( $app_key, $app_secret, $app_id );

$data = array();
$data['lat'] = $f3->get('PARAMS.lat');
$data['lng'] = $f3->get('PARAMS.lng');
$data['name'] = $f3->get('PARAMS.name');
$data['fill'] = $f3->get('PARAMS.color');

 
    $event =    $pusher->trigger('trafficmap', 'changeColor', $data );

    }
);










// MOBILE ROUTES BELOW HERE
$f3->route('GET /m/login',
        function($f3) {

session_start();
    
    $f3->set('SESSION.id', session_id());

    $data = array();
    $data['type'] = 'node';
    $data['name'] = 'Login';
    $data['color'] = 'red';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id'), $f3->get('SESSION.id').'login', $data);

        echo $view->render('m/index.htm');

        }
);

$f3->route('GET /m',
        function($f3) {

session_start();
    
    $f3->set('SESSION.id', session_id());

    $data = array();
    $data['type'] = 'node';
    $data['name'] = 'Home';
    $data['color'] = 'red';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id').'login', $f3->get('SESSION.id').'home', $data);

        echo $view->render('m/index.htm');

        }
);



// MOBILE ROUTES BELOW HERE


$f3->route('GET /m/index2',
        function($f3) {

session_start();
    
    $f3->set('SESSION.id', session_id());

    $data = array();
    $data['type'] = 'node';
    $data['name'] = 'Index2';
    $data['color'] = 'red';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id').'home', $f3->get('SESSION.id').'index2', $data);

        echo $view->render('m/index2.htm');

        }
);







$f3->route('GET /thumbs/assets/@image/@width/@height',
    function($f3) {

$web = \Web::instance();
    $mime = 'image/jpeg';
   //header('Content-Type: '.$mime);   
$img = new Image($f3->get('PARAMS.image'), false, 'assets/');

$img->resize( 300, 200, true);
$img->render(); 
    }
);










$f3->run();
