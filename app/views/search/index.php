<section id="search">
	<?php if (isset($data['search']) && $data['search'] != "") { ?>
		<div class="search-header">
			<div>
				<h1>Searching for "<?= $data['search']; ?>"</h1>
				<p><?= $data['item_count']; ?> results found</p>
			</div>
			<div class="search-option-container">
				<form method="post" action="<?= BASE_URL ?>/<?= $_GET['url'] ?>">
					<select title="Sort" name="sort" id="sort" class="button-solid">
						<option value="" disabled>Sort by</option>
						<option value="">Unsorted</option>
						<option value="title-asc">Title (A-Z)</option>
						<option value="title-desc">Title (Z-A)</option>
						<option value="date-desc">Release Date (Newest First)</option>
						<option value="date-asc">Release Date (Oldest First)</option>
					</select>
					<select title="Filter" name="filter" id="filter" class="button-solid">
						<option value="" disabled>Genre</option>
						<option value="all">All genres</option>
						<?php foreach ($data['genres'] as $genre) { ?>
							<option value="<?= $genre['genre']; ?>"><?= $genre['genre']; ?></option>
						<?php } ?>
						<option value="NULL">-</option>
					</select>
					<input id="search-option-submit" type="submit" class="button-solid" />
				</form>
			</div>
		</div>
		<div>
			<?php if ($data['sort'] != '') { ?>
				<p>Sorted by:
					<?php switch ($data['sort']) {
						case 'title-asc':
							echo 'Title (A-Z)';
							break;
						case 'title-desc':
							echo 'Title (Z-A)';
							break;
						case 'date-asc':
							echo 'Release Date (Oldest First)';
							break;
						case 'date-desc':
							echo 'Release Date (Newest First)';
							break;
					} ?>
				</p>
			<?php } ?>
			<?php if ($data['filter'] != 'all') { ?>
				<p>Applied filter: <?= $data['filter']; ?></p>
			<?php } ?>
		</div>

		<?php if (count($data['songs']) > 0) { ?>
			<div class="song-item-container">
				<div class="header-row"></div>
				<div class="header-row header-title">song title</div>
				<div class="header-row header-artist">artist</div>
				<div class="header-row header-date">date</div>
				<div class="header-row header-genre">genre</div>
				<?php foreach ($data['songs'] as $i => $song) { ?>
					<a class="content-row" href="<?= BASE_URL ?>/song/<?= $song['song_id'] ?>">
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
			<?php $base_url = BASE_URL . "/search/" . $data['search'] ?>
			<?php require_once __DIR__ . '/../templates/pagination.php' ?>
		<?php } else { ?>
			<p>No songs found</p>
		<?php } ?>

	<?php } else { ?>
		<p>There are no keyword in search bar. Start searching for songs!</p>
	<?php } ?>

</section>