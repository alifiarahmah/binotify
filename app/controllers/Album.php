<?php

class Album extends Controller
{
	public function index($current_page = 1)
	{
		$data['title'] = 'All Albums';
		$this->view('templates/layout', [
			'detail' => false,
			'current_page' => $current_page
		]);
	}

	public function detail($id = 0)
	{
		$data['title'] = 'Album';
		$this->view('templates/layout', [
			'detail' => true,
			'id' => $id,
		]);
	}

	public function fetch($data = [])
	{
		if ($data['detail']) {
			$data['content'] = 'album/detail';
			$album = $this->model('Album_model')->getAlbumById($data['id']);
			$songs = $this->model('Song_model')->getSongByAlbumId($data['id']);
			$this->view($data['content'], [
				'album' => $album,
				'songs' => $songs
			]);
		} else {
			$current_page = $data['current_page'];

			// pagination
			$item_per_page = 5;
			$item_count = $this->model('Album_model')->getAlbumNums();
			$total_page = ceil($item_count / $item_per_page);
			$first_item = ($item_per_page * $current_page) - $item_per_page;
			$albums = $this->model('Album_model')->getNAlbums($first_item, $item_per_page);
			
			$data['content'] = 'album/index';
			$this->view($data['content'], [
				'albums' => $albums,
				'current_page' => $current_page,
				'total_page' => $total_page
			]);
		}
	}
}
