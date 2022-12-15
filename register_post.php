<?php
include('include/connection.php');
if (isset($_POST['submit'])) {
    $username = stripcslashes(strtolower($_POST['username']));// for avoid sybloy as (/) which it is used by ha
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
    $md5_pass = md5($password);

    $check_user = "SELECT * FROM `users` WHERE username = '$username'";
    $check_ruslut = mysqli_query($conn, $check_user);
    $num_rows = mysqli_num_rows( $check_ruslut);
    $num_rows_error = $num_rows != 0;
    if($num_rows != 0){//  This condation mains : the username already existed 
        $num_rows_error = '<p id="error">the username already existed.</p>';
        $err_s = 1;
    }

    if (empty($username)) {
        $user_error = '<p id="error"> Please enter your own username :</p> ';
        $err_s = 1;
    } elseif (strlen($username) < 6) {
        $user_error = '<p id="error">your username must have more of 6 letters.</p>';
        $err_s = 1;
    } elseif (filter_var($username, FILTER_VALIDATE_INT)) {
        $user_error = '<p id="error">Please enter letters not numbers.</p>';
        $err_s = 1;
    }
    if (empty($email)) {
        $email_error = '<p id="error">please insert your email :</p> ';
        $err_s = 1;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // @ must be exited
        $email_error = '<p id="error">please a vaild email </p>';
        $err_s = 1;
    }
    if (empty($password)) {
        $pass_error = '<p id="error">Please enter your own password :</p> ';
        $err_s = 1;
        include('register.php');
    } elseif (strlen($password) < 6) {
        $pass_error = '<p id="error">your  must have more of 6 letters.</p>';
        $err_s = 1;
        include('register.php');
    } else {
        if ($err_s == 0&& $num_rows==0) { // No errors && the account does not already exist
            $sql = "INSERT INTO users(username,email,password,md5_pass)
            VALUES('$username','$email','$password','$md5_pass')";
            mysqli_query($conn, $sql);
            header('location:index.php'); // Go to the page index.php if the registration is successful
        } else {
            include('register.php'); // stay in same page if the user don't regiser
        }
    }
}