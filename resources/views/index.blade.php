<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.1/css/line.css">

        <!--==================== CSS ====================-->
        @vite(['resources/css/styles.css', 'resources/css/swiper-bundle.min.css'])

        <title>CLEMREP - Portfolio</title>
    </head>
    <body class="dark-theme">
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="" class="nav__logo">Clément REPEL</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="{{ route('index') }}#accueil" class="nav__link active-link">
                                <i class="uil uil-airplay nav__icon"></i> Accueil
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('index') }}#a-propos" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> À propos
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('index') }}#competences" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Compétences
                            </a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Diplômes
                            </a>
                        </li> -->
                        <li class="nav__item">
                            <a href="{{ route('posts.index') }}" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('index') }}#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact
                            </a>
                        </li>
                        <li class="nav__item">
                            @if (Auth::check())
                            <a href="{{ url('/admin') }}" class="nav__link">
                                <i class="uil uil-signin nav__icon"></i> Hello, {{ Auth::user()->name }}
                            </a>
                            @else
                                <a href="{{ url('/admin') }}" class="nav__link">
                                    <i class="uil uil-signin nav__icon"></i> Connexion
                                </a>
                            @endif
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>

        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="accueil">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/cl%C3%A9ment-repel-7ba652208/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://github.com/CLEMREP/" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                            <a href="mailto:contact@clement-repel.fr" target="_blank" class="home__social-icon">
                                <i class="uil uil-envelope-alt"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x='-22' y='25' xlink:href="{{ url('/storage/img/face.png') }}"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'am Clément</h1>
                            <h3 class="home__subtitle">Étudiant en Informatique</h3>
                            <p class="home__description">Actuellement, en BTS Services Informatiques aux Organisations, Option SLAM (Solutions Logicielles et Application Métier), au lycée Carcouët à Nantes.</p>
                            <a href="#a-propos" class="button button--flex">
                                En savoir plus <i class="uil uil-notes button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#a-propos" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name"> Scoll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="a-propos">
                <h2 class="section__title">À Propos</h2>
                <span class="section__subtitle">Présentation</span>

                <div class="about__container container grid">
                    <img src="{{ url('/storage/img/about-me.jpg') }}" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">
                            Actuellement, en BTS Services Informatiques aux Organisations, Option SLAM (Solutions Logicielles et Application Métier), au lycée Carcouët à Nantes.
                            <br>Mon projet est de compléter ma formation avec une Licence ou une École d'ingénieur.
                            <br>Également développeur back-end en alternance chez Web^ID.
                        </p>


                        <div class="about__info">
                            <div>
                                <span class="about__info-title">03+</span>
                                <span class="about__info-name">Années <br>d'expérience</span>
                            </div>

                            <div>
                                <span class="about__info-title">9+</span>
                                <span class="about__info-name">Projets <br>Réalisés</span>
                            </div>

                            <div>
                                <span class="about__info-title">150+</span>
                                <span class="about__info-name">Boissons <br>dégustées</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="{{ url('/storage/pdf/Clément_REPEL_CV.pdf') }}" class="button button--flex">
                                Télécharger CV<i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="competences">
                <h2 class="section__title">Compétences</h2>
                <span class="section__subtitle">Mes compétences techniques</span>

                <div class="skills__container container grid">
                    <div>
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skilss__title">Développement Front-End</h1>
                                    <span class="skills__subtitle">Côté Client</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">30%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-database skills__icon"></i>

                                <div>
                                    <h1 class="skilss__title">Développement Back-End</h1>
                                    <span class="skills__subtitle">Côté Serveur</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Laravel</h3>
                                        <span class="skills__number">85%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__laravel"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">SQL</h3>
                                        <span class="skills__number">75%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__sql"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>

                                <div>
                                    <h1 class="skilss__title">UI/UX Design</h1>
                                    <span class="skills__subtitle">Outils graphique</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Photoshop</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__photoshop"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Figma</h3>
                                        <span class="skills__number">85%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__figma"></span>
                                    </div>
                                </div>

                                <div class="skills__date">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Illustrator</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__illustrator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">Mes qualifications</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                             Éducation
                        </div>

                        <div class="qualification__button button--flex" data-target="#travail">
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                             Travail
                        </div>
                    </div>

                    <div class="qualification__sections">
                        <div class="qualification__content qualification__active" data-content id="education">

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">PSC1</h3>
                                    <span class="qualification__subtitle">Pompiers Villers-Bocage</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2018
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <h3 class="qualification__title">BAC Général</h3>
                                    <span class="qualification__subtitle">Caen - Institut-Lemonnier</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2018 - 2021
                                    </div>
                                </div>

                            </div>

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">BTS Services Informatiques aux Organisations</h3>
                                    <span class="qualification__subtitle">Nantes - Lycée Carcouët</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2021 - Aujourd'hui
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <!-- <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                </div>

                                <div>
                                    <h3 class="qualification__title">Master in UI/UX</h3>
                                    <span class="qualification__subtitle">Peru - University</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - 2021
                                    </div>
                                </div>

                            </div> -->

                        </div>

                        <div class="qualification__content" data-content id="travail">

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Stage en Informatique</h3>
                                    <span class="qualification__subtitle">San Francisco - Decathlon</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2018
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <h3 class="qualification__title">Emploi saisonnier</h3>
                                    <span class="qualification__subtitle">Villers-Bocage - Degrenne Distribution</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2021
                                    </div>
                                </div>

                            </div>

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Stage développement web</h3>
                                    <span class="qualification__subtitle">Caen - Web^ID</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2022
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <h3 class="qualification__title">Alternant Développeur</h3>
                                    <span class="qualification__subtitle">Caen - Web^ID</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2022 - Aujourd'hui
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SERVICES ====================-->
            <!-- <section class="services section" id="services">
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">Mes services</span>

                <div class="services__container container grid">

                    <div class="services__content">
                        <div>
                            <i class="uil uil-web-grid services__icon"></i>
                            <h3 class="services__title">UI/UX <br> Designer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            Voir Plus
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">UI/UX <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les interfaces utilisateurs</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les pages internet</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Créer les éléments UX</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Intégrer votre charte graphique</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="services__content">
                        <div>
                            <i class="uil uil-arrow services__icon"></i>
                            <h3 class="services__title">Fontend <br> Développeur</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            Voir Plus
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Fontend <br> Développeur</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les interfaces utilisateurs</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les pages internet</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Créer les éléments UX</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Intégrer votre charte graphique</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="services__content">
                        <div>
                            <i class="uil uil-pen services__icon"></i>
                            <h3 class="services__title">Branding <br> Designer</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            Voir Plus
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Branding <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les interfaces utilisateurs</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Développer les pages internet</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Créer les éléments UX</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Intégrer votre charte graphique</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!--==================== PORTFOLIO ====================-->
{{--            <section class="portfolio section" id="portfolio">--}}
{{--                <h2 class="section__title">Portfolio</h2>--}}
{{--                <span class="section__subtitle">Mes dernières réalisations</span>--}}

{{--                <div class="portfolio__container container swiper swiper-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="portfolio__content grid swiper-slide">--}}
{{--                            <img src="{{ url('/storage/img/portfolio1.jpg') }}" alt="" class="portfolio__img">--}}

{{--                            <div class="portfolio__data">--}}
{{--                                <h3 class="portfolio__title">Modern Website</h3>--}}
{{--                                <p class="portfolio__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, corrupti sint ea sequi impedit, exercitationem aperiam aspernatur aliquam repellendus delectus dicta incidunt ipsum placeat labore, reiciendis molestias temporibus magnam magni?</p>--}}
{{--                                <a href="#" class="button button--flex button-small portfolio__button">--}}
{{--                                    Demo--}}
{{--                                    <i class="uil uil-arrow-right button__icon"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="portfolio__content grid swiper-slide">--}}
{{--                            <img src="{{ url('/storage/img/portfolio2.jpg') }}" alt="" class="portfolio__img">--}}

{{--                            <div class="portfolio__data">--}}
{{--                                <h3 class="portfolio__title">Brand Design</h3>--}}
{{--                                <p class="portfolio__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, corrupti sint ea sequi impedit, exercitationem aperiam aspernatur aliquam repellendus delectus dicta incidunt ipsum placeat labore, reiciendis molestias temporibus magnam magni?</p>--}}
{{--                                <a href="#" class="button button--flex button-small portfolio__button">--}}
{{--                                    Demo--}}
{{--                                    <i class="uil uil-arrow-right button__icon"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="portfolio__content grid swiper-slide">--}}
{{--                            <img src="{{ url('/storage/img/portfolio3.jpg') }}" alt="" class="portfolio__img">--}}

{{--                            <div class="portfolio__data">--}}
{{--                                <h3 class="portfolio__title">Oneline Store</h3>--}}
{{--                                <p class="portfolio__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, corrupti sint ea sequi impedit, exercitationem aperiam aspernatur aliquam repellendus delectus dicta incidunt ipsum placeat labore, reiciendis molestias temporibus magnam magni?</p>--}}
{{--                                <a href="#" class="button button--flex button-small portfolio__button">--}}
{{--                                    Demo--}}
{{--                                    <i class="uil uil-arrow-right button__icon"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="swiper-button-next">--}}
{{--                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-button-prev">--}}
{{--                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>--}}
{{--                    </div>--}}

{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--            </section>--}}

            <!--==================== PROJECT IN MIND ====================-->
            <!-- <section class="project section">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">Vous avez un projet ?</h2>
                            <p class="project__description">Suscipit modi, quis necessitatibus optio id eos dolorem cum veritatis vero nisi deleniti.</p>
                            <a href="#contact" class="button button--flex button--white">
                                Contact moi
                                <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>
                        <img src="assets/img/project.png" alt="" class="project__img">
                    </div>
                </div>
            </section> -->

            <!--==================== TESTIMONIAL ====================-->
            <!-- <section class="testimonial section">
                <h2 class="section__title">Avis</h2>
                <span class="section__subtitle">Les avis de mes clients</span>

                <div class="testimonial__container container swiper swiper-container">
                    <div class="swiper-wrapper">
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Sara Smith</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id fugit, neque velit natus distinctio molestias unde nemo non cupiditate sed ad tempora eos temporibus quos ipsam magnam aliquam. Veritatis?
                            </p>
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Sara Smith</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id fugit, neque velit natus distinctio molestias unde nemo non cupiditate sed ad tempora eos temporibus quos ipsam magnam aliquam. Veritatis?
                            </p>
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Sara Smith</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                    <i class="uil uil-favorite testimonial__icon"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id fugit, neque velit natus distinctio molestias unde nemo non cupiditate sed ad tempora eos temporibus quos ipsam magnam aliquam. Veritatis?
                            </p>
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section> -->

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact</h2>
                <span class="section__subtitle">Prenez contact facilement.</span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Téléphone</h3>
                                <span class="contact__subtitle">07 61 38 20 28</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-envelope-minus contact__icon"></i>

                            <div>
                                <h3 class="contact__title">E-Mail</h3>
                                <span class="contact__subtitle">contact@clement-repel.fr</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-map-marker-alt contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Localisation</h3>
                                <span class="contact__subtitle">Nantes - France</span>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">Nom</label>
                                <input type="text" class="contact__input">
                            </div>

                            <div class="contact__content">
                                <label for="" class="contact__label">Email</label>
                                <input type="email" class="contact__input">
                            </div>
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Objet</label>
                            <input type="text" class="contact__input">
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>

                        <div>
                            <a href="#" class="button button--flex">
                                Envoyer
                                <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container">
                    <p class="footer__copy">&#169; CLEMREP. Tous droits réservés.</p>
                </div>
            </div>
        </footer>

        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== MAIN JS ====================-->
        @vite(['resources/js/main.js', 'resources/js/swiper.min.js'])
    </body>
</html>
