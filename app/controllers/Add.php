<?php

class Add extends Controller
{
    public function index($type = '')
    {
        $data['title'] = 'Add';
        $this->view('templates/layout', [
            'type' => $type,
        ]);
    }

    public function fetch($data = [])
    {
        $data['content'] = 'add/index';
        $type = $data['type'];
        if ($type == 'song') {
            $albums = $this->model('Album_model')->getAllAlbums();
        }
        $this->view($data['content'], [
            'type' => $type,
            'albums' => $albums ?? [],
        ]);
    }
}