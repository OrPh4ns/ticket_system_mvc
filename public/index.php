<?php
    session_start();

    //header('Content-Type: application/json; charset=UTF-8'); for api
    
    require '../vendor/autoload.php';

    $env = file('../.env');
    foreach ($env as $env_value) {
        putenv($env_value);
    }

    $routes = new routes\Routes();  

    $routes->web();
