<?php



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