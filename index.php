<?php include('header.php')?>

    <main>
        <section class="film-week">
            <div class="container film-week__container">
                <img class="film-week__poster" src="img/film-week/dune.jpg" alt="постер фильма Дюна">
                <h2 class="film-week__title">ДЮНА</h2>
                <p class="film-week__tagline">За пределами страха ждёт судьба</p>
                <button class="film-week__watch-btn">Смотреть фильм</button>
                <a class="film-week__watch-trailer" href="https://youtu.be/Q6nepw3fskg" aria-label="смотреть трейлер" data-fancybox></a>
            </div>
        </section>

        <section class="other-films">
            <div class="container">
                <h2 class="other-films__title">Другие фильмы
                    <span class="other-films__title-add">на Methed Cinema</span>
                </h2>

                <ul class="other-films__list">
                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/whv6KtrXIc0" data-fancybox>
                            <img class="other-films__img" src="img/other-films/shangchi.jpg" alt="постер к фильму Шан-Чи">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/9FpufEP1jeI" data-fancybox>
                            <img class="other-films__img" src="img/other-films/fee_guy.jpg" alt="постер к фильму Главый герой">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/zeKFmhPKgDs" data-fancybox>
                            <img class="other-films__img" src="img/other-films/addams_family.jpg" alt="постер к фильму Семейка Аддамс">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/Z3b1GbPg2VM" data-fancybox>
                            <img class="other-films__img" src="img/other-films/no_time_to_die.jpg" alt="постер к фильму Не время умирать">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/8qB8EGNOtr8" data-fancybox>
                            <img class="other-films__img" src="img/other-films/matrix.jpg" alt="постер к фильму Матрица 4">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/hlANal2_tsc" data-fancybox>
                            <img class="other-films__img" src="img/other-films/spiderman.jpg" alt="постер к фильму Человек паук">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/cnn8xghmxZA" data-fancybox>
                            <img class="other-films__img" src="img/other-films/infinite.jpg" alt="постер к фильму Бесконечность">
                        </a>
                    </li>

                    <li class="other-films__item">
                        <a class="other-films__link" href="https://youtu.be/_oboseJViww" data-fancybox>
                            <img class="other-films__img" src="img/other-films/eternals.jpg" alt="постер к фильму Вечные">
                        </a>
                    </li>
                </ul>

                <button class="other-films__btn">Выбрать, что посмотреть</button>
            </div>
        </section>
    </main>

    <?php include('footer.php')?>

        <nav class="navigation js-navigation">
            <ul class="navigation__list">
                <li class="navigation__item">
                    <a href="public_offer.php" class="navigation__link">Публичная оферта</a>
                </li>

                <li class="navigation__item">
                    <a href="partners.php" class="navigation__link">Партнерам</a>
                </li>

                <li class="navigation__item">
                    <a href="faq.php" class="navigation__link">FAQ</a>
                </li>

                <li class="navigation__item">
                    <a href="applications.php" class="navigation__link">Приложения</a>
                </li>

                <li class="navigation__item">
                    <a href="site_map.php" class="navigation__link">Карта сайта</a>
                </li>
            </ul>
            <button class="navigation__close js-navigation-close">
                <i class="fa fa-times navigation__close-cross" aria-hidden="true"></i>
            </button>
        </nav>
    </body>
</html>