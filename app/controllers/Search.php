<?php

class Search extends Controller
{

	public function index($current_page = 1)
	{
		$data['title'] = 'Search';
		$this->view('templates/layout', [
			'current_page' => $current_page,
		]);
	}

	public function fetch($raw_data = [])
	{
		$data['content'] = 'search/index';
		if (isset($_POST['q'])) {
			$keyword = htmlspecialchars($_POST['q']);
		} else {
			$keyword = '';
		}
		$this->view($data['content'], [
			'search' => $keyword, // TODO: find a way to use $_GET instead of $_POST
			'albums' => $this->model('Album_model')->searchAlbum($keyword),
			'songs' => $this->model('Song_model')->searchSong($keyword),
			'genres' => $this->model('Song_model')->getAllGenres(),
		]);
	}
}
