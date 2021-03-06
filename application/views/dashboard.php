
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/animate.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/magnific-popup.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/owl.theme.default.min.css">
        <!-- Line Awesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/line-awesome.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/odometer.css">
        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/style.css">
        <!-- Stylesheet Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/responsive.css">
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
                    <img src="<?php echo base_url() ?>assets/home/images/logo-white.png" alt="logo">
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
                            <img src="<?php echo base_url() ?>assets/home/images/portfolio/coba1.png" alt="Image" width="900px">
                            <div class="personal-shape">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape24.png" class="shape-24" alt="Shape">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape2.png" class="shape-2" alt="Shape">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape13.png" class="shape-13" alt="Shape">
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
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape2.png" class="shape-2" alt="Image">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape14.png" class="shape-14" alt="Image">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape4.png" class="shape-4" alt="Image">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape22.png" class="shape-22" alt="Image">
                                <img src="<?php echo base_url() ?>assets/home/images/shape/shape23.png" class="shape-23" alt="Image">
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
                    <span>Technology Used</span>
                    <h2>Technologi Yang Digunakan</h2>
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
                            <span>About Us</span>
                            <h2>Tentang Kami</h2>
                        </div>
                        <div class="who-we-are-text">
                            <?php foreach ($tentangkami as $ttg) : ?>
                            <p><?php echo $ttg->isi1 ?></p>
                            <p><?php echo $ttg->isi2 ?></p>
                            <?php endforeach; ?>
                        </div>

                        <h3>Kenapa harus kami ?</h3>
                        <table>
                            <tr>
                                <td> 
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
                                </u>
                                </td>
                                
                                <td>
                                <ul>
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
                                        Design UI/UX Sesuai Keinginan
                                    </li>  
                                    <li>
                                    <i class="las la-check-double"></i>
                                        User Friendly
                                    </li>  
                                </ul>
                                </td>
                            </tr>

                        </table>
                        
                       
                        <div class="intro-btn">
                            <a href="tel:+6281278813689" class="default-btn" target="_blank">Telepon</a>
                            <a href="https://api.whatsapp.com/send?phone=081278813689" target="_blank" class="default-btn">WhatsApp</a>
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                        <div class="">
                            <img src="<?php echo base_url() ?>assets/home/images/portfolio/28784-businessmen-at-the-table.gif" class="we-are-img" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End My Intro Area -->


        <!-- Case Study Area -->
        <div id="portfolio" class="case-study-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Portofolio Review</span>
                    <h2>Portofolio</h2>
                    <p>Beberapa project aplikasi yang sudah kami buat, aplikasi Perusahaan/Perkantoran, mulai dari skala mikro maupun makro.</p>
                </div>
            

                <div class="row">
                    <?php foreach ($portofolio as $port) : ?>
                        <div class="col-lg-4 col-sm-6">
                        <div class="case-study-card">
                            <img src="<?php echo base_url().'/assets/admin/img/portofolio/'. $port->gambar ?> " alt="Image" width="375px" height="250px">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <div class="study-text">
                                            <h3><?php echo $port->judul ?></h3>
                                            <p><?php echo $port->isi ?></p>
                                            <a href="<?php echo $port->link ?>" target="blank">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Case Study Area -->

        <!-- Testimonials Silder Two Area -->
        <div id="testimonials" class="clients-slider-two-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Clients Review</span>
                    <h2>Testimonials</h2>
                </div>
                <div class="clients-slider-two owl-carousel owl-theme">
                        
                <?php foreach ($testimoni as $testi) : ?>
                    <div class="slider-two-item">
                        <img src="<?php echo base_url() ?>assets/home/images/seo-img/client11.png">
                        <h3><?php echo $testi->nama ?></h3>
                        <span><?php echo $testi->dari ?></span>
                        <div class="rating">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                        <p><?php echo $testi->pesan ?></p>
                        <i class="las la-quote-left clients-icon"></i>
                    </div>
                <?php endforeach; ?>
                </div><br>
                <div class="tab pricing-tab mt-3">
                    <ul class="tabs" data-toggle="modal" data-target="#tambah_testimoni">
                        <li>Kirim Testimoni</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Testimonials Silder Two Area -->


        <!-- Contact Area -->
        <div id="contact" class="contact-area pt-70 pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Contact</span>
                    <h2>Hubungi Kami</h2>
                </div>
                    <div class="row">
                        <?php foreach ($kontak as $ktk) : ?>       
                        
                        <div class="col-lg-4 col-sm-6">
                                <center><img class="card-img-top" src="<?php echo base_url() ?>assets/home/images/portfolio/lokasi.gif" style="width:100px; "></center>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Alamat :</h5>
                                    <p class="card-text text-center"><?php echo $ktk->alamat ?></p>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ">
                                <center><img class="card-img-top" src="<?php echo base_url() ?>assets/home/images/portfolio/telp.gif" style="width:80px; "></center>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Layanan fast respon :</h5>
                                    <p class="card-text text-center"><?php echo $ktk->telepon    ?></p>
                                </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                                <center><img class="card-img-top" src="<?php echo base_url() ?>assets/home/images/portfolio/email.gif" style="width:100px; "></center>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Email :</h5>
                                    <p class="card-text text-center"><?php echo $ktk->email ?></p>
                                </div>
                        </div>
                        <?php endforeach; ?>
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
        <script src="<?php echo base_url() ?>assets/home/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/home/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/home/js/bootstrap.min.js"></script>
        <!-- Owl carousel JS -->
        <script src="<?php echo base_url() ?>assets/home/js/owl.carousel.min.js"></script>
        <!-- Magnific JS -->
        <script src="<?php echo base_url() ?>assets/home/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="<?php echo base_url() ?>assets/home/js/wow.min.js"></script>
        <!-- Odometer JS -->
        <script src="<?php echo base_url() ?>assets/home/js/odometer.min.js"></script>
        <!-- Jquery Apper JS -->
        <script src="<?php echo base_url() ?>assets/home/js/jquery.appear.js"></script>
        <!-- Form Validator JS -->
		<script src="<?php echo base_url() ?>assets/home/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="<?php echo base_url() ?>assets/home/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="<?php echo base_url() ?>assets/home/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url() ?>assets/home/js/custom.js"></script>
    </body>
</html>
 <!-- Modal -->
 <div class="modal fade" id="tambah_testimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Testimoni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_testimoni/tambah_aksi1' ?>" method="post" enctype="multipart/form-data">

        <div class="form-grup">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Email</label>
            <input type="email" name="email" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Asal</label>
            <input type="text" name="dari" class="form-control">        		
        </div><br>
        <div class="form-grup">
            <label>Pesan</label>
            <input type="text" name="pesan" class="form-control">        		
        </div><br>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>