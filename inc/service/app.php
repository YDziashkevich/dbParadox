<?php
class App
{
    public function __construct()
    {
        $url = (isset($_GET["url"])) ? trim($_GET["url"]) : APP_DEFAULT_CONTROLLER;
        $urlParts = explode("/", rtrim($url, "/"));
        if(isset($urlParts[2])){
            $actionParam = explode($urlParts, 2);
        }
        $controllerName = $urlParts[0];
        //var_dump($controllerName);
        if(file_exists("inc/controller/".$controllerName.".php")){
            $controllerName .= "Controller";
            $controller = new $controllerName;
            $actionName = isset($urlParts[1]) ? $urlParts[1] : "indexAction";
            if(method_exists($controller, $actionName)){
                call_user_func(array($controller, $actionName),$actionParam[0]);
            }else{
                error_log("action $actionName not found");
            }
        }else{
            error_log("controller $controllerName not found");
        }
    }
}