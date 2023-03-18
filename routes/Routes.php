<?php
namespace routes;

use app\Core\Router;
use app\Controllers\HomeController;

class Routes {

    public function web(){

        $router = new Router();
    
        //HOME
        $router->get('/', [HomeController::class, 'index']);
        $router->get('/home', [HomeController::class, 'index']);
    
        $router->route();
    
    }    
}







