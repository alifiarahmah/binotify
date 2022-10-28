<div>
    <h1>
        Welcome to Admin Dashboard page, 
        <?php
        echo $_SESSION['username'];
        ?>
    </h1>
    <a href="<?php echo BASE_URL; ?>/admin/users">Daftar User</a><br>
    <a href="<?php echo BASE_URL; ?>/logout">Logout</a>
</div>