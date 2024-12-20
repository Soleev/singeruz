<!DOCTYPE html>
<html lang="ru">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZSDMS1KNF2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-ZSDMS1KNF2');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Singeruz</title>
    <meta name="description" content="@yield('description')">
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
    <link href="../assets/plugins/sal/sal.min.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="../assets/plugins/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
    <link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
    <link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>

<body data-preloader="3">

<!-- Animated Cursor -->
<div id="animated-cursor"></div>
<!-- end Animated Cursor -->

<div class="wrapper">

    <!-- Scroll to Top -->
    <div class="scrolltotop">
        <a class="button-circle button-circle-md button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- end Scroll to Top -->

    <!-- Header -->
    <div class="header sticky">
        <div class="container-fluid">
            <div class="logo">
                <a href="/">
                    <img class="logo-dark" src="../assets/images/logo.jpg" alt="лого singeruz">
                </a>
            </div>
            <div class="header-menu-wrapper">
                <!-- Menu -->
                <ul class="header-menu">

                    <li class="m-item">
                        <a class="m-link" href="/">Главная</a>
                    </li>

                    <li class="m-item">
                        <a class="m-link" href="#">Продукция</a>
                        <ul class="m-dropdown">
                            @foreach ($categoriesByParent as $parent => $categories)
                                <li class="m-dropdown-item">
                                    <a class="m-dropdown-link" href="#">{{ $parent }}</a>
                                        <ul class="m-subdropdown">
                                            @foreach($categories as $category)
                                                <li class="m-subdropdown-item">
                                                    <a class="m-subdropdown-link" href="{{ url('/catalog/' . $category->slug) }}">
                                                        {{ $category->title }}
                                                    </a>

                                                </li>
                                            @endforeach
                                        </ul>
                                </li>
                            @endforeach
                            <li class="m-dropdown-item">
                                <a class="m-dropdown-link" href="../catalog">Все категории</a>
                            </li>
                        </ul>
                    </li>
                    <li class="m-item">
                        <a class="m-link" href="../contacts">Контакты</a>
                    </li>
                </ul>
                <!-- Extra -->
                <div class="header-menu-extra">
                    <ul class="list-inline">
                        <li><a href="https://t.me/SINGERuz_shop" target="_blank"><i class="fab fa-telegram"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/singeruz_shop" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
                <!-- Close Button -->
                <button class="close-button">
                    <span></span>
                </button>
            </div><!-- end header-menu-wrapper -->
            <!-- Menu Toggle on Mobile -->
            <button class="m-toggle">
                <span></span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->
    <!-- Основной контент -->
    @yield('content')
    <!-- Подвал сайта -->
    <!-- Footer -->
    <div class="section-xs bg-dark">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-lg-3">
                    <h6 class="fw-normal mb-lg-3">О нас</h6>
                    <ul class="list-dash">
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="../contacts.php">Контакты</a></li>
                        <li><a href="#">Команда</a></li>
                        <li><a href="#">Услуги</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3">
                    <h6 class="fw-normal mb-lg-3">Политика</h6>
                    <ul class="list-dash">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Аферта</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-3 d-none">
                    <h6 class="fw-normal mb-lg-3">Additional links</h6>
                    <ul class="list-dash">
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Prices</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>

                <div class="col-6 ofset-col-lg-3 text-lg-end">
                    <p> Узбекистан г.Ташкент<br>
                        ул. Ш.Руставели , 132 <br>
                    <p>
                        <a href="tel:+998952022202">
                            <i class="bi bi-telephone"></i> (+998 95) 20 222 02</a>
                    </p>


                    <ul class="list-inline-sm mt-2 mt-lg-3">
                        <li><a class="button-circle button-circle-sm button-circle-white" href="#"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-white" href="#"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-white"
                               href="https://t.me/SINGERuz_shop"><i class="fab fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div><!-- end row -->
            <div class="border-top mt-4 py-3 pb-0">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="uppercase letter-spacing-2 m-0">Singeruz</h4>
                    </div>
                    <div class="col-6 text-end">
                        <p><a href="https://soleyev.uz/"> © 2023-2025 Soleyev.uz</a></p>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Footer -->

</div><!-- end wrapper -->

<!-- ***** JAVASCRIPTS ***** -->
<script src="../assets/plugins/jquery.min.js"></script>

<script src=""></script>
<script src="../assets/plugins/plugins.js"></script>
<script src="../assets/js/functions.min.js"></script>
</body>

</html>
