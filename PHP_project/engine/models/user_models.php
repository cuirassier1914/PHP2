<?php
$usersList = [];

$guest = '
        <h3>
            Здравствуйте, Гость !
        </h3>
        <a href="/?controller=user">Войти</a>
        <a href="/?controller=registration">Зарегистрироваться</a>
    ';

function getUsers () {
    global $db;
    global $usersList;
    $result = mysqli_query($db, 'SELECT * FROM users');
    while ($row = mysqli_fetch_assoc($result)) {
        $usersList[] = $row;
    };
    return $usersList;
};


function isAuth(){

    global $db;
    global $guest;
    global $count;

    $userContent = $guest;

    $user = isset($_SESSION['userId']);
    $userCookie = isset($_COOKIE['user']);

    $username = '';

    //Проверка на "запомненного"
    if ($user) {
        $username = $_SESSION['name'];
    } elseif ($userCookie) {
        $key = $_COOKIE['user'];
        $result = mysqli_query($db, "SELECT * FROM `users` WHERE `key` = $key");
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $userId = $row['id'];
        $_SESSION['name'] = $username;
        $_SESSION['userId'] = $userId;
    }
    //

    if ($user || $userCookie) {
        $userContent = '
        <h3>
            Здравствуйте ' . $username . ' !
        </h3>
        <a href="/?controller=afterExit">Выйти</Войти></a>
        <a href="/?controller=profile">Личный кабинет</a>
        ';

        if($_SESSION['name'] === 'admin'){
            $userContent = '
        <h3>
            Здравствуйте ' . $username . ' !
        </h3>
        <a href="/?controller=afterExit">Выйти</Войти></a>
        <a href="/?controller=profile">Личный кабинет</a>
        <br><br>
        <a href="/?controller=admin">Раздел администратора</a>
        ';
        }
    }

    return $userContent;

}
$userBar = isAuth();