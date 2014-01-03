<?php
//phpinfo();
$app = require('../vendor/bcosca/fatfree/lib/base.php');

$app->set('PATH_ROOT', __dir__ . '/../');
$app->set('AUTOLOAD',
        $app->get('PATH_ROOT') . 'lib/;' .
        $app->get('PATH_ROOT') . 'apps/;'
);

require $app->get('PATH_ROOT') . 'vendor/autoload.php';



$app->set('APP_NAME', 'site');
if (strpos(strtolower($app->get('URI')), $app->get('BASE') . '/admin') !== false) {
    $app->set('APP_NAME', 'admin');
}
if (strpos(strtolower($app->get('URI')), $app->get('BASE') . '/dash') !== false) {
    $app->set('APP_NAME', 'dash');
}

// common config
$app->config( $app->get('PATH_ROOT') . 'config/common.config.ini');

$logger = new \Log( $app->get('application.logfile') );
\Registry::set('logger', $logger);

if ($app->get('DEBUG')) {
    ini_set('display_errors',1);
}

// bootstap each mini-app
$custom = $app->get('PATH_ROOT').'apps/Companies/';

\Dsc\Apps::instance()->bootstrap(null, array($custom ));

 $model = new \Admin\Models\Menus;
 $model->setState('filter.parent', '52c25c8a33231ab2798b4568')->setState('order_clause', array( 'tree'=> 1, 'lft' => 1 ));
 //$model->setState('filter.parent', '52c22f8523195a75560041a9')->setState('order_clause', array( 'tree'=> 1, 'lft' => 1 ));

 $list = $model->getList();
 $app->set('primary', $list);


$app->run();

?>
