<h1>Add Album</h1>
<form action="<?= BASE_URL ?>/album/submit" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="album-title">Title</label>
        <input type="text" name="album-title" id="album-title" class="form-control" placeholder="Album Title" required>
    </div>
    <div class="form-group">
        <label for="album-artist">Artist</label>
        <input type="text" name="album-artist" id="album-artist" class="form-control" placeholder="Album Artist" required>
    </div>
    <div class="form-group">
        <label for="album-release-date">Release Date</label>
        <input type="date" name="tanggal-terbit" id="album-release-date" class="form-control" placeholder="Album Release Date" required>
    </div>
    <div class="form-group">
        <label for="album-genre">Genre</label>
        <input type="text" name="genre" id="album-genre" class="form-control" placeholder="Album Genre" required>
    </div>
    <div class="form-group">
        <label for="album-image">Image</label>
        <input type="file" name="album-image" id="album-image" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="button-solid">Add Album</button>
    </div>
</form>