<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Listen to all songs';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('home/index', [
            'songs' => $this->model('Song_model')->getNSongs(10)
        ]);
        $this->view('templates/footer');
    }
}
