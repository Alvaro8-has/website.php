<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Website PHP | Alvaro Dewa</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Alvaro Dewa">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">ALVARO DEWA PLAYLIST IPTV</h1>
        <h3 class="desc">Membuat PLAYLIST IPTV untuk OTT & Lain-lain</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>
    </div>
    <footer>
        &copy Copyright Alvaro Dewa 2024
    </footer>
</body>
</html>
