<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Kode Koding">
    <link href="{{ asset('assets/images/favicon/icon.ico') }}" rel="icon">
    <title>@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <header id="header7" class="header header-transparent">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                        <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="{{ url('/') }}" data-toggle="link" class="nav__item-link">Home</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ url('/about') }}" data-toggle="link" class="nav__item-link">About</a>
                            </li><!-- /.nav-item -->
                            {{-- <li class="nav__item">
                                <a href="{{ url('/project') }}" class="nav__item-link">Projects</a>
                            </li><!-- /.nav-item --> --}}
                            <li class="nav__item">
                                <a href="{{ url('/blog') }}" data-toggle="link" class="nav__item-link">Blog</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ url('/product') }}" data-toggle="link" class="nav__item-link">Product</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ url('/teams') }}" data-toggle="link" class="nav__item-link">Teams</a>
                            </li><!-- /.nav-item -->
                            <!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                    {{-- <div class="navbar-modules">
                        <div class="modules__wrapper d-flex align-items-center">
                            <a href="#" class="module__btn module__btn-search pr-3"><i class="york-search"></i></a>
                        </div><!-- /.modules-wrapper -->
                    </div><!-- /.navbar-modules --> --}}
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header7 -->

        @yield('container')

        <!-- ========================
      Footer
    ========================== -->
        <footer id="footer1" class="footer footer-1 bg-heading">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 footer__widget footer__widget-about">
                            <div class="footer__widget-content">
                                <img src="assets/images/logo/logo-light.png" alt="logo" class="footer__logo">
                                <p>Our brand promise is simple: to provide powerful digital marketing solutions to small
                                    businesses.</p>
                                <ul class="contact__list list-unstyled">
                                    <li><i class="icon-phone"></i>+62 82331550064</li>
                                    <li><i class="icon-document"></i>chintaalya6@gmail.com</li>
                                    <li><i class="icon-map-pin"></i>Jember, East Java</li>
                                </ul>
                            </div>
                        </div><!-- /.col-lg-3 -->
                        <div class="col-sm-12 col-md-4 col-lg-4 footer__widget footer__widget-posts">
                            <h6 class="footer__widget-title">Recent Posts</h6>
                            <div class="footer__widget-content">
                                <div class="post-item">
                                    <div class="post__date">Oct 15, 2017</div>
                                    <h5 class="post__title">
                                        <a href="#">Four ways to cheer up on Blue Monday!</a>
                                    </h5>
                                </div><!-- /.post-item -->
                                <div class="post-item">
                                    <div class="post__date">Oct 18, 2017</div>
                                    <h5 class="post__title">
                                        <a href="#">Old cameras can capture images better than nowdays camera!</a>
                                    </h5>
                                </div><!-- /.post-item -->
                                <div class="post-item">
                                    <div class="post__date">Oct 24, 2017</div>
                                    <h5 class="post__title">
                                        <a href="#">New subway line has most advanced technology world!</a>
                                    </h5>
                                </div><!-- /.post-item -->
                            </div>
                        </div><!-- /.col-lg-3 -->
                        <div class="col-sm-12 col-md-4 col-lg-4 footer__widget footer__widget-newsletter">
                            <h6 class="footer__widget-title">Stay Updated</h6>
                            <div class="footer__widget-content">
                                <form class="widget__newsletter-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="form__submit"><i
                                                class="fa fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                                <p>Don’t miss to follow us & subscribe to our new feeds, or you can follow us!</p>
                                <div class="social__icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div><!-- /.social-icons -->
                            </div>
                        </div><!-- /.col-lg-3 -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <div class="footer__copyright">
                                <span>&copy; 2021 Webpage by</span> <a
                                    href="{{ url('/') }}">Kode Koding</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.Footer-bottom -->
        </footer><!-- /.Footer -->
        <button id="scrollTopBtn"><i class="arrow_up"></i></button>

        {{-- <div class="module__search-container">
            <i class="fa fa-times close-search"></i>
            <form class="module__search-form">
                <input type="text" class="search__input" placeholder="Search Here">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.module-search-container --> --}}

    </div>
    <!-- /.wrapper -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
