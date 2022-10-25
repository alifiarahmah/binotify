<h1>
    Listen to curated songs
</h1>

<!-- single song item (mobile) -->
<?php foreach ($data['songs'] as $i => $song) { ?>
    <a href="#" class="song-item-container-mobile">
        <div class="song-item">
            <div class="song-item-data">
                <p><?= $i + 1 ?></p>
                <div class="song-picture">
                    <image src="<?= $song['image_path'] ?? "https://source.unsplash.com/42x42" ?>" width="42px" height="42px">
                </div>
                <div>
                    <h3><?= $song['song_title']; ?></h3>
                    <p><?= $song['song_artist']; ?> · <?= $song['release_date']; ?> · <?= $song['genre']; ?></p>
                </div>
            </div>
            <div>
                <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.99999 0.666626C1.71666 0.666626 0.666656 1.71663 0.666656 2.99996C0.666656 4.28329 1.71666 5.33329 2.99999 5.33329C4.28332 5.33329 5.33332 4.28329 5.33332 2.99996C5.33332 1.71663 4.28332 0.666626 2.99999 0.666626ZM17 0.666626C15.7167 0.666626 14.6667 1.71663 14.6667 2.99996C14.6667 4.28329 15.7167 5.33329 17 5.33329C18.2833 5.33329 19.3333 4.28329 19.3333 2.99996C19.3333 1.71663 18.2833 0.666626 17 0.666626ZM9.99999 0.666626C8.71666 0.666626 7.66666 1.71663 7.66666 2.99996C7.66666 4.28329 8.71666 5.33329 9.99999 5.33329C11.2833 5.33329 12.3333 4.28329 12.3333 2.99996C12.3333 1.71663 11.2833 0.666626 9.99999 0.666626Z" fill="white" />
                </svg>
            </div>
        </div>
    </a>
<?php } ?>

<!-- single song item (desktop) -->
<div class="song-item-container-desktop">
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>song title</th>
            <th>artist</th>
            <th>year</th>
            <th>genre</th>
            <th></th>
        </tr>
        <?php foreach ($data['songs'] as $song) { ?>
            <tr>
                <td>1</td>
                <td>
                    <div class="song-picture">
                        <image src="<?= $song['image_path'] ?? "https://source.unsplash.com/42x42" ?>" width="42px" height="42px">
                    </div>
                </td>
                <td><?= $song['song_title']; ?></td>
                <td><?= $song['song_artist']; ?></td>
                <td><?= $song['release_date']; ?></td>
                <td><?= $song['genre']; ?></td>
                <td>
                    <div>
                        <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.99999 0.666626C1.71666 0.666626 0.666656 1.71663 0.666656 2.99996C0.666656 4.28329 1.71666 5.33329 2.99999 5.33329C4.28332 5.33329 5.33332 4.28329 5.33332 2.99996C5.33332 1.71663 4.28332 0.666626 2.99999 0.666626ZM17 0.666626C15.7167 0.666626 14.6667 1.71663 14.6667 2.99996C14.6667 4.28329 15.7167 5.33329 17 5.33329C18.2833 5.33329 19.3333 4.28329 19.3333 2.99996C19.3333 1.71663 18.2833 0.666626 17 0.666626ZM9.99999 0.666626C8.71666 0.666626 7.66666 1.71663 7.66666 2.99996C7.66666 4.28329 8.71666 5.33329 9.99999 5.33329C11.2833 5.33329 12.3333 4.28329 12.3333 2.99996C12.3333 1.71663 11.2833 0.666626 9.99999 0.666626Z" fill="white" />
                        </svg>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>