<?php
require './app/core/Controller.php';

class AboutController extends Controller
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
        return $this->view('main_layout', ['page' => 'about']);
    }
}
