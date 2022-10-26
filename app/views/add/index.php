<section id="add">
    <?php if ($data['type'] == 'song') { ?>
        <?php require_once __DIR__ . "/add_song.php" ?>
    <?php } else if ($data['type'] == 'album') { ?>
        <?php require_once __DIR__ . "/add_album.php" ?>
    <?php } else { ?>
        <h1>404 Not Found</h1>
    <?php } ?>
</section>