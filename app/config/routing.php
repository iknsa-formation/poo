<?php

$applications = array(
    "user",
    "content"
);

$url = explode("/", $_SERVER['REQUEST_URI']);
unset($url[0]);
foreach ($url as $key => $value) {
    if($value == $parameters['siteName'] || $value == $parameters['siteRoot']) {
        unset($url[$key]);
    }
}

$uri = [];
foreach ($url as $key => $value) {
    $uri[] = $value;
}
if(!isset($uri[0]) || $uri[0] == '') {
    $bundle = 'app';
}
else {
    $bundle = $uri[0];
    unset($uri[0]);
}

try {
    if(!in_array($bundle, $applications)) {
        throw new Exception("Le module recherché n'existe pas");
    }
    else {
        require_once "src/" . ucfirst($bundle) . "Bundle/Ressources/config/routing.php";
    }
} catch (Exception $e) {
    $error[] = $e->getMessage();
}
