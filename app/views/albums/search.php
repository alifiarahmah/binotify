<section id="albums">
	<?php if ($data['q']) { ?>
		<h1>Searching for "<?= $data['q']; ?>"</h1>

		<?php if (count($data['albums']) > 0) { ?>
			<div class="search-option-container">
				<select name="sort" id="sort" form="carform" label="Sort by">
					<option value="">Sort by</option>
					<option value="title_asc">Title (A-Z)</option>
					<option value="title_desc">Title (Z-A)</option>
					<option value="date_desc">Release Date (Newest First)</option>
					<option value="date_asc">Release Date (Oldest First)</option>
				</select>
				<select name="sort" id="sort" form="carform" label="Sort by">
					<option value="">Filter Genre:</option>
					<!-- TODO: loop -->
					<option value="title_asc">Title (A-Z)</option>
				</select>
			</div>
			<div class="song-item-container">
				<div class="header-row"></div>
				<div class="header-row"></div>
				<div class="header-row header-title">album title</div>
				<div class="header-row header-artist">artist</div>
				<div class="header-row header-date">date</div>
				<div class="header-row header-genre">genre</div>
				<?php foreach ($data['albums'] as $i => $album) { ?>
					<a class="content-row" href="#">
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
				<p>no albums found</p>
			</div>
		<?php } ?>

	<?php } else { ?>
		<p>There are no keyword in search bar. Start searching for songs!</p>
	<?php } ?>

</section>