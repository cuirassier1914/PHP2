<?php
const PASS_SALT = 'vdafg12332vsdfvseafwes34';

function registration(){
    $username ='';
    $password ='';
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    $passHash = crypt($password, PASS_SALT);

    global $db;
    $sql = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$passHash')";
    mysqli_query($db, $sql);

    return '';
}