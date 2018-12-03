<?php

use Phalcon\Mvc\Model; 

class Destinasi extends Model 
{     
    public $id;     
    public $username;
    public $judul;
    public $deskripsi;
    public $type;
    public $image; 

    public function initialize(){
        $this->setSource('destinasi'); 
    }
}