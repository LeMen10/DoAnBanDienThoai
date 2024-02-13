<?php
require './app/core/Controller.php';

class AuthController extends Controller
{
    private $product_model;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->product_model = new ProductModel();
    }
    public function index()
    {
        // $products = $this->product_model->getAll();
        return $this->view('main_layout', ['page' => 'login']);
    }
    public function login(){
        return $this->view('null_layout', ['page' => 'login']);
    }
    public function register(){
        return $this->view('null_layout', ['page' => 'register']);
    }
}
