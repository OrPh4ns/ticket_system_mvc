<?php

namespace app\Core;

class Request
{

	public function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	public function getRequestData()
	{

		switch (self::getMethod()) {
			case 'GET':
				return $_GET;

            case 'POST':
            case 'PUT':
				return $_POST;

			case 'DELETE':
				parse_str(file_get_contents('php://input'), $data);
				return (array) $data;
        }
	}

}
