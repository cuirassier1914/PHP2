<?php
session_start();

require_once '../engine/db.php';
require_once '../engine/models.php';
require_once '../engine/routing.php';
require_once '../engine/controllers.php';
require_once '../engine/templating.php';

$controller = getControllerName();
$content = runController($controller);

echo render('layout', ['content' => $content]);