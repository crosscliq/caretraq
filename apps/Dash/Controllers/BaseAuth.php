<?php 
namespace Dash\Controllers;

class BaseAuth extends Base 
{
    public function beforeRoute($f3){
        $user = $f3->get('SESSION.user');
        if(empty($user)){
            $f3->reroute('/dash/login');
        }
    }    
}
?>