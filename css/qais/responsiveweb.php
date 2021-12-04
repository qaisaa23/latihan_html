<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Responsive dezign | Adnan Zaki S.Kom.</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="styles/animate.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/media.css">
</head>

<body>

    <div class="container">
        <div class="menu-mask"></div>
        <div class="menu-mask" onclick="hideMenu()"></div>
        <div class="header">
            <div class="logo-container">
                <img src="img/logo-only.png" alt="Logo Responsive Web" class="web-logo">
            </div>
            <div class="menu-container">
                <a href="javascript:void" class="mobile-menu" onclick="showMenu()"><span class="material-icons">menu</span></a>
                <ul class="navigation">
                    <li class="menu-item">
                        <a href="" class="menu-link">home</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">post</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">about</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="post-card">
                        <div class="post-header">
                            <h2 class="post-tittle">selamat datang di blog saya ! ( i = <?= $i ?> )</h2>
                            <p class="post-"><small>dipostkan pada: 10 desember 2021 | oleh: Qais Abdul Aziz</small></p>
                        </div>
                        <img src="img/wp-<?= rand(1, 3) ?>.jpg" alt="gambar <?= $i + 1 ?>" class="post-image">
                        <div class="post-content">
                            <?php

                            include_once 'post-excerpt.php';
                            echo $content;


                            ?>
                            <a href="#">read more...</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="sidebar"></div>
            <div class="footer">copyright &copy; 2021 | qais abdul aziz</div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>