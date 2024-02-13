<?php

require './app/database/connect.php';

class ProductModel extends connect
{
    public function getAll(){
        $sql = "SELECT * FROM phone";
        $result = mysqli_query($this->con, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
}
