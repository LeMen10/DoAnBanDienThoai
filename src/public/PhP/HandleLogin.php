<?php 
session_start();
include ("./app/database/connect.php");
if(isset($_POST['user']) && isset($_POST['password'])){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM customer WHERE email = '$user' AND password = 'md5($pass)'";
    $result = mysqli_query($con, $query);
    if ($result -> num_rows) {
        $array = mysqli_fetch_array($result);
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;

    }
    else {
        echo('Tài khoản không tồn tại!');
    }
}

