<?php

function getControllerName(){
    if (isset($_GET['controller'])) {
        return $_GET['controller'];
    } else {
        return 'front.html';
    };
};

function runController(){
    if ($controller === 'foto') {
        $templateName = 'foto.html';
    } else {
        $templateName = 'front.html';
    }
};