<?php

namespace app\Controllers;
use app\Core\Controller;
use app\Core\Request;

class HomeController extends Controller
{
    public function index()
    {
        include "../resources/views/home.php";
    }
  public function home($id)
  {
      $l = [1,6,85];
      include "../resources/views/home.php";
      //echo $id;
      //echo $this->twig->render('home.php', array('title' => 'My Website'));
//    header("HTTP/1.0 200");
//    return self::json( array('response' => 'Success') );
  }

  public function login()
  {
      include "../resources/views/login.php";
  }

    public function login_post()
    {
        var_dump($_REQUEST);
        $request = new Request;
        var_dump($request->getRequestData()['name']);
    }
}
