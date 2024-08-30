<!-- /*
* Template Name: Financing
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="home/css/tiny-slider.css">
    <link rel="stylesheet" href="home/css/aos.css">
    <link rel="stylesheet" href="home/css/glightbox.min.css">
    <link rel="stylesheet" href="home/css/style.css">

    <link rel="stylesheet" href="home/css/flatpickr.min.css">


    <title>Inisalisasi 2024</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 justify-content-between align-items-center">
                        <div class="col-lg-3 col-8">
                            <a href="/" class="logo m-0 float-start">INISIALISASI 2024<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-lg-9 col-4 text-end ">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li><a href="/index">Home</a></li>
                                <li><a href="#tatatertib">Tata Tertib</a></li>
                                <li class="active"><a href="/berita-&-Pengumuman">Berita & Pengumuman</a></li>
                                @auth
                                    <li><a href="/penugasan/index">Penugasan</a></li>
                                @endauth
                                @auth
                                    @if (Auth::user()->isAdmin === 1)
                                        <li><a href="/dashboard">Dashboard Admin</a></li>
                                    @endif
                                @endauth
                                @if (!Auth::check())
                                    <li><a href="/login">Login</a></li>
                                @else
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <input type="submit" class="" value="Logout" class="btn btn-sm">
                                        </form>
                                    </li>
                                @endif
                            </ul>
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero overlay inner-page">
        <img src="images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Berita & Pengumuman</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-news">
        <div class="container">

            <div class="row">

                @foreach ($news as $item)
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="card post-entry">
                            <a href="{{ route('berita.show', ['news_title' => $item->news_title, 'id' => $item->id]) }}"></a>
                            <div class="card-body">
                                <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                                <h5 class="card-title"><a href="{{ route('berita.show', ['news_title' => $item->news_title, 'id' => $item->id]) }}">{{ $item->news_title }}</a></h5>
                                <p class="mt-5 mb-0"><a href="{{ route('berita.show', ['news_title' => $item->news_title, 'id' => $item->id]) }}">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>About</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div> <!-- /.widget -->
                        <div class="widget">
                            <address>43 Raymouth Rd. Baltemoer, <br> London 3910</address>
                            <ul class="list-unstyled links">
                                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                                <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                            </ul>
                        </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul class="list-unstyled float-start links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Vision</a></li>
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                            <ul class="list-unstyled float-start links">
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Creative</a></li>
                            </ul>
                        </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled links mb-4">
                                <li><a href="#">Our Vision</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>

                            <h3>Social</h3>
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                <li><a href="#"><span class="icon-dribbble"></span></a></li>
                            </ul>
                        </div> <!-- /.widget -->
                    </div> <!-- /.col-lg-4 -->
                </div> <!-- /.row -->

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a
                                href="https://untree.co">Untree.co</a> Distributed By <a
                                href="https://themewagon.com">ThemeWagon</a><!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <script src="home/js/bootstrap.bundle.min.js"></script>
        <script src="home/js/tiny-slider.js"></script>

        <script src="home/js/flatpickr.min.js"></script>


        <script src="home/js/aos.js"></script>
        <script src="home/js/glightbox.min.js"></script>
        <script src="home/js/navbar.js"></script>
        <script src="home/js/counter.js"></script>
        <script src="home/js/custom.js"></script>
</body>

</html>
