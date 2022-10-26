<?php

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('login/index');
        $this->view('templates/footer');
    }
}
