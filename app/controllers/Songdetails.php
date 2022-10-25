<?php

class Songdetails extends Controller
{
    public function index()
    {
        $data['title'] = 'Song';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('songdetails/index');
        $this->view('templates/footer');
    }
}