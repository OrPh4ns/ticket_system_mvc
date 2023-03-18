<?php

namespace app\Controllers;
use app\Core\Controller;

class HomeController extends Controller
{
  public function index()
  {
      echo $this->twig->render('home.twig', array('title' => 'My Website'));

//    header("HTTP/1.0 200");
//    return self::json( array('response' => 'Success') );
  }
}
