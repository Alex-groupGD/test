<?php
    require 'connect.php';
    require 'sql_query.php';
    require 'auto.php';

function zapret($email)
{
    mysqli_query(conect(), query_count_zero($email));
}