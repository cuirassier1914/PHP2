<?php
$result=mysqli_query($db, 'SELECT * FROM `foto`');
$list=[];
while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
};

//Получаем данные фото

function getFotoData(){
    global $name;
    global $src;

    if (isset($_GET['name'])){
        $name = $_GET['name'];
        $src = $_GET['src'];
    }

    return ['name' => $name,
            'src' => $src];
}