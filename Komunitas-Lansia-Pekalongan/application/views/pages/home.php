    <!-- Preloader
	============================================= -->
     <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
     <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/logo/logose.png" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll" onclick="muatUlang()">Beranda</a></li>
                            <li><a href="#services" class="page-scroll" onclick="muatUlang()">Berita</a></li>
                            <li><a href="#portfolio" class="page-scroll" onclick="muatUlang()">Galeri</a></li>
                            <li><a href="#team" class="page-scroll" onclick="muatUlang()">Tentang Kami</a></li>
                            <li><a href="#contact" class="page-scroll" onclick="muatUlang()">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(<?php echo base_url()."assets/img/slide/1.jpg"?>)">
                <div class="caption">
<!--                     <h1>Komunitas Lansia Pekalongan</h1>
                    <h6>Peduli sesama, berbagi kebahagiaan</h6> -->
                </div>
            </div>
            <div class="item" style="background-image: url(<?php echo base_url()."assets/img/slide/2.jpg"?>)">
                <div class="caption">
<!--                     <h1>Komunitas Lansia Pekalongan</h1>
                    <h6>Peduli sesama, berbagi kebahagiaan</h6> -->
                </div>
            </div>
            <div class="item" style="background-image: url(<?php echo base_url()."assets/img/slide/3.jpg"?>)">
                <div class="caption">
<!--                     <h1>Komunitas Lansia Pekalongan</h1>
                    <h6>Peduli sesama, berbagi kebahagiaan</h6> -->
                </div>
            </div>
            <div class="item" style="background-image: url(<?php echo base_url()."assets/img/slide/4.jpg"?>)">
                <div class="caption">
<!--                     <h1>Komunitas Lansia Pekalongan</h1>
                    <h6>Peduli sesama, berbagi kebahagiaan</h6> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Header -->

    <!-- Berita 
    ====================================================================== -->
<!--     <section id="services">
        <div class="container">
            <h2>Berita Terkini</h2>
            <hr class="light-sep">
            <p>Komunitas Lansia Pekalongan</p>
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-lightbulb"></span></div>
                        <div class="media-body">
                            <h3>Rekor Peserta Senam Terbanyak Terpecahkan</h3>
                            <p>PEKALONGAN – Senam keluarga gembira yang diselenggarakan Dinas Pendidikan, Pemuda dan Olahraga (Disdikpora) Kota Pekalongan yang diikuti 18.000 lebih pasang ibu dan anak di Stadion Kraton, Minggu (28/4), memecahkan rekor Museum Rekor Indonesia (Muri)......
                            <a href ="#detSatu" class="page-scroll" onclick="satuDetail()">Detail</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-mobile"></span></div>
                        <div class="media-body">
                            <h3>Rekor Peserta Senam Terbanyak Terpecahkan</h3>
                            <p>PEKALONGAN – Senam keluarga gembira yang diselenggarakan Dinas Pendidikan, Pemuda dan Olahraga (Disdikpora) Kota Pekalongan yang diikuti 18.000 lebih pasang ibu dan anak di Stadion Kraton, Minggu (28/4), memecahkan rekor Museum Rekor Indonesia (Muri)......
                            <a href ="#detSatu" class="page-scroll" onclick="satuDetail()">Detail</a></p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-compass"></span></div>
                        <div class="media-body">
                            <h3>Rekor Peserta Senam Terbanyak Terpecahkan</h3>
                            <p>PEKALONGAN – Senam keluarga gembira yang diselenggarakan Dinas Pendidikan, Pemuda dan Olahraga (Disdikpora) Kota Pekalongan yang diikuti 18.000 lebih pasang ibu dan anak di Stadion Kraton, Minggu (28/4), memecahkan rekor Museum Rekor Indonesia (Muri)......
                            <a href ="#detSatu" class="page-scroll" onclick="satuDetail()">Detail</a></p>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
    <?php echo $berita; ?>
    <!--Akkhir Berita 
    ====================================================================== -->

    <!--Galeri 
    ====================================================================== -->
   <!--  <section id="portfolio">
        <div class="container-fluid">
            <h2>Galeri</h2>
            <hr class="sep">
            <p>Galeri kegitan rutin serta even komunitas Lansia pekalongan</p>
            <div class="row">
            <?php foreach ($res as $data) {?>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="<?php echo base_url();?>assets/img/event/<?php echo $data['lokasi']; ?>" data-lightbox="image-1" data-title="<?php echo $data['caption']; ?>">
                        <img src="<?php echo base_url();?>assets/img/event/<?php echo $data['lokasi']; ?>" class="img-responsive" alt="1">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $data['judul']; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section> -->
    <?php echo $gallery; ?>
    <!--Akkhir Galeri
    ====================================================================== -->

    <!--Tentang Komunitas 
    ====================================================================== -->
    <?php echo $tentang; ?>
    <!--Akhir Tentang Komunitas 
    ====================================================================== -->

	<!-- Contact Us
	============================================= -->
    <section id="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <hr class="sep">
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <a href="facebook.com"><i class="fa fa-facebook"></i> Facebook</a> &nbsp;
                <a href="twitter.com"><i class="fa fa-twitter"></i> Twitter</a> &nbsp;
                <a href="instagram.com"><i class="fa fa-instagram"></i> Instagram</a> &nbsp;<br />

            </div>
            <br />
            <p>Alamat : Rumah Bapak Sodiri <br />
            Telpon : 0813-2592-2995</p>
        </div>
    </section>
    <!-- Google Map
	============================================= -->
        <section id="tempat" class="map">
            <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.740688053513!2d109.66176339777687!3d-6.897727018847494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x8870d30dc7e04ba0!2sLapangan+Mataran+Kota+Pekalongan!5e0!3m2!1sid!2sid!4v1455248938246"></iframe>
            <br />
        </section>
    <!--Akhir Akhir Tentang Komunitas 
    ====================================================================== -->


