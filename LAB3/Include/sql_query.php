<?php

function query_insert( $mail , $password, $date_dr , $gridRadios , $adress , $text_coment , $inst){
 return "INSERT INTO `user_regist` (`id`, `email`, `password`, `date`, `gender`, `adress`, `text`, `inst`) 
                                VALUES (NULL, '$mail', '$password', '$date_dr', '$gridRadios', '$adress', '$text_coment', '$inst')";

}
function query_select_profile($email , $password){
    return "SELECT * FROM `user_regist` WHERE `email`='$email' AND `password`='$password'";
}


function query_mail($mail){
    return "SELECT * FROM `user_regist` WHERE `email`='$mail'";
}

function query_count_plus($email){
   return "UPDATE `user_regist` SET `count`=`count`+1 WHERE `email`='$email' ";
}

function query_count_zero($email){
    return "UPDATE `user_regist` SET `count`='0' WHERE `email`='$email' ";
}

function query_email_count($email){
    return "SELECT `email`='$email' FROM `user_regist` WHERE `count`>3 AND `email`='$email'";
}