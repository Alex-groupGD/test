<?php

        session_start();
        require 'sql_query.php';
        require 'connect.php';
        require 'typing_verf.php';

        $password = $_POST['password'];
        $password_conf = $_POST['password_conf'];
        $adress = $_POST['adress'];
        $text_coment = $_POST['text_coment'];
        $inst = $_POST['inst'];

        $gridRadios = $_POST['gridRadios1'];
        gender($gridRadios);

        $mail = $_POST['mail'];
        $check_mail = mysqli_query(conect(), query_mail($mail));
        check_mail($check_mail);

        $date_dr = $_POST['date_dr'];
        check_dr($date_dr);



    if($password === $password_conf){

        //require 'password_check_list.php';
        password_verf($password);
        $password= md5($password);

        mysqli_query( conect() , query_insert( $mail , $password, $date_dr , $gridRadios , $adress , $text_coment , $inst));

        $_SESSION['massege'] = 'Регистрация прошла успешно';
        header('Location: ../authorization_list.php');
    }

    else{
        $_SESSION['massege'] = 'Пароли не совпадают';
        header('Location: ../regist.php');

    }

    //session_destroy();
?>