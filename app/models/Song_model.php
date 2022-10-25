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

	public function getSongById($id)
	{
		$this->db->query("SELECT 
            song_id, song_title, song_artist, release_date, genre, duration, audio_path, image_path, album_id
            FROM $this->table WHERE song_id=:song_id");
		$this->db->bind('song_id', $id);
		return $this->db->resultSet();
	}

	public function addSong($data)
	{
		$query = "INSERT INTO $this->table
										VALUES
									(:song_title, :song_artist, :release_date, :genre, :duration, :audio_path, :image_path, :album_id)";

		$this->db->query($query);
		$this->db->bind('song_title', $data['song_title']);
		$this->db->bind('song_artist', $data['song_artist']);
		$this->db->bind('release_date', $data['release_date']);
		$this->db->bind('genre', $data['genre']);
		$this->db->bind('duration', $data['duration']);
		$this->db->bind('audio_path', $data['audio_path']);
		$this->db->bind('image_path', $data['image_path']);
		$this->db->bind('album_id', $data['album_id']);

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
		$this->db->bind('song_title', $data['song_title']);
		$this->db->bind('song_artist', $data['song_artist']);
		$this->db->bind('release_date', $data['release_date']);
		$this->db->bind('genre', $data['genre']);
		$this->db->bind('duration', $data['duration']);
		$this->db->bind('audio_path', $data['audio_path']);
		$this->db->bind('image_path', $data['image_path']);
		$this->db->bind('album_id', $data['album_id']);
		$this->db->bind('song_id', $data['song_id']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
