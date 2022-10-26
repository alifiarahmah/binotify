<section id="albums">
	<h1>All Albums</h1>

	<?php if (count($data['albums']) > 0) { ?>
		<div class="song-item-container">
			<div class="header-row"></div>
			<div class="header-row"></div>
			<div class="header-row header-title">album title</div>
			<div class="header-row header-artist">artist</div>
			<div class="header-row header-date">date</div>
			<div class="header-row header-genre">genre</div>
			<?php foreach ($data['albums'] as $i => $album) { ?>
				<a class="content-row" href="<?= BASE_URL ?>/album/<?= $album['album_id'] ?>">
					<div class="album-number"><?= $i + 1 ?></div>
					<div class="album-picture">
						<image src="<?= $album['image_path'] ?? "https://binotify.blob.core.windows.net/photo/placeholder.jpg" ?>" width="42px" height="42px">
					</div>
					<div class="album-title"><?= $album['album_title']; ?></div>
					<div class="album-artist"><?= $album['album_artist']; ?></div>
					<div class="album-date"><?= $album['tanggal_terbit']; ?></div>
					<div class="album-genre"><?= $album['genre']; ?></div>
				</a>
			<?php } ?>
		<?php } else { ?>
			<p>No albums found</p>
		</div>
	<?php } ?>

</section>
<?php $base_url = BASE_URL . '/albums' ?>
<?php require_once __DIR__ . '/../templates/pagination.php' ?>