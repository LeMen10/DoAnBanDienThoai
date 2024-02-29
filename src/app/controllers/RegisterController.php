<?php
require './app/core/Controller.php';

class AuthController extends Controller
{
    private $user_model;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->user_model = new UserModel();
    }
    public function index()
    {
        return $this->view('main_layout', ['page' => 'register']);
    }
    public function register(){
        return $this->view('null_layout', ['page' => 'register']);
    }
}