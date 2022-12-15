<?php
session_start();
include('include/connection.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = stripcslashes(strtolower($_POST['username']));
    $md5_pass = md5($_POST['password']);
    $username = filter_input(INPUT_POST, 'username');
    $password = stripcslashes(strtolower($_POST['password']));

    $username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
}
if (empty($username)) {
        $user_error = '<p id="error"> Please enter your own username :</p> ';
        $err_s = 1;
    }
if (empty($password)) {
        $pass_error = '<p id="error">Please enter your own password :</p> ';
        $err_s = 1;
        include('index.php');
    }


?>