<?php

function gender($gridRadios){
    if(empty($gridRadios)){
        $gridRadios = "мужчина";
    }
    else{
        $gridRadios = "женщина";
    }
}

function check_mail($check_mail){
    if (mysqli_num_rows($check_mail)>0){
        $_SESSION['massege'] = 'Пользователь с такой почтой уже существует';
        header('Location: ../regist.php');
        exit();
    }
}

/*function check_dr($date_dr){
    if(empty($date_dr)){
        $_SESSION['massege'] = 'Введите пожалуйста дату своего дня рождения';
        header('Location: ../regist.php');
        exit();
    }
}*/

function password_verf ($password)
{

    if (mb_strlen($password) < 11) {
        $_SESSION['massege'] = ('Пароль должен быть не менее 11 символов');
        header('Location: ../regist.php');
        exit();

    }
    if (!preg_match("#[0-9]+#", $password)) {
        $_SESSION['massege'] = ('Пароль должен содержать хотя бы одну цифру');
        header('Location: ../regist.php');
        exit();

    }

    if (!preg_match("#[ ]#", $password)) {
        $_SESSION['massege'] = ('Пароль должен содержать хотя бы один пробел');
        header('Location: ../regist.php');
        exit();

    }
    if (!preg_match("#[-]#", $password)) {
        $_SESSION['massege'] = ('Пароль должен содержать хотя бы дефис ');
        header('Location: ../regist.php');
        exit();

    }

}