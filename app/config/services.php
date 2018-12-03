<?php

$di->set(     
    'voltService',     
    function ($view, $di) {         
        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di); 
 
        $volt->setOptions([             
            "compiledPath"      => APP_PATH . "/cache/",             
            "compiledExtension" => ".compiled",             
            "compileAlways"     => true,         
        ]); 

        return $volt;     
    } 
); 

$di->set(     
    'view',     
    function () {         
        $view = new \Phalcon\Mvc\View();         
        $view->setViewsDir(APP_PATH . "/views");         
        // echo APP_PATH."\\views"; 
        $view->registerEngines([             
            ".volt" => "voltService",         
        ]);
         
        return $view;     
    } 
);

$di->set(     
    'url',     
    function () use ($config, $di) {         
        $url = new \Phalcon\Mvc\Url(); 
        $url->setBaseUri($config->path('url.baseUrl')); 

        return $url;     
    } 
); 

$di->set(     
    'db',     
    function () use ($config) 
    {         
        $dbAdapter = $config->database->adapter;                  
        return new $dbAdapter([             
            "host" => $config->database->host,             
            "username" => $config->database->username,             
            "password" => $config->database->password,             
            "dbname" => $config->database->dbname,             
            "options" => [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC],         
        ]);     
    } 
); 

$di->set(     
    'session',     
    function () 
    {         
        $session = new Phalcon\Session\Adapter\Files();
        
        $session->start();

        return $session;
    } 
);