<?php
namespace routes;

use app\Core\Router;
use app\Controllers\HomeController;

class Routes {

    public function web(){

        $router = new Router();
    
        //HOME
        $router->get('/', [HomeController::class, 'index']);

        $router->group('/admin',function($router) {
            $router->get('/users', [HomeController::class, 'index']);
           // $router->post('/users', 'UserController@store');
        });
//
//        $router->get('/{id}', [HomeController::class, 'home']);

        $router->get('/login', [HomeController::class, 'login']);
        $router->post('/login_post', [HomeController::class, 'login_post']);

        //$router->get('/', [HomeController::class, 'index']);
        //$router->get('/home', [HomeController::class, 'index']);
    
        $router->route();
    
    }    
}







