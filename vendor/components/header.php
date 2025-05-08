<?
include 'vendor/functions/core.php';
?>

<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title>Петрус | <?=$breadcrumbs?></title>
  <!-- <link rel="preload" href="fonts/MullerRegular.woff2" as="font" type="font/woff2" crossorigin> -->
  <link rel="stylesheet" href="css/vendor.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="js/main.js"></script>
  <script src="https://api-maps.yandex.ru/v3/?apikey=4395c66c-ea8d-421e-9f8f-8509e74f1948&lang=ru_RU"></script>

</head>

<body class="page__body">
    <div class="site-container">
        <header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__row_left">
                <div class="header__row_logo">
                    <a href="index.php" class="header__logo_link">
                        <img src="img/logo.svg" alt="" class="header__logo_img">
                    </a>
                </div>
                <div class="header__row_contacts">
                    <a href="tel:+79999999999" class="header__contacts_phone">+7 (999) 999 99-99</a>
                    <a href="#" class="header__contacts_city">Омск</a>
                </div>
            </div>
            <div class="header__row_right">
                <div class="header__row_menu">
                    <ul class="header__menu" <?if(isset($_SESSION['user'])){?>
                        
                        <?if($_SESSION['user']['role'] == '1'){?>
                            style='width:53rem;'
                        <?}else{?>
                            style='width:48rem;'
                            <?}?>
                    <?}?>
                    >
                        <li class="header__menu_item">
                            <a href="index.php#products" class="header__menu_link">Наша продукция</a>
                        </li>
                        <li class="header__menu_item">
                            <a href="articles.php" class="header__menu_link">Пресс-центр</a>
                        </li>
                        <li class="header__menu_item">
                            <a href="#contacts" class="header__menu_link">Контакты</a>
                        </li>
                        <?if(isset($_SESSION['user'])){?>
                            <?if($_SESSION['user']['role'] == '1'){?>
                                <li class="header__menu_item">
                                    <a href="admin.php" class="header__menu_link">А-панель</a>
                                </li>
                                
                            <?}?>
                            <li class="header__menu_item">
                                    <a href="logout.php" class="header__menu_link">Выход</a>
                                </li>
                        <?}?>
                    </ul>
                </div>
                <div class="header__row_btn">
                    <a href="#" class="header__btn_item" >Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="slick-bg">

</div>
<div class="burger-menu">
    <div class="container">
        <div class="burger-menu__row">
            <a href="index.php" class="header__logo_link">
                <img src="img/logo.svg" alt="" class="header__logo_img">
            </a>
            <div class="header__burger" data-menu>
                <nav class="burger__menu">
                    <ul class="burger__list">
                        <li class="burger__item">
                            <a href="#" class="burger__link"><img src="img/logo.svg" alt="" class="header__logo_img"></a>
                        </li>
                        <li class="burger__item">
                            <a href="index.php" class="burger__link">Главная</a>
                        </li>
                        <li class="burger__item">
                            <a href="index.php#products" class="burger__link">Наша продукция</a>
                        </li>
                        <li class="burger__item">
                            <a href="articles.php" class="burger__link">Пресс-центр</a>
                        </li>
                        <li class="burger__item">
                            <a href="#contacts" class="burger__link">Контакты</a>
                        </li>
                        <?if(isset($_SESSION['user'])){?>
                            <?if($_SESSION['user']['role'] == '1'){?>
                                <li class="burger__item">
                                    <a href="admin.php" class="burger__link">Админ-панель</a>
                                </li>
                                <li class="burger__item">
                                    <a href="logout.php" class="burger__link">Выход</a>
                                </li>
                            <?}?>
                        <?}?>
                    </ul>
                </nav>
            </div>


            <button class="burger" data-burger>
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
    <div class="burger__overlay" data-menu-overlay></div>

</div>