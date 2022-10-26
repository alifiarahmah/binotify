<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/layout');
        $this->view('templates/footer');
    }

    public function fetch()
    {
        $this->view('home/index', [
            'content' => 'home/index',
            'songs' => $this->model('Song_model')->getAllSongs()
        ]);
    }
}
