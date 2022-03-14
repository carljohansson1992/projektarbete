<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carls Träbyrå</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="galleryimages.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="main-wrapper">
            <header>
                <div class="logo-wrapper">
                    <img class="text-logo" src="images/text-logo.svg">
                </div>
                <div class="navbar">
                    <ul class="navigation">
                        <li>
                            <a class="nav-link" href="index.php">Hem</a>
                        </li>
                        <li>
                            <a class="nav-link" href="gallery.php">Galleri</a>
                        </li>
                        <li>
                            <a class="nav-link" href="blog.php">Blogg</a>
                        </li>
                        <li>
                            <a class="nav-link" href="about.php">Om mig</a>
                        </li>
                        <li>
                            <a class="nav-link" href="contacts.php">Kontakta mig</a>
                        </li>
                        <li>
                            <a class="nav-link" href="register.php">Registrera dig</a>
                        </li>

                            <?php
                                if (isset($_SESSION['loggedin'])){
                                    echo "<li><a class='nav-link' href='logout.php'>Logga ut</a></li>";
                                } else {
                                    echo "<li><a class='nav-link' href='login.php'>Logga in</a></li>";
                                }
                                ?>


                    </ul>
                </div>
                <div class="mobile-nav">
                    <div class="button_container toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li><a href="index.html">Hem</a></li>
                                 <li><a class="toggle" href="gallery.html">Galleri</a></li>
                                 <li><a class="toggle" href="blog.html">Blogg</a></li>
                                <li><a class="toggle" href="about.html">Om mig</a></li>
                                <li><a class="toggle" href="contacts.html">Kontakta mig</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>