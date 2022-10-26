<section id="song">
    <?php if ($data['song']) { ?>
        <div class="song-details">
            <div class="song-details" id="album-picture">
                <img src="<?= $data['song']['image_path'] ?>" width="150" height="150">
            </div>
            <div class="song-info">
                <h1><?= $data['song']['song_title'] ?></h1>
                <p><?= $data['song']['song_artist'] ?> - <?= $data['song']['release_date'] ?> - <?= $data['song']['duration'] ?> s</p>
                <?php if (!is_null($data['song']['album_id'])) { ?>
                    <p><a href="<?= BASE_URL ?>/album/<?= $data['song']['album_id'] ?>">View album</a></p>
                <?php } ?>
            </div>
        </div>
        <div class="audio-player">
            <audio controls>
                <source src="<?= $data['song']['audio_path']; ?>" type="audio/mpeg">
        </div>
    <?php } else { ?>
        <h1>404 not found</h1>
    <?php } ?>
</section>