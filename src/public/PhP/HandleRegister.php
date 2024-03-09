<?php 
session_start();
include ("./app/database/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['First_Name'];
    $LastName = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Confirm_pass = $_POST['Confirm_Password'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    echo($FirstName,$LastName,$Email,$Confirm_pass,$Address,$Phone);
    $query_register = "INSERT INTO customer (First_Name,Last_Name,Email,Address,Phone) VALUES ('$FirstName', '$LastName', '$Email', '$Confirm_pass','$Address','$Phone')";
    $result_register = mysqli_query($con, $query_register);

    if ($result_register) {
        
        window.location = "../../../app/views/pages/login.php";
        exit;
    } else {
        // Đăng ký không thành công, hiển thị thông báo lỗi
        $error = "Đã xảy ra lỗi khi đăng ký. Vui lòng thử lại sau.";
    }
}