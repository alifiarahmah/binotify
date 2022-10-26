<?php

class Album extends Controller
{
    public function index($id = 1)
    {
        $data['title'] = 'Album';
        $this->view('templates/layout', [
            'id' => $id
        ]);
    }

    public function fetch($data = [])
    {
        $data['content'] = 'album/index';
        $album = $this->model('Album_model')->getAlbumById($data['id']);
        $songs = $this->model('Song_model')->getSongByAlbumId($data['id']);
        $this->view($data['content'], [
            'album' => $album,
            'songs' => $songs
        ]);
    }
}