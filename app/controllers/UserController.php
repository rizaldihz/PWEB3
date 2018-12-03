<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;

class UserController extends Controller
{
    public function createAction()
    {
        
    }

    public function storeAction()
    {
        $user = new User();

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = md5($this->request->getPost('password'));

        $user->username = $username;
        $user->email = $email;
        $user->password = $password;

        if($user->save() === false)
        {
            foreach($user->getMessages() as $message){
                echo $message."\n";
            }
        }
        else{
            echo "Sukses";
        }
    }
}

