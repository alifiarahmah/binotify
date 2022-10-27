<?php require_once __DIR__ . "/header.php" ?>
<?php require_once __DIR__ . "/navbar.php" ?>

<div class="layout-container">
    <!-- Sidebar -->
    <div class="sidebar-container">
        <div class="sidebar-item">
            <a href="<?= BASE_URL ?>/album/1">
                <button class="button-sidebar">
                    <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36 0H12C9.8 0 8 1.8 8 4V28C8 30.2 9.8 32 12 32H36C38.2 32 40 30.2 40 28V4C40 1.8 38.2 0 36 0ZM32 10H26V21C26 23.76 23.76 26 21 26C18.24 26 16 23.76 16 21C16 18.24 18.24 16 21 16C22.14 16 23.16 16.38 24 17.02V6H32V10ZM4 8H0V36C0 38.2 1.8 40 4 40H32V36H4V8Z" />
                    </svg>
                    <div>ALBUMS</div>
                </button>
            </a>
        </div>
        <div class="sidebar-item">
            <a href="<?= BASE_URL ?>">
                <button class="button-sidebar">
                    <svg width="24" height="36" viewBox="0 0 24 36" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0V21.1C10.82 20.42 9.46 20 8 20C3.58 20 0 23.58 0 28C0 32.42 3.58 36 8 36C12.42 36 16 32.42 16 28V8H24V0H12Z" />
                    </svg>
                    <div>ALL SONGS</div>
                </button>
            </a>
        </div>
        <div class="sidebar-item">
            <button class="button-sidebar" onclick="showSearch()">
                <svg width="35" height="35" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 22H23.42L22.86 21.46C24.82 19.18 26 16.22 26 13C26 5.82 20.18 0 13 0C5.82 0 0 5.82 0 13C0 20.18 5.82 26 13 26C16.22 26 19.18 24.82 21.46 22.86L22 23.42V25L32 34.98L34.98 32L25 22V22ZM13 22C8.02 22 4 17.98 4 13C4 8.02 8.02 4 13 4C17.98 4 22 8.02 22 13C22 17.98 17.98 22 13 22Z" />
                </svg>
                <div>SEARCH</div>
            </button>
        </div>
    </div>
    <div class="content-container">
        <div class="content">
            <?= $this->fetch($data) ?>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/footer.php" ?>