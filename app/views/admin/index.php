<div>
    <h1>
        Selamat datang di page admin, 
        <?php
        echo $_SESSION['username'];
        ?>
    </h1>
    <a href="<?php echo BASE_URL; ?>/logout">Logout</a>
</div>