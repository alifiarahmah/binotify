<?php

class Register extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('register/index');
        $this->view('templates/footer');
    }
}
