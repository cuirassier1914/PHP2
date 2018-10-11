<?php
function Auth(){

    global  $db;
    global $itemsnumber;

    $userContent = '
        <h3>
            Неверное имя пользователя или пароль
        </h3>
        <a href="/?controller=user">Войти</Войти></a>
        <a href="/?controller=registration">Зарегистрироваться</a>
        ';

    if(isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $usersList = getUsers();

        foreach($usersList as $users => $user) {


            $isName = in_array($username, $user);
            $truePass = $user['password'];
            $userId = $user['id'];

            if ($isName && crypt($password, PASS_SALT) === $truePass) {

                $userContent = '
        <h3>
            Здравствуйте ' . $username . ' !
        </h3>
        <a href="/?controller=afterExit">Выйти</Войти></a>
        <a href="/?controller=profile">Личный кабинет</a>
        ';

                $_SESSION['name'] = $username;
                $_SESSION['userId'] = $userId;

                //"Запомнить меня"
                if (array_key_exists('checkbox', $_POST)) {

                    $key = random_int(100, 999);
                    $_SESSION[$key] = $username;
                    setcookie('user', $key, time() + (3600*24*30), 'localhost');
                    $sql = "UPDATE `users` SET `key` = '$key' WHERE `users`.`id` = $userId";
                    mysqli_query($db, $sql);
                }
                //
                break;
            };
        };
    }
    return $userContent;

};
$afterAuth = Auth();