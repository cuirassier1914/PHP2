<?php
session_start();


require_once '../engine/db.php';
require_once '../engine/routing.php';
require_once '../engine/models.php';

$templateName = getControllerName();


require_once 'C:/Users/Sergio/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('C:/xampp/htdocs/PHP2_lesson3/templates');
$twig = new Twig_Environment($loader, array(
    'debug' => true,
));
$twig->addExtension(new Twig_Extension_Debug());

$fotoData = getFotoData();

$template=$twig -> LoadTemplate($templateName);
echo $template -> render([
    'list' => $list,
    'foto' => $fotoData
    ]);



