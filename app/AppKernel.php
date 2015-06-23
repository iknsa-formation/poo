<?php

if(isset($routes))
{
    if(!isset($uri[1]) || $uri[1] == ""){
        $uri[1] = "index";
    }
    
    $routeName = $routes[$uri[1]];

    foreach ($routes[$uri[1]] as $key => $value) {
        $controller = $key;
        $action = $value;
    }
}

if (isset($bundle)) {
    require_once "src/" . ucfirst($bundle) . "Bundle/Controller/$controller.php";
}
