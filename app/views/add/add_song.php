<h1>Add Song</h1>
<form action="<?= BASE_URL ?>/add/submit_song" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="song-title">Title</label>
        <input type="text" name="song-title" id="song-title" class="form-control" placeholder="Song Title" required>
    </div>
    <div class="form-group">
        <label for="song-artist">Artist</label>
        <input type="text" name="song-artist" id="song-artist" class="form-control" placeholder="Song Artist" required>
    </div>
    <div class="form-group">
        <label for="song-release-date">Release Date</label>
        <input type="date" name="release-date" id="song-release-date" class="form-control" placeholder="Song Release Date" required>
    </div>
    <div class="form-group">
        <label for="song-genre">Genre</label>
        <input type="text" name="genre" id="song-genre" class="form-control" placeholder="Song Genre" required>
    </div>
    <div class="form-group">
        <label for="song-duration">Duration</label>
        <input type="number" name="duration" id="song-duration" class="form-control" placeholder="Song Duration" required>
    </div>
    <div class="form-group">
        <label for="song-album">Album</label>
        <select name="song-album" id="song-album" class="form-control" required>
            <option value="" selected disabled>Select Album</option>
            <?php foreach ($data['albums'] as $album) { ?>
                <option value="<?= $album['album_id'] ?>"><?= $album['album_title'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="song-image">Cover</label>
        <input type="file" name="song-image" id="song-image" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="song-file">Audio</label>
        <input type="file" name="song-file" id="song-file" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="button-solid">Add Song</button>
    </div>
</form>