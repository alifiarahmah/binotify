<?php

class Api extends Controller
{

	public function index()
	{
		echo "";
	}

	public function album($current_page = 1)
	{
		if (isset($current_page)) {
			// pagination
			$item_per_page = 5;
			$item_count = $this->model('Album_model')->getAlbumNums();
			$total_page = ceil($item_count / $item_per_page);
			$first_item = ($item_per_page * $current_page) - $item_per_page;
			$albums = $this->model('Album_model')->getNAlbums($first_item, $item_per_page);

			$data = [
				'current_page' => intval($current_page),
				'total_page' => $total_page,
				'albums' => $albums,
			];
			echo json_encode($data);
		} else {
			$albums = $this->model('Album_model')->getAllAlbums();
			echo json_encode($albums);
		}
	}
}
