<?php

class Album_model
{

	private $table = 'album';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAlbums()
	{
		$this->db->query("SELECT 
            album_id, album_title, album_artist, total_duration, image_path, tanggal_terbit, genre
            FROM $this->table ORDER BY album_title ASC");
		return $this->db->resultSet();
	}

	public function getAlbumById($id)
	{
		$this->db->query("SELECT 
			album_id, album_title, album_artist, total_duration, image_path, tanggal_terbit, genre 
			FROM $this->table 
			WHERE id=:id");
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function getAlbumNums()
	{
		$this->db->query("SELECT COUNT(*) FROM $this->table");
		return $this->db->single()['COUNT(*)'];
	}

	public function getAlbums($first_item, $item_per_page)
	{
		$this->db->query("SELECT 
						album_id, album_title, album_artist, total_duration, image_path, tanggal_terbit, genre
						FROM $this->table ORDER BY album_title ASC LIMIT $first_item, $item_per_page");
		return $this->db->resultSet();
	}

	public function addAlbum($data)
	{
		$query = "INSERT INTO $this->table
										VALUES
									(:album_title, :album_artist, :total_duration, :image_path, :tanggal_terbit, :genre)";

		$this->db->query($query);
		$this->db->bind('album_title', $data['album_title']);
		$this->db->bind('album_artist', $data['album_artist']);
		$this->db->bind('total_duration', $data['total_duration']);
		$this->db->bind('image_path', $data['image_path']);
		$this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
		$this->db->bind('genre', $data['genre']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteAlbum($id)
	{
		$query = "DELETE FROM $this->table WHERE album_id = :album_id";
		$this->db->query($query);
		$this->db->bind('album_id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateAlbum($data)
	{
		$query = "UPDATE $this->table SET
					album_title = :album_title,
					album_artist = :album_artist,
					total_duration = :total_duration,
					image_path = :image_path,
					tanggal_terbit = :tanggal_terbit,
					genre = :genre
					WHERE album_id = :album_id";

		$this->db->query($query);
		$this->db->bind('album_title', $data['album_title']);
		$this->db->bind('album_artist', $data['album_artist']);
		$this->db->bind('total_duration', $data['total_duration']);
		$this->db->bind('image_path', $data['image_path']);
		$this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
		$this->db->bind('genre', $data['genre']);
		$this->db->bind('album_id', $data['album_id']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
