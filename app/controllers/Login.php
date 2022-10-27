<?php

class Login extends Controller
{
    function __construct()
    {
        $this->userModel = $this->model('User_model');
        session_start();
    }

    public function index()
    {
        $data['title'] = 'Log in to Binotify';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function validate()
    {
        $this->userModel->validateUser();
    }
}
