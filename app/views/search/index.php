<section id="search">
	<?php if (isset($data['search']) && $data['search'] != "") { ?>
		<div class="search-header">
			<h1>Searching for "<?= $data['search']; ?>"</h1>
			<div class="search-option-container">
				<select name="sort" id="sort" form="sort" class="button-solid">
					<option value="">Sort by</option>
					<option value="title_asc">Title (A-Z)</option>
					<option value="title_desc">Title (Z-A)</option>
					<option value="date_desc">Release Date (Newest First)</option>
					<option value="date_asc">Release Date (Oldest First)</option>
				</select>
				<select name="filter" id="filter" form="filter" class="button-solid">
					<option value="">Filter Genre</option>
					<option value="NULL">Unidentified</option>
					<?php foreach ($data['genres'] as $genre) { ?>
						<option value="<?= $genre['genre']; ?>"><?= $genre['genre']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<?php if (count($data['songs']) > 0) { ?>
			<div class="song-item-container">
				<div class="header-row"></div>
				<div class="header-row"></div>
				<div class="header-row header-title">song title</div>
				<div class="header-row header-artist">artist</div>
				<div class="header-row header-date">date</div>
				<div class="header-row header-genre">genre</div>
				<?php foreach ($data['songs']['result'] as $i => $song) { ?>
					<a class="content-row" href="">
						<div class="song-number"><?= $i + 1 ?></div>
						<div class="song-picture">
							<image src="<?= $song['image_path'] ?? "https://binotify.blob.core.windows.net/photo/placeholder.jpg" ?>" width="42px" height="42px">
						</div>
						<div class="song-title"><?= $song['song_title']; ?></div>
						<div class="song-artist"><?= $song['song_artist']; ?></div>
						<div class="song-date"><?= $song['release_date']; ?></div>
						<div class="song-genre"><?= $song['genre']; ?></div>
					</a>
				<?php } ?>
			</div>
		<?php } else { ?>
			<p>No songs found</p>
		<?php } ?>

	<?php } else { ?>
		<p>There are no keyword in search bar. Start searching for songs!</p>
	<?php } ?>

</section>