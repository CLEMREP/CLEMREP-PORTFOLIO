<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== CSS ====================-->
    @vite(['resources/css/styles.css', 'resources/css/swiper-bundle.min.css'])

    <title>CLEMREP - Portfolio</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('index') }}" class="nav__logo">Clément REPEL</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="{{ route('index') }}#accueil" class="nav__link">
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
                        <a href="{{ route('posts.index') }}" class="nav__link active-link">
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
    <main class="main">
        <section class="container section">
            <div class="project__header">
                <div class="project__tags">
                    <p class="project__tag">Développement</p>
                </div>
                <h1 itemprop="headline" title="{{ $post->title }}">
                    {{ $post->title }}
                </h1>
                <p class="gray">
                    Écrit par
                <span>
                    <span itemprop="name">{{ $post->user->name }}</span>
                </span>
                    le <span>{{ $post->created_at->isoFormat('ll') }}</span>.
                </p>
            </div>

            <div>
                {!! \Illuminate\Support\Str::marxdown($post->content) !!}
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

