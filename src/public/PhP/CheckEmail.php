<?php
include ("./app/database/connect.php");

$emailExist = false;
if(isset($_GET['Email'])) {
    $query = mysqli_query($con, "SELECT * FROM customer WHERE email LIKE '" . mysqli_real_escape_string($con, $_GET['Email']) . "'");
    // $query = mysqli_query($con,"SELECT * FROM customer WHERE email like '".$_GET['Email']."' ");
    if($query !== false && $query -> num_rows > 0) {
        $emailExist = true;
    }
}

// Kiểm tra xem tên và họ có chứa số không
$tenChuaSo = false;
if(isset($_GET['First_Name']) || isset($_GET['Last_Name'])) {
    if (preg_match('/d[0-9]/', $_GET['First_Name'])  || preg_match('/d[0-9]/', $_GET['Last_Name'])) {
        $tenChuaSo = true;
    }
}


$result = array(
    "emailTonTai" => $emailExist,
    "tenChuaSo" => $tenChuaSo
);

echo json_encode($result);

