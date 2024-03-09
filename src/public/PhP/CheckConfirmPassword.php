<?php
if($_GET['Password'] == $_GET['Confirm_Password']){
    echo json_encode(true);
}
else {
    echo json_encode(false);
}
