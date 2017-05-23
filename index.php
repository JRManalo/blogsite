<?php

    //Require the autoload file
    require_once('vendor/autoload.php');
session_start();

    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Set debug level
    $f3->set('DEBUG', 3);
    
    //Instantiate the database class
    $bloggerDB = new BloggerDB();
    //print_r($bloggerDB->allBlogger());
    //Define a default route
    $f3->route('GET /', function($f3)
    {
        $squad = $GLOBALS['bloggerDB']->allBlogger();
        $f3->set('squad', $squad);
        //print_r($squad);
        
        echo Template::instance()->render('pages/home.html'); 
    });
    
    $f3->route('GET /about', function($f3)
    {
        echo Template::instance()->render('pages/about.html');       
    });
    
    $f3->route('GET /blogger', function($f3)
    {
        echo Template::instance()->render('pages/blogger.html');       
    });
    
    $f3->route('GET /login', function($f3)
    {
        echo Template::instance()->render('pages/login.html');        
    });
    
    $f3->route('GET /create', function($f3)
    {
        echo Template::instance()->render('pages/create.html');      
    });
    
    $f3->route('GET /myblog', function($f3)
    {
        echo Template::instance()->render('pages/myblog.html');      
    });
    
    $f3->route('GET /blog', function($f3)
    {
        echo Template::instance()->render('pages/blog.html');       
    });
    
    $f3->route('GET /fullviewblog', function($f3)
    {
        echo Template::instance()->render('pages/fullviewblog.html');        
    });
    
    $f3->route('GET /loginhome', function($f3)
    {
        echo Template::instance()->render('pages/loginhome.html');       
    });
    
    $f3->route('GET /loginabout', function($f3)
    {
        echo Template::instance()->render('pages/loginabout.html');       
    });
    //Run fat free
    $f3->run();