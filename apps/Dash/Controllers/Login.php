<?php 
namespace Dash\Controllers;

class Login extends Base 
{
    public function login()
    {
        $user = \Base::instance()->get('SESSION.user');
        if(!empty($user)){
            \Base::instance()->reroute('/dash');
        }
                
        \Base::instance()->set('pagetitle', 'Login');
        \Base::instance()->set('subtitle', '');

        $view = new \Dsc\Template;
        $view->setLayout('login.php');
        echo $view->render('common/login.php');
    }
    
    public function auth()
    {
        $username_input = $this->input->getAlnum('login-username');
        $password_input = $this->input->getAlnum('login-password');
        
        // check if safemode is being used
        $safemode_enabled = \Base::instance()->get('safemode.enabled');
        $safemode_user = \Base::instance()->get('safemode.user');
        $safemode_salt = \Base::instance()->get('safemode.salt');
        $safemode_password = \Base::instance()->get('safemode.password');

        $simple = new \Joomla\Crypt\Password\Simple;
        if ($safemode_enabled && $username_input === $safemode_user) 
        {
            if ($simple->verify($password_input, $safemode_password)) 
            {
                $user = new \Users\Objects\SafemodeUser;
                $user->id = 'safemode';
                $user->name = $safemode_user;
                $user->username = $safemode_user;
                $user->password = $safemode_password;
                $user->email = "safemode@localhost";
                
                \Base::instance()->set('SESSION.user', $user);

                \Base::instance()->reroute("/dash");
                return;
            }
        }
        
       
        // TODO attempt authorization
        // TODO set session user if success
        // TODO redirect to /admin
        
        // TODO otherwise, reroute to login with error message
        \Dsc\System::instance()->addMessage('Login failed', 'error');
        
        \Base::instance()->reroute("/dash/login");
    }
    
    public function logout()
    {
        \Base::instance()->clear('SESSION');
        \Base::instance()->reroute('/dash/login');
    }

}
?> 