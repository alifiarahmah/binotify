<?php

class Songs extends Controller
{
    public function index()
    {
        $data['title'] = 'Songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('songs/index');
        $this->view('templates/footer');
    }
}