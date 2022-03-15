<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengulang Pembelajaran CSS</title>
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
                <img src="img/logo-only.png" alt="" class="web-logo">
            </div>
            <div class="menu-container">
                <a class="mobile-menu cursor-pointer" onclick="showMenu()"><span class="material-icons">Menu</span></a>
                <ul class="navigation">
                    <li class="menu-item">
                        <a href="#" class="menu-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">Post</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">Contact</a>
                    </li>
                </ul>

            </div>


        </div>
        <div class="content-wrapper">
            <div class="content">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="post-card">
                        <div class="post-header">
                            <h2 class="post-tittle">Selamat datang di Blog saya! ( i = <?= $i ?> )</h2>
                            <p class="post-meta"><small>Dipostkan pada : 28 februari 2022 oleh : Qais Abdul Aziz</small></p>
                        </div>
                        <img src="img/wp<?= rand(1, 3) ?>.jpg" alt="post ke-<?= $i + 1 ?> " class="post-image">
                        <div class="post-content">
                            <?php


                            include_once 'postulangan.php';
                            echo $content;
                            ?>
                            <a href="#">Read more...</a>


                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="sidebar">
                <div class="sidebar-content">
                    <p class="sb-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae omnis rerum delectus architecto aut saepe harum temporibus nemo et libero nam odio sed magnam corporis, reiciendis, alias id debitis dolore, quis consequatur? Delectus, harum earum dolorum asperiores quae voluptatibus deleniti quos hic rerum quidem, fugit, nisi magnam! Ipsam quis exercitationem cupiditate sunt eligendi officiis quae iure, pariatur officia ad. Ratione, nesciunt? Totam, voluptatum quos? Tenetur incidunt fugiat porro omnis eius reiciendis tempora unde optio ut ullam ea, velit pariatur? Dolore ducimus incidunt maxime quisquam porro necessitatibus totam possimus, nihil autem aliquid iure velit commodi beatae ut eum! Quam, assumenda dicta?</p>
                </div>
            </div>
            <div class="footer">copyright &copy; 2021 | qais abdul aziz</div>

        </div>

    </div>

    <script src="js/main.js"></script>
</body>

</html>