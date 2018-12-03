<?php

use Phalcon\Mvc\Model; 

class Users extends Model 
{     
    public $username;     
    public $nama;
    public $email;
    public $password;
    public $telepon;
    
    public function initialize(){
        $this->setSource('users'); 
    }
}