<?php

require './app/database/connect.php';

class CartModel extends connect
{
    public function getCart()
    {
        $sql =
            'SELECT p.name, v.price, c.quantity, c.id, i.image FROM cart c ' .
            'JOIN variant v ON c.phoneID = v.phoneID ' .
            'JOIN image i ON c.phoneID = i.phoneID ' .
            'JOIN phone p ON c.phoneID = p.id WHERE c.id = 1 GROUP BY c.id;';
        $result = mysqli_query($this->con, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function updateQuantity($id, $quantity)
    {
        $sql = 'UPDATE cart c SET c.quantity = '.$quantity.' WHERE c.id = '. $id;
        mysqli_query($this->con, $sql);
    }
}
