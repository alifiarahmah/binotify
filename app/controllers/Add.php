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
    
    public function submit_song()
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
            header('Location: ' . BASE_URL . '/add/song');
            exit;
        }
    }

    public function submit_album()
    {
        if ($_FILES['album-image']) {
            $album_image = $_FILES['album-image'];
            $album_image_path = $this->store_image($album_image);
            $_POST['image-path'] = $album_image_path;
        }

        if ($this->model('Album_model')->addAlbum($_POST) > 0) {
            header('Location: ' . BASE_URL . '/add/album');
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
}