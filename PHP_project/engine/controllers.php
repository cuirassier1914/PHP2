<?php

function runFrontController() {
    $_SESSION['shownGoodsCount'] = 8;

    global $catalog;
    global $userBar;

    if (isset($_SESSION['items'])) {
        $count = count($_SESSION['items']);
    } else {
        $count = 0;
    }

    return render('front', ['catalog' => $catalog, 'userBar' => $userBar, 'count' => $count,
        'shownGoodsCount' => $_SESSION['shownGoodsCount']]);
}

function runShowMoreGoodsController() {
    $_SESSION['shownGoodsCount'] = $_SESSION['shownGoodsCount'] + 8;

    global $db;
    $result = mysqli_query($db, 'SELECT `id` FROM goods' );
    while ($row = mysqli_fetch_assoc($result)) {
        $allGoodsNumber[] = $row;
    };

    if ($_SESSION['shownGoodsCount'] < count($allGoodsNumber)) {
        $ifMoreGoods = 1;
        $goods = getGoods($_SESSION['shownGoodsCount']);
    } else {
        $ifMoreGoods = 0;
        $goods = getGoods(count($allGoodsNumber));
    }

    header('Content-Type: application/json');
    echo json_encode([
        'goods' => $goods,
        'ifMore' => $ifMoreGoods,
    ]);
    exit;
}

function runRegistrationController() {
    return render('registration',[]);
}

function runAfterRegController() {
    registration();

    header('Location: ?controller=front');
}

function runUserController() {
    return render('user', []);
    header('Location: /');
}

function runAfterAuthController() {
    Auth();
    global $afterAuth;

    header('Location: ?controller=front');
}

function runAfterExitController() {
    //userExit();

    if (isset($_COOKIE['user'])) {
        $key = $_COOKIE['user'];
        setcookie('user', $key, time() + 0);
    }
    unset($_SESSION['userId']);
    unset($_SESSION['name']);
    if (isset($_SESSION['items'])) {
        unset($_SESSION['items']);
    }
    //return render('afterExit',[]);
    header('Location: ?controller=front');
}

function runProfileController() {

    if (isset($_SESSION['items'])) {
        $count = count($_SESSION['items']);
    } else {
        $count = 0;
    }

    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        delete($n);
    }

    global $userBar;

    if (isset($_SESSION['items'])) {
        $count = count($_SESSION['items']);
    }

    return render('profile', [/*'cart' => $cart, */'userBar' => $userBar, 'count' => $count]);
}

function runAdminController() {
    modifyOrder();
    global $userBar;
    return render('admin', [/*'cart' => $cart, */'userBar' => $userBar]);
}

function runAddToCartController() {
    $id = (int)$_POST['id'];
    if (isset($_SESSION['items'])) {
        $count = count($_SESSION['items']) + 1;
    }
    putInCart($id);
    header('Content-Type: application/json');
    echo json_encode([
        'id' => $id,
        'count' => $count,
    ]);
    exit;
}

function runDeleteController() {
    $n = (int)$_POST['n'];
    if (isset($_SESSION['items'])) {
        $count = count($_SESSION['items']) - 1;
    }
    delete($n);
    header('Content-Type: application/json');
    echo json_encode([
        'n' => $n,
        'count' => $count,
    ]);
    exit;
}

function runOrderController() {
    $count = 0;
    $summ = (int)$_POST['summ'];
    order($summ);
    header('Content-Type: application/json');
    echo json_encode([
        'count' => $count,
    ]);
    exit;
}