<?php

class Song_model
{

	private $table = 'song';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSongs()
	{
		$this->db->query("SELECT 
            song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
            FROM $this->table");
		return $this->db->resultSet();
	}

	public function getNSongs($number)
	{
		$this->db->query("SELECT 
            song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
            FROM $this->table ORDER BY song_title ASC LIMIT $number ");
		return $this->db->resultSet();
	}

	public function getAllSongGenres()
	{
		$this->db->query("SELECT DISTINCT genre FROM $this->table WHERE genre IS NOT NULL ORDER BY genre ASC");
		return $this->db->resultSet();
	}

	public function getSongByAlbumId($id)
	{
		$this->db->query("SELECT 
            song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
            FROM $this->table WHERE album_id=:album_id");
		$this->db->bind('album_id', $id);
		return $this->db->resultSet();
	}

	public function getSongById($id)
	{
		$this->db->query("SELECT 
            song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
            FROM $this->table WHERE song_id=:song_id");
		$this->db->bind('song_id', $id);
		return $this->db->single();
	}

	public function addSong($data)
	{
		$query = "INSERT INTO $this->table
										VALUES
									(NULL, :song_title, :song_artist, :release_date, :genre, :duration, :audio_path, :image_path, :album_id)";

		$this->db->query($query);
		$this->db->bind('song_title', $data['song-title']);
		$this->db->bind('song_artist', $data['song-artist']);
		$this->db->bind('release_date', $data['release-date']);
		$this->db->bind('genre', $data['genre']);
		$this->db->bind('duration', $data['duration']);
		$this->db->bind('audio_path', $data['audio-path']);
		$this->db->bind('image_path', $data['image-path']);
		$this->db->bind('album_id', $data['song-album']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteSong($id)
	{
		$query = "DELETE FROM $this->table WHERE song_id = :song_id";
		$this->db->query($query);
		$this->db->bind('song_id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateSong($data)
	{
		$query = "UPDATE $this->table SET
										song_title = :song_title,
										song_artist = :song_artist,
										release_date = :release_date,
										genre = :genre,
										duration = :duration,
										audio_path = :audio_path,
										image_path = :image_path,
										album_id = :album_id
										WHERE song_id = :song_id";

		$this->db->query($query);
		$this->db->bind('song_title', $data['song-title']);
		$this->db->bind('song_artist', $data['song-artist']);
		$this->db->bind('release_date', $data['release-date']);
		$this->db->bind('genre', $data['genre']);
		$this->db->bind('duration', $data['duration']);
		$this->db->bind('audio_path', $data['audio-path']);
		$this->db->bind('image_path', $data['image-path']);
		$this->db->bind('album_id', $data['album-id']);
		$this->db->bind('song_id', $data['song-id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	// HOME
	public function get10LatestSongs()
	{
		$this->db->query(
			"SELECT * FROM (
				SELECT song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
				FROM $this->table
				ORDER BY song_id 
				DESC LIMIT 10
			) ten_song ORDER BY song_title ASC;"
		);
		return $this->db->resultSet();
	}

	// SEARCH

	public function searchSong($search_query)
	{
		$query_tail = "FROM $this->table WHERE song_title LIKE '%$search_query%' ORDER BY song_title ASC";
		$this->db->query(
			"SELECT song_id, song_title, song_artist, release_date, genre, image_path " . $query_tail
		);
		$search_result = $this->db->resultSet();
		$this->db->query("SELECT COUNT(*) " . $query_tail);
		$search_result_count = $this->db->single()['COUNT(*)'];
		return ['result' => $search_result, 'count' => $search_result_count];
	}
}
