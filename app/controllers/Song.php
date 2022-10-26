<?php

class Song extends Controller
{
    public function index($id = 1)
    {
        $data['title'] = 'Song';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/layout', [
            'id' => $id
        ]);
        $this->view('templates/footer');
    }

    public function fetch($data = [])
    {
        $data['content'] = 'song/index';
        $data['song'] = $this->model('Song_model')->getSongById($data['id']);
        $this->view($data['content'], $data['song']);
    }
}
