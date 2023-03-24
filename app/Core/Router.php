<?php

namespace app\Core;

use app\Middleware\JWT;
use Exception;
class Router
{
    private $routes = array();
    private string $group_prefix = '';

    public function get($route, $callback): void
    {
        $this->addRoute('GET', $this->group_prefix.$route, $callback);
    }

    public function post($route, $callback): void
    {
        $this->addRoute('POST', $this->group_prefix.$route, $callback);
    }

    public function put($route, $callback): void
    {
        $this->addRoute('PUT', $this->group_prefix.$route, $callback);
    }

    public function delete($route, $callback): void
    {
        $this->addRoute('DELETE', $this->group_prefix.$route, $callback);
    }

    public function group($prefix, $callback) {
        $previous_group_prefix = $this->group_prefix;
        $this->group_prefix .= $prefix;
        $callback($this);
        $this->group_prefix = $previous_group_prefix;
    }

    private function addRoute($method, $route, $callback)
    {
        $route = preg_replace('/\{(\w+)\}/', '(\w+)', $route);
        $route = "#^$route$#";
        $this->routes[$method][$route] = array('callback' => $callback);
    }

    public function route()
    {
        /*
        Replace it, if the project is in sub directory
        $uri_a = substr($uri, strpos($uri, "/") +1);
        $uri = substr($uri_a, strpos($uri_a, "/") +1);
         */
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        if (array_key_exists($method, $this->routes)) {
            foreach ($this->routes[$method] as $route => $data) {
                if (preg_match($route, $uri, $matches)) {
                    array_shift($matches);
                    $callback = $data['callback'];
                    if (is_callable($callback)) {
                        call_user_func_array($callback, $matches);
                        exit();
                    }
                    $class = new $callback[0];
                    call_user_func_array([$class, $callback[1]], $matches);
                    return;
                }
            }
        } else {
            header("HTTP/1.0 405");
            $array['response'] = "Method not allowed.";
            echo json_encode($array);
        }
    }
}