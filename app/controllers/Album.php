<?php

class Album extends Controller
{
	public function index($current_page = 1)
	{
		$data['title'] = 'All Albums';
		$this->view('templates/layout', [
			'mode' => 'all',
			'current_page' => $current_page
		]);
	}

	public function detail($id = 0)
	{
		$data['title'] = 'Album';
		$this->view('templates/layout', [
			'mode' => 'detail',
			'id' => $id,
		]);
	}

	public function add()
	{
		$this->view('templates/layout', [
			'mode' => 'add',
		]);
	}

	public function delete($id = 0)
	{
		$this->model('Album_model')->deleteAlbum($id);
		header('Location: ' . BASE_URL . '/album');
	}

	public function submit()
	{
		if ($_FILES['album-image']) {
			$album_image = $_FILES['album-image'];
			$album_image_path = $this->store_image($album_image);
			$_POST['image-path'] = $album_image_path;
		}

		if ($this->model('Album_model')->addAlbum($_POST) > 0) {
			header('Location: ' . BASE_URL . '/album/add');
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

	public function fetch($data = [])
	{
		if ($data['mode'] == 'detail') {
			$data['content'] = 'album/detail';
			$album = $this->model('Album_model')->getAlbumById($data['id']);
			$songs = $this->model('Song_model')->getSongByAlbumId($data['id']);
			$this->view($data['content'], [
				'album' => $album,
				'songs' => $songs
			]);
		} else if ($data['mode'] == 'all') {
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
		} else if ($data['mode'] == 'add') {
			$data['content'] = 'album/add';
			$this->view($data['content']);
		}
	}
}
