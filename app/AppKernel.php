<?php

if(isset($routes))
{
    if(!isset($uri[1]) || $uri[1] == ""){
        $uri[1] = "index";
    }
    
    $routeName = $routes[$uri[1]];

    foreach ($routeName as $key => $value) {
        $controller = $key;
        $action = $value;
    }

    unset($uri[1]);
}

if(!empty($uri))
{
    foreach ($uri as $key => $value) {
        $params[$key] = $value;
    }
}

if (isset($bundle)) {
    require_once "src/" . ucfirst($bundle) . "Bundle/Controller/$controller.php";

    $controller_name = "\\" . ucfirst($bundle) . "Bundle\\Controller\\$controller";

    $$controller = new $controller_name();

    $actionName = $action . 'Action';
    if(isset($params) && !empty($params)) {
        $actionToCall = $$controller->$actionName($params);
    }
    else {
        $actionToCall = $$controller->$actionName();
    }

    if(isset($actionToCall['template']))
    {
        $path = "src/" . ucfirst($bundle) . "Bundle/Ressources/views/";
        
        if(!empty($actionToCall['template'])) {
            $template = $path . $actionToCall['template'] . ".php";
        } else {
            $template = $path . "index.php";
        }
        unset($actionToCall['template']);
    }
}
