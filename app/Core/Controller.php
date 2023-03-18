<?php

namespace app\Core;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class Controller
{
    public Environment $twig;
    public function __construct()
    {
        $this->twig = new Environment(new FilesystemLoader('../resources/views'));
    }

    /**
     * @param $array
     * @return void
     */
    public function json($array)
    {
		header("Content-Type: application/json");
		echo json_encode($array);
		exit;
	}

}
