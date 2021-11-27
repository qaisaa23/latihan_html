<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Qais</title>
    <link rel="stylesheet" href="blog1.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <img class="web-logo" src="resources/images/logo-only.png" alt="gambar logo">
            </div>
            <div class="menu-container">
                <ul class="navigation">
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
                        <img src="resources/images/wp-<?= rand(1, 3) ?>.jpg" alt="Gambar <?= $i + 1 ?>" class="post-image">
                        <div class="post-content">
                            <?php

                            include_once 'resources/post-excerpt.php';
                            echo $content;

                            ?>
                            <a href="#">Read more...</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="sidebar"></div>
        </div>
        <div class="footer">&copy; copyright 2021 | CSS layouting .</div>

    </div>
</body>

</html>