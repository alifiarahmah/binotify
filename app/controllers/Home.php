<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', [
            'role' => 'user'
        ]);
        $this->view('home/index', [
            'songs' => $this->model('Song_model')->getAllSongs()
        ]);
        $this->view('templates/footer');
    }
}
