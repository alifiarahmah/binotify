<?php

class Song extends Controller
{
    public function index()
    {
        $data['title'] = 'Song';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/layout');
        $this->view('templates/footer');
    }

    public function fetch()
    {
        $data['content'] = 'song/index';
        $this->view($data['content']);
    }
}