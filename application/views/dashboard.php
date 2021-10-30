
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/home/css/animate.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/home/css/magnific-popup.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/home/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/home/css/owl.theme.default.min.css">
        <!-- Line Awesome CSS -->
        <link rel="stylesheet" href="assets/home/css/line-awesome.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/home/css/odometer.css">
        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="assets/home/css/style.css">
        <!-- Stylesheet Responsive CSS -->
        <link rel="stylesheet" href="assets/home/css/responsive.css">
        <!-- Favicon -->
        <link rel="icon" type="images/png" href="assets/home/images/favicon.png">
        <!-- Title -->
        <title>Bariqi Jasa Pembuatan Aplikasi Android, Web dan GIS</title>
    </head>

    <body data-spy="scroll" data-offset="70">
        <!-- Preloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-hourglass"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Nabvar Area -->
        <nav class="navbar fixed-top navbar-expand-md main-navbar personal-nav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/home/images/logo-white.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#my-intro">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimoni</a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Hubungi Kami</a>
                        </li>                              
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Nabvar Area -->

        <!-- Personal Banner Area -->
        <div id="home" class="personal-banner-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="personal-banner-img">
                            <img src="assets/home/images/portfolio/1.gif" alt="Image" width="350px">
                            <div class="personal-shape">
                                <img src="assets/home/images/shape/shape24.png" class="shape-24" alt="Shape">
                                <img src="assets/home/images/shape/shape2.png" class="shape-2" alt="Shape">
                                <img src="assets/home/images/shape/shape13.png" class="shape-13" alt="Shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="personal-bennr-text">
                            <span>Welcome to...</span>
                            <h3>Jasa Pembuatan Aplikasi Android, Website dan GIS</h3>
                            <p>Berkerja dengan Profesional sesuai dengan kebutuhan Perusahaan anda, kepuasan anda adalah TUJUAN UTAMA KAMI.</p>
                            <p>GRATIS Konsultasi dengan expert untuk menemukan formulasi yang tepat untuk kebutuhan aplikasi anda skala mikro / makro.</p>
                            <div class="personal-btn">
                                <a href="https://api.whatsapp.com/send?phone=081278813689" target="_blank" class="default-btn personal-btn-1 mr-3"> Klik disini!  GRATIS KONSULTASI</a>
                            
                            </div>

                            

                            <div class="personal-text-shape">
                                <img src="assets/home/images/shape/shape2.png" class="shape-2" alt="Image">
                                <img src="assets/home/images/shape/shape14.png" class="shape-14" alt="Image">
                                <img src="assets/home/images/shape/shape4.png" class="shape-4" alt="Image">
                                <img src="assets/home/images/shape/shape22.png" class="shape-22" alt="Image">
                                <img src="assets/home/images/shape/shape23.png" class="shape-23" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Startup Banner Area -->

        <!-- Basic Information Area -->
        <div class="information-area pt-100">
            <div class="container">
                <div class="section-title">
                    <h2>Technology Yang Digunakan</h2>
                    <p>Aplikasi Anda up to date, dan mengikuti perkembangan terbaru, karena teknologi bergerak cepat, kami bantu Anda untuk mengikutinya</p>
                </div>

                <div class="row">
                    <?php foreach ($teknologi as $tech) : ?>
                        <div class="col-lg-1 col-sm-8">
                            <div class="information-card">
                                <i class="shadow w-8 sm:w-11 md:w-14 lg:w-18.8 xl:w-24 2xl:w-28"><img src="<?php echo base_url().'/assets/home/images/tekhnologi/'. $tech->gambar ?>"></i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
        <!-- End Basic Information Area -->

        <!-- My Intro Area -->
        <div id="my-intro" class="who-we-area my-intro pt-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                        </div>
                        <div class="who-we-are-text">
                            <p>Bariqi.id adalah salah satu karya terbaik anak bangsa, yang bergerak dibidang pengembangan perangkat lunak, dibawah Perusahaan Konsultan PT. Sinergi Visi Utama, yang sudah bernama di Indonesia</p> 
                            <p>Salah satu tujuan kami menciptakan Software yang berkualitas, aman, sesuai dengan kebutuhan perusahaan, Programmer yang berpengalaman dengan menggunakan Teknologi ter up to date, dan berasal dari kampus, Putra/Putri lulusan terbaik di Indonesia maupun Luar Negeri, mampu menyelesaikan Aplikasi dengan baik dan tepat waktu.</p>
                            
                        </div>

                        <h3>Kenapa harus kami ?</h3>
                        <ul>
                            <li>
                            <i class="las la-check-double"></i>
                                Garansi Fast Respond
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                                Menemukan Solusi Terbaik
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                                Teknologi Terbaru
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                                Kontrol Progress on time
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                               Programmer Bersertifikasi
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                               Keamanan Data Terjaga
                            </li>
                            <li>
                            <i class="las la-check-double"></i>
                                Design UI/UX sesuai kebutuhan
                            </li>
                        </ul>
                        <div class="intro-btn">
                            <a href="tel:+6281278813689" class="default-btn" target="_blank">Telepon</a>
                            <a href="https://api.whatsapp.com/send?phone=081278813689" target="_blank" class="default-btn">WhatsApp</a>
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                        <div class="">
                            <img src="assets/home/images/portfolio/wifi.gif" class="we-are-img" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End My Intro Area -->


        <!-- Fun Fact Area -->
        <div class="fun-facts-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-facts">
                            <i class="las la-check-double icon-color-1"></i>
                            <h3>
                                <span class="odometer" data-count="120">00</span>
                                +
                            </h3>
                            <p>Project Selesai</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-facts">
                            <i class="las la-clock icon-color-2"></i>
                            <h3>
                                <span class="odometer" data-count="2000">00</span>
                            </h3>
                            <p>Fast Working</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-facts">
                            <i class="las la-award icon-color-3"></i>
                            <h3>
                                <span class="odometer" data-count="120">00</span>
                            </h3>
                            <p>Award Won</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-facts">
                            <i class="las la-smile-beam icon-color-4"></i>
                            <h3>
                                <span class="odometer" data-count="300">00</span>
                                +
                            </h3>
                            <p>Apresiasi Testimoni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fun Fact Area -->

        <!-- Case Study Area -->
        <div id="portfolio" class="case-study-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Beberapa project aplikasi yang sudah kami buat, aplikasi Perusahaan/Perkantoran, mulai dari skala mikro maupun makro.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study1.jpg" alt="Image">
                            
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>Web Design</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study2.jpg" alt="Image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>UI/UX Design</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study3.jpg" alt="Image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>Web Development</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study4.jpg" alt="Image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>App Development</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study5.jpg" alt="Image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>Digital Marketing</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="assets/home/images/seo-img/case-study6.jpg" alt="Image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3>App Design</h3>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the.</p>
                                            <a href="#" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Case Study Area -->

        <!-- Testimonials Slider Area -->
        <div id="testimonials" class="testimonials-area pt-100">
            <div class="container">
                <div class="section-title">
                    <span></span>
                    <h2>Testimoni</h2>
                </div>

                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-slider-item">
                        <img src="assets/home/images/seo-img/client1.jpg" alt="Image">
                        <h3>Danial Henry</h3>
                        <div class="rating">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                    </div>

                    <div class="testimonials-slider-item">
                        <img src="assets/home/images/seo-img/client2.jpg" alt="Image">
                        <h3>William leo</h3>
                        <div class="rating">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                    </div>
                    
                    <div class="testimonials-slider-item">
                        <img src="assets/home/images/seo-img/client3.jpg" alt="Image">
                        <h3>Jhon Smith</h3>
                        <div class="rating">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials Slider Area -->

        <!-- Contact Area -->
        <div id="contact" class="contact-area pt-70 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Contact Us</h2>
                    </div>

                <div class="row">


                </div>
            </div>
        </div>
        <!-- End Contact Area -->


        <!-- Footer Area -->
        <footer class="footer-area pt-50"> 
                <div class="copyright-text">
                    <p>Copyright @2021 <a href="https://bariqi.id/" target="_blank">Bariqi.id</a></p>
                </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Go Top -->
        <div class="go-top">
            <i class="las la-angle-double-up"></i>
        </div>
        <!-- End Go Top -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/home/js/jquery.min.js"></script>
        <script src="assets/home/js/popper.min.js"></script>
        <script src="assets/home/js/bootstrap.min.js"></script>
        <!-- Owl carousel JS -->
        <script src="assets/home/js/owl.carousel.min.js"></script>
        <!-- Magnific JS -->
        <script src="assets/home/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/home/js/wow.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/home/js/odometer.min.js"></script>
        <!-- Jquery Apper JS -->
        <script src="assets/home/js/jquery.appear.js"></script>
        <!-- Form Validator JS -->
		<script src="assets/home/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/home/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="assets/home/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/home/js/custom.js"></script>
    </body>
</html>