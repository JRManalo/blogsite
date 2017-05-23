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
    
    $f3->route('GET /home', function()
    {
        $view = new view;
        echo $view->render
        ('pages/home.html');        
    });
    
    $f3->route('GET /about', function()
    {
        $view = new view;
        echo $view->render
        ('pages/about.html');        
    });
    
    $f3->route('GET /blogger', function()
    {
        $view = new view;
        echo $view->render
        ('pages/blogger.html');        
    });
    
    $f3->route('GET /login', function()
    {
        $view = new view;
        echo $view->render
        ('pages/login.html');        
    });
    
    $f3->route('GET /create', function()
    {
        $view = new view;
        echo $view->render
        ('pages/create.html');        
    });
    
    //Run fat free
    $f3->run();