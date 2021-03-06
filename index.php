<?php

$f3=require('lib/base.php');

$f3->set('AUTOLOAD','pusherserver/lib/');


function nodePusher($id, $child, $data = array()) {
	
$data['id'] = $id; 
$data['child'] = $child;

	//event to pusher
$app_id = '61773';
$app_key = 'ce5b7e3ef06c0c0253df';
$app_secret = '8922920e8142a4d2fb73';

$pusher = new Pusher( $app_key, $app_secret, $app_id );
	$event = 	$pusher->trigger('nodes', 'addnode', $data );

}

$f3->route('GET /',
    function($f3) {
        echo View::instance()->render('/site/index.html');
    }
);
$f3->route('GET /hosting',
    function($f3) {
        echo View::instance()->render('/site/hosting.html');
    }
);
$f3->route('GET /dash/services',
    function($f3) {
        echo View::instance()->render('/dash/services.html');
    }
);

$f3->route('GET /general_ph',
    function($f3) {
        echo View::instance()->render('/site/general_ph.html');
    }
);

$f3->route('GET /general_icon',
    function($f3) {
        echo View::instance()->render('/site/general_ph.html');
    }
);
$f3->route('GET /book',
    function($f3) {
        echo View::instance()->render('/site/book.html');
    }
);









$f3->set('DEBUG',1);

$f3->config('config.ini');

$f3->route('GET /dash',
    function($f3) {
       		
        $view=new View;

        echo $view->render('/dash/index.html');
    }
);


$f3->route('GET /dash/profile',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/profile.html');
    }
);

$f3->route('GET /dash/users',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/users.html');
    }
);
$f3->route('GET /dash/schedules',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/schedules.html');
    }
);
$f3->route('GET /dash/photos',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/photos.html');
    }
);
$f3->route('GET /dash/projects',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/projects.html');
    }
);
$f3->route('GET /dash/assets',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/assets.html');
    }
);
$f3->route('GET /dash/locations',
    function($f3) {
        $view=new View;
        echo $view->render('/dash/locations.html');
    }
);




$f3->set('UPLOADS','assets/'); // don't forget to set an Upload directory, and make it writable!


$f3->route('GET|POST /map/@lat/@lng/@name/@color',
    function($f3) {
            
        //event to pusher
$app_id = '61773';
$app_key = 'ce5b7e3ef06c0c0253df';
$app_secret = '8922920e8142a4d2fb73';

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
$app_id = '61773';
$app_key = 'ce5b7e3ef06c0c0253df';
$app_secret = '8922920e8142a4d2fb73';

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
    $data['color'] = 'black';
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
    $data['name'] = 'Login';
    $data['color'] = 'black';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id'), $f3->get('SESSION.id').'login', $data);

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
    $data['name'] = 'Aaron Shust';
    $data['color'] = 'red';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id').'login', $f3->get('SESSION.id').'index2', $data);

        echo $view->render('m/index2.htm');

        }
);


$f3->route('POST /m/index2',
        function($f3) {

session_start();
    
    $f3->set('SESSION.id', session_id());
    $f3->set('SESSION.name', $f3->get('POST.username'));
    $data = array();
    $data['type'] = 'node';
    $data['name'] = $f3->get('POST.username');
    $data['color'] = 'black';
    $data['link'] = '/m';

        $view=new View;
       nodePusher($f3->get('SESSION.id'), $f3->get('SESSION.id').'login', $data);


       $data = array();
    $data['type'] = 'child';
    $data['name'] = 'Aaron Shust';
    $data['color'] = 'red';
    $data['link'] = '/m';

                $view=new View;
                nodePusher($f3->get('SESSION.id').'login', $f3->get('SESSION.id').'index2', $data);

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
