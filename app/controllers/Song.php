<?php

class Song extends Controller
{
    public function index($id = 0)
    {
        $this->view('templates/layout', [
            'add' => false,
            'id' => $id,
        ]);
    }

    public function add()
    {
        $this->view('templates/layout', [
            'add' => true,
        ]);
    }

    public function delete($id = 0)
    {
        $this->model('Song_model')->deleteSong($id);
        header('Location: ' . BASE_URL);
    }

    public function submit()
    {
        if ($_FILES['song-image'] && $_FILES['song-file']) {
            $song_image = $_FILES['song-image'];
            $song_audio = $_FILES['song-file'];
            $song_image_path = $this->store_image($song_image);
            $song_audio_path = $this->store_audio($song_audio);
            $_POST['image-path'] = $song_image_path;
            $_POST['audio-path'] = $song_audio_path;
        }

        if ($this->model('Song_model')->addSong($_POST) > 0) {
            header('Location: ' . BASE_URL . 'song/add');
            exit;
        }
    }

    public function store_image($image)
    {
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_error = $image['error'];

        if ($image_error === 0) {
            $image_destination = 'public/assets/image/' . $image_name;
            move_uploaded_file($image_tmp_name, $image_destination);
            return $image_destination;
        }
    }

    public function store_audio($audio)
    {
        $audio_name = $audio['name'];
        $audio_tmp_name = $audio['tmp_name'];
        $audio_error = $audio['error'];

        if ($audio_error === 0) {
            $audio_destination = 'public/assets/audio/' . $audio_name;
            move_uploaded_file($audio_tmp_name, $audio_destination);
            return $audio_destination;
        }
    }

    public function fetch($data = [])
    {
        if ($data['add']) {
            $data['content'] = 'song/add';
            $albums = $this->model('Album_model')->getAllAlbums();
            $this->view($data['content'], [
                'albums' => $albums,
            ]);
        } else {
            $data['content'] = 'song/index';
            $song = $this->model('Song_model')->getSongById($data['id']);
            $this->view($data['content'], [
                'song' => $song,
            ]);
        }
    }
}
