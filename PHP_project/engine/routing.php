<?php

require_once 'controllers.php';


function getControllerName()
{
    //$parts = explode('/', $_SERVER['REQUEST_URI']);
    //$parts = array_filter($parts);

    //return reset($parts) ? : 'front';
    if (isset($_GET['controller'])) {
        return $_GET['controller'];
    } else {return 'front';}
    //return $_GET['controller'] ? : 'front';

}

function runController($controller)
{
    if ($controller === 'user') {
        $result = runUserController();
    } elseif ($controller === 'registration') {
        $result = runRegistrationController();
    } elseif ($controller === 'front') {
        $result = runFrontController();
    } elseif ($controller === 'afterReg') {
        $result = runAfterRegController();
    } elseif ($controller === 'afterAuth') {
        $result = runAfterAuthController();
    } elseif ($controller === 'afterExit') {
        $result = runAfterExitController();
    } elseif ($controller === 'profile') {
        $result = runProfileController();
    } elseif ($controller === 'add-to-cart') {
        $result = runAddToCartController();
    }
    elseif ($controller === 'add-to-cart-ajax') {
        $result = runAddToCartAjaxController();
    }
    elseif ($controller === 'admin') {
        $result = runAdminController();
    }
    elseif ($controller === 'delete') {
        $result = runDeleteController();
    }
    elseif ($controller === 'order') {
        $result = runOrderController();
    }
    elseif ($controller === 'show-more-goods') {
        $result = runShowMoreGoodsController();
    }
    else {
        //$result = runNotFoundController();
        echo 404;
    }

    return $result;
}
