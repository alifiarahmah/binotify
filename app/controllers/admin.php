<?php

class Admin extends Controller {
    function __construct() {
        session_start();
        if (!isset($_SESSION['username']) || $_SESSION['isAdmin'] == false) {
            $_SESSION['error'] = 'You must be logged in as admin to access this page';
            header('Location: ' . BASE_URL . '/login');
        }
    }
    public function index() 
    {
        $data['title'] = 'Binotify Admin Dashboard';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/index');
        $this->view('templates/footer');
    }
    public function users()
    {
        require_once __DIR__.'/../models/User_model.php';
        $users = $this->model('User_model')->getAllUsers();
        $data['title'] = 'Binotify Users List';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/users', $data=$users);
        $this->view('templates/footer');
    }
}