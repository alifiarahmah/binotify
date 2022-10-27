<div class="login-container">
    <h1 class="login-title">Selamat datang di Binotify! Silakan isi data berikut untuk mendaftar.</h1>
    <form action="register/validate" method="post" class="login-form">
        <input class="login-input" type="email" name="email" placeholder="Email" />
        <input class="login-input" type="text" name="username" placeholder="Username" />
        <input class="login-input" type="password" name="password" placeholder="Password" />
        <input class="login-input" type="password" name="confirm" placeholder="Confirm password" />
        <input type="submit" value="Register" />
    </form>
    <p>
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
    </p>
    <p class="login-register">Sudah punya akun? <a href="login">Masuk</a></p>
</div>