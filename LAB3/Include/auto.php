<?php

    session_start();
    require 'connect.php';
    require 'sql_query.php';



    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $count = '';

    $check_user = mysqli_query(conect(),query_select_profile($email,$password));
    $check_try = mysqli_query(conect(),query_email_count($email));

    if(mysqli_num_rows($check_try) > 0){



    }

    if(mysqli_num_rows($check_try) > 0){

        $_SESSION['massege'] = 'Вы использовали слишком много попыток ' ;
        header('Location: ../authorization_list.php');
        exit();
    }
    else {

        if (mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);
            $_SESSION['user'] = [
                "email" => $user['email']
            ];


            //mysqli_query(conect(), query_count_zero($email));
            header('location: ../transactions.php');


        } else {
            $_SESSION['massege'] = 'Не верный пароль или email';
            header('Location: ../authorization_list.php');
            mysqli_query(conect(), query_count_plus($email));
            $check_try = mysqli_query(conect(), query_email_count($email));
            require 'timer.php';




        }
    }





?>
