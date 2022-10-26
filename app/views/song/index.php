<section id="song">
    <div class="song-details">
        <div class="song-details" id="album-picture">
            <img src="<?= $data[0]['image_path'] ?>" width="150" height="150">
        </div>
        <div class="song-info">
            <h1><?= $data[0]['song_title'] ?></h1>
            <p><?= $data[0]['song_artist'] ?> - <?= $data[0]['release_date'] ?> - <?= $data[0]['duration'] ?> s</p>
        </div>
    </div>
    <div class="audio-player">
        <audio controls>
            <source src="<?= $data[0]['audio_path']; ?>" type="audio/mpeg">
    </div>
</section>