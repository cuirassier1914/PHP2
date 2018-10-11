<?php


function render($file, $variables = [])
{
    ob_start();
    extract($variables, EXTR_OVERWRITE);

    include "../templates/" . $file . ".php";

    return ob_get_clean();
}
