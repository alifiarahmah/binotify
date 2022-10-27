<section id="album">
    <?php if ($data['album']) { ?>
        <div class="album-details">
            <div class="album-details" id="album-picture">
                <img src="../../<?= $data['album']['image_path'] ?? "public/assets/image/placeholder.jpg" ?>" width="150" height="150">
            </div>
            <div class="album-info">
                <h1><?= $data['album']['album_title'] ?></h1>
                <p><?= $data['album']['album_artist'] ?> - <?= $data['album']['tanggal_terbit'] ?> - <?= $data['album']['total_duration'] ?> s total</p>
            </div>
        </div>
        <div class="song-item-container">
            <div class="header-row"></div>
            <div class="header-row"></div>
            <div class="header-row header-title">song title</div>
            <div class="header-row header-artist">artist</div>
            <div class="header-row header-date">date</div>
            <div class="header-row header-genre">genre</div>
            <?php if (count($data['songs']) > 0) { ?>
                <?php foreach ($data['songs'] as $i => $song) { ?>
                    <a class="content-row" href="<?= BASE_URL ?>/song/<?= $song['song_id'] ?>">
                        <div class="song-number"><?= $i + 1 ?></div>
                        <div class="song-picture">
                            <image src="../../<?= $song['image_path'] ?? "public/assets/image/placeholder.jpg" ?>" width="42px" height="42px">
                        </div>
                        <div class="song-title"><?= $song['song_title']; ?></div>
                        <div class="song-artist"><?= $song['song_artist']; ?></div>
                        <div class="song-date"><?= $song['release_date']; ?></div>
                        <div class="song-genre"><?= $song['genre']; ?></div>
                    </a>
                <?php } ?>
            <?php } else { ?>
                <p>no songs found</p>
            <?php } ?>
        </div>
    <?php } else { ?>
        <h1>404 not found</h1>
    <?php } ?>
</section>