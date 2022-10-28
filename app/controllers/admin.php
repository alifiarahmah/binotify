<?php

class Admin extends Controller {
    function __construct() {
        session_start();
    }
    public function index() 
    {
        $data['title'] = 'Admin';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/index');
        $this->view('templates/footer');
    }
}