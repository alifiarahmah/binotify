<?php

class Song extends Controller
{
    public function index($id = 0)
    {
        $data['title'] = 'Song';
        $this->view('templates/layout', [
            'id' => $id,
        ]);
    }

    public function fetch($data = [])
    {
        $data['content'] = 'song/index';
        $song = $this->model('Song_model')->getSongById($data['id']);
        $this->view($data['content'], [
            'song' => $song,
        ]);
    }
}
