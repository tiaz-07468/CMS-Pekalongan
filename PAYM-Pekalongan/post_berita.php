<!DOCTYPE html>
<?php include_once "admin/lib/function.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PYAM Pekalongan</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>

    <header id="HOME" style="background-position: 50% -125px;">
            <div class="section_overlay">
                <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img src="images/paym/bikinlogodepan.png" alt=""> </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Beranda</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->

                  </div><!-- /.container -->
                </nav>            
            </div>  
        </section>         
    </header>

    
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <?php
                        $id_berita = $_GET['id_berita'];
                        $data = $con->selectBerita($id_berita);

                ?>
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        
                        <h2><?php echo $data['judul']; ?></h2>
                        <img src="images/paym/shape2.png" alt="">
                        <div class="single_image">
                        <img src="images/berita/<?php echo $data['foto']; ?>">
                        <h4><?php echo $data['berita']; ?></h4>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    


    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Kontak Kami</h1>
                        <img src="images/paym/shape2.png" alt="">
                        <p>“Barang siapa yang senang dipanjangkan umurnya, diluaskan rezekinya, dan dijauhkan dari kematian yang buruk, maka hendaklah bertakwa kepada Allah dan menyambung silaturahmi.” <br> (HR Imam Bazar, Imam Hakim)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Hubungi Kami</h2>
                        <p>+62 285 424743</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email </h2>
                        <p>paymnoyontaan.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Alamat</h2>
                        <p>Jl. Dr. Wahidin No.108, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51129, Indonesia</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="send-feedback.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama" placeholder="Name">
                                <input type="email" class="form-control" name="email" placeholder="Email">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="pesan" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="submit" class="btn btn-default submit-btn form_submit" name="kirim">Kirim Pesan</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="images/paym/bikinlogo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Ikuti Kami</h2>
                        <ul class="icon_list">
                            <li><a href="#"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <center>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.944992155538!2d109.6782429502033!3d-6.8971829949917565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70243a15654d93%3A0x95090adb94394b40!2sJl.+Dr.+Wahidin+No.2B%2C+Pekalongan+Tim.%2C+Kota+Pekalongan%2C+Jawa+Tengah+51129%2C+Indonesia!5e0!3m2!1sid!2s!4v1455175529780" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </center>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2015.All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team | UDINUS 2016</a></p>
                        <p>Panti Asuhan Yatim Muhammadiyah Pekalongan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>











<!-- =========================
     SCRIPTS 
============================== -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>




</body>

</html>