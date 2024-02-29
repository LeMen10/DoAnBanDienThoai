<?php
require './app/core/Controller.php';

class CartController extends Controller
{
    private $cart_model;
    public function __construct()
    {
        $this->loadModel('CartModel');
        $this->cart_model = new CartModel();
    }
    public function index()
    {
        $cart = $this->cart_model->getCart();
        return $this->view('main_layout', ['page' => 'cart', 'cart' => $cart]);
    }
    public function update_quantity()
    {
        // $_SESSION['user_id']
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $quantity = $_POST['quantity'];
            print $id;
            $this->cart_model->updateQuantity( $id, $quantity );
        }
    }
}
