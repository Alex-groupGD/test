<?php
session_start();
unset($_SESSION['user']);
header('Location: ../authorization_list.php');