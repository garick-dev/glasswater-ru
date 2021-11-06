<!doctype html>
<html lang="<?php echo $languageCode ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link href="assets/css/public/reset.min.css" rel="stylesheet">
    <link href="assets/css/public/style.css" rel="stylesheet">
    <?php foreach ($styleLinks as $link) {
        ?>
        <link href="<?php echo $link ?>" rel="stylesheet">
        <?php
    } ?>
    <link href="assets/css/public/fonts.css" rel="stylesheet">
    <script src="assets/js/public/main.js" async="async"></script>
</head>
<body class="body">
<header class="header">

    <div class="header__left">
        <div class="header__logo">GlassWater</div>
    </div>
    <div class="header__right">
        <div class="header__menu">
            <ul class="menu __hidden-menu display-none_mob" id="__menu">
                <li class="menu__list"><a class="menu__link">Главная</a></li>
                <li class="menu__list"><a class="menu__link">О нас</a></li>
                <li class="menu__list"><a class="menu__link">Услуги</a></li>
                <li class="menu__list"><a class="menu__link">Работы</a></li>
                <li class="menu__list"><a class="menu__link">Контакты</a></li>
            </ul>
        </div>

        <div class="header__lang">Russian (RU)</div>


        <div class="header__user">
            <img src="assets/media/public/common/user.png" alt="user">
        </div>
        <div class="burger" id="__burger">
            <span id="__burger-item-1" class="burger__item "></span>
            <span id="__burger-item-2" class="burger__item"></span>
            <span id="__burger-item-3" class="burger__item"></span>
        </div>
    </div>
</header>
<section class="content">

