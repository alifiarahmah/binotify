<?php

class Albums extends Controller
{
	public function index($current_page = 1)
	{
		$data['title'] = 'All Albums';
		$this->view('templates/layout', [
			'current_page' => $current_page
		]);
	}

	public function fetch($data = [])
	{
		$current_page = $data['current_page'];

		// pagination
		$item_per_page = 5;
		$item_count = $this->model('Album_model')->getAlbumNums();
		$total_page = ceil($item_count / $item_per_page);
		$first_item = ($item_per_page * $current_page) - $item_per_page;
		$albums = $this->model('Album_model')->getNAlbums($first_item, $item_per_page);
		$data['content'] = 'albums/index';

		$this->view($data['content'], [
			'albums' => $albums,
			'total_page' => $total_page,
			'current_page' => $current_page
		]);
	}
}
