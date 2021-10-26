<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methed cinema - онлайн кинотеатр</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <script type="module">
        import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.esm.js";
    </script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="container header__container">
            <a href="index.php" class="header__logo">
                <span class="header__logo-primary">Methed</span> Cinema
            </a>

            <form class="header__search-form" action="#">
                <input class="header__search-input" type="search" required placeholder="Поиск">
            </form>

            <button class="header__burger-btn js-burger-btn burger-btn-is-visible" aria-label="открыть меню">
                <svg class="header__burger-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.94403 9.8959H34.6564" stroke-width="2.475" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M28.0537 19.8H4.94403" stroke-width="2.475" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.94403 29.7041H21.4509" stroke-width="2.475" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </button>
        </div>
    </header>