<?php
spl_autoload_register(function($class)
{
    $fileName = "inc/service/".$class.".php";
    if(file_exists($fileName)){
        require_once($fileName);
        return true;
    }
});
spl_autoload_register(function($class)
{
    $controllerFlag = strpos($class,"Controller");
    $modelFlag = strpos($class,"Model");
    var_dump($controllerFlag);
    var_dump($modelFlag);
    if($controllerFlag == true){
        if($class == "Controller"){
            require_once("inc/service/controller.php");
            return true;
        }
        $fileName = str_replace("Controller", "", $class);
        var_dump($fileName);
        $urlFile = "inc/controller/".$fileName.".php";
        require_once($urlFile);
        return true;
    }
    if($modelFlag == true ){
        if($class == "Model"){
            require_once("inc/service/model.php");
            return true;
        }
        $fileName = str_replace("Model", "", $class);
        $urlFile = "inc/model/".$fileName.".php";
        require_once($urlFile);
        return true;
    }
});