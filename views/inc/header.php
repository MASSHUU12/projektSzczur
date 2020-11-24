<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="app/public/css/style.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f2a43574a9.js" crossorigin="anonymous"></script>
    <!-- jquery and js -->
    <script src="/app/public/js/banner.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/app/public/js/header.js"></script>
    <script src="/app/public/js/hamburgerdropdown.js"></script>
    <!-- php config -->
    <?php require_once '../config/config.php'; ?> 

</head>
<body onload="changeSlide()">
    <header class="header" id="header">
        <div class="logo"><a class="header-links" href="/"><h2>Logo</h2></a></div>
        <a class="header-links" href="site.php">categories</a>
        <div class="header-search-container">
            <input class="searchbar" type="text" placeholder="Search">
            <button class="searchbar-button"><i class="fas fa-search"></i></button>
        </div>
        <div class="header-text fxver">
            <ul>
                <a href="login"><li class="header-links">Login</li></a>
                <a href="signup"><li class="header-links">Sign up</li></a>
            </ul>
        </div>
        <div class="header-icons fxver">
            <i class="fas fa-shopping-cart fa-lg"></i>
        </div>
        <div class="header-hamburger-dropdown">
            <i onclick="headerHamburger()" class="header-hamburger-dropdown-button">aaa</i>
            <div id="header-hamburger-dropdown-id" class="header-hamburger-dropdown-content">
                <p>Profile</p>
                <p>Orders</p>
                <p>Menu</p>
                <p>Contact</p>
            </div>
        </div>
    </header>