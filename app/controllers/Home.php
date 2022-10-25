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
            'songs' => [[
                'id' => 1,
                'title' => 'Aku Wanita',
                'artist' => 'Penyanyi Wanita',
                'year' => '2092',
                'genre' => 'Pop'
            ], [
                'id' => 2,
                'title' => 'Aku Pria',
                'artist' => 'Penyanyi Pria',
                'year' => '2042',
                'genre' => 'Pop'
            ], [
                'id' => 3,
                'title' => 'Aku Tidak Tahu',
                'artist' => 'Penyanyi Tanpa Jenis Kelamin',
                'year' => '2022',
                'genre' => 'Pop'
            ]]
        ]);
        $this->view('templates/footer');
    }
}
