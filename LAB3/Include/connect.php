<?php

    function conect(){
        $con = mysqli_connect($host = "localhost", "root", $password = "", $data = "dsatbase");
            mysqli_select_db($con, 'dsatbase');
            if (!$con) {
                die('error connect!');
            }

    return $con;
    }