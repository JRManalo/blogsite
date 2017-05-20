<?php

session_start();

    //Require the autoload file
    require_once('vendor/autoload.php');
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Define a default route
    $f3->route('GET /', function()
    {
        $view = new view;
        echo $view->render
        ('pages/home.html');        
    });
    
    //Run fat free
    $f3->run();