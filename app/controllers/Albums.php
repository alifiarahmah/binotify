<?php

class Albums extends Controller
{
	public function index($current_page = 1)
	{
		// pagination
		$item_per_page = 5;
		$item_count = $this->model('Album_model')->getAlbumNums();
		$total_page = ceil($item_count / $item_per_page);
		$first_item = ($item_per_page * $current_page) - $item_per_page;
		$data = $this->model('Album_model')->getAlbums($first_item, $item_per_page);


		$this->view('templates/header', [
			'title' => 'All Albums'
		]);
		$this->view('templates/navbar');
		$this->view('albums/index', [
			'albums' => $data,
			'total_page' => $total_page,
			'current_page' => $current_page
		]);
		$this->view('templates/footer');
	}
}
