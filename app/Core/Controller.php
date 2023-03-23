<?php

namespace app\Core;

class Controller
{
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
