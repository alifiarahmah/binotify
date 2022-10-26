<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/layout');
    }

    public function fetch()
    {
        $this->view('home/index', [
            'content' => 'home/index',
            'songs' => $this->model('Song_model')->getAllSongs()
        ]);
    }
}
