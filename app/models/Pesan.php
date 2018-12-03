<?php

use Phalcon\Mvc\Model; 

class Pesan extends Model 
{     
    public $id;     
    public $username; 
    public $wisata;
    public $mulai;
    public $sampai;

    public function initialize(){
        $this->setSource('pesan'); 
    }
}