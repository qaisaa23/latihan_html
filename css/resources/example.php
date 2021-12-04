<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Zaki</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style/animate.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
</head>

<body>
    <div class="container">
        <div class="menu-mask" onclick="hideMenu()"></div>
        <div class="header">
            <div class="logo-container">
                <img class="web-logo" src="images/logo-only.png" alt="logo website">
            </div>
            <div class="menu-container">
                <a href="javascript:void()" class="mobile-menu" onclick="showMenu()"><span class="material-icons">menu</span></a>
                <ul class="navigation" id="main-menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">Post</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">Kategori</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">Kontak</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="post-card">
                        <div class="post-header">
                            <h2 class="post-title">Selamat datang di blog saya! (i = <?= $i ?>)</h2>
                            <p class="post-meta"><small>Diposkan pada: 09 Nov 2021 | Oleh: Adnan Zaki</small></p>
                        </div>
                        <img src="images/wp-<?= rand(1, 3) ?>.jpg" alt="Gambar <?= $i + 1 ?>" class="post-image">
                        <div class="post-content">
                            <?php

                            include_once 'post-excerpt.php';
                            echo $content;

                            ?>
                            <a href="#">Read more...</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="sidebar"></div>
            <div class="footer">Copyright &copy; 2021 | Adnan Zaki</div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>