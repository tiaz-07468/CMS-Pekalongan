<!DOCTYPE html>
<?php include_once "admin/lib/function.php"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Hijab Community</title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/patros.css" >
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>

	<body data-spy="scroll">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="images/hijab.jpg" alt="company logo" /></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
					<li class="active"><a href="index.php">Kembali ke Home</a></li>
					<!-- 	<li><a href="#about">Tentang Kami</a></li>
						<li><a href="#services">Kegiatan</a></li>
						<li><a href="#bloghome">Berita</a></li>
						<li><a href="#meet-team">Tim Kami</a></li>
						<li><a href="#portfolio1">Galeri</a></li>
						<li><a href="#contact">Kontak</a></li> -->
					 	
					</ul>
				</div>
			</div>
		</nav>

    <!-- Page Content -->
	    <div class="container blog singlepost">
			<div class="row">
				<?php 
					$id_berita = $_GET['id_berita'];
					$data = $con->selectBerita($id_berita);
					//foreach ($res as $key => $data) { 
				?>
				<article class="col-md-8">
			        <h1 class="page-header sidebar-title"><?php echo $data['judul']; ?></h1>
			        <img src="images/berita/<?php echo $data['foto']; ?>" class="img-responsive"/>
			        <hr>
					<div class="row">
						<div class="col-md-12">
							<div class="entry-meta">
								 <span><i class="fa fa-calendar-o"></i><?php echo $data['tanggal']; ?></span>
								 <span><i class="fa fa-user"></i> Posted by <?php echo $data['penulis']; ?></span> 
							</div>
					</div>
					</div>
					<?php echo $data['isi_berita']; ?>

					<div class="mysharing">
					<!-- Twitter -->
					<a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
					 <!-- Facebook -->
					<a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
					<!-- LinkedIn --> 
					<a href="http://www.linkedin.com/shareArticle?mini=true" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
					</div>
					<?php //} ?>
					<!-- Blog Comments -->
			        <!-- <div class="comments1">
						<div class="well">
							<h4>Leave a Comment:</h4>
							<form>
								<div class="form-group">
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
						<hr>
						<div class="media">
							<a class="pull-left" href="#">
							 	<img class="media-object" src="images/avatar1.png" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Author Name
									<small>August 25, 2014 at 9:30 PM</small>
								</h4>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
						<div class="media">
							<a class="pull-left" href="#">
							    <img class="media-object" src="images/avatar1.png" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Author Name
									<small>August 25, 2014 at 9:30 PM</small>
								</h4>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="images/avatar1.png" alt="">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Author Name
											<small>August 25, 2014 at 9:30 PM</small>
										</h4>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</div>
								</div>
							</div>
						</div>
			        </div>
			    </article>
 -->				<!-- Blog Sidebar Column -->
				<!-- <aside class="col-md-4 sidebar-padding">
					<div class="blog-sidebar">
						<div class="input-group searchbar">
							<input type="text" class="form-control searchbar" placeholder="Search for...">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">Search</button>
							</span>
						</div><!-- /input-group -->
					</div>
					</div>
					<!-- Blog Categories -->
					
		<section id="contact">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>Hubungi Kami</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form class="inline" method="POST" action="admin/lib/proses_feedback.php" >
								<div class="row">
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="text" name="nama" class="form-control custom-labels" id="nama" placeholder="NAMA LENGKAP" required data-validation-required-message="Isi dengan nama Anda"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Isi dengan email Anda"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="pesan" class="form-control custom-labels" id="pesan" placeholder="PESAN DAN KESAN" required data-validation-required-message="Isi dengan pesan Anda"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Kirim"/>
										</div>
									</div>
									<!-- <div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">Reset
											</button>
										</div>
									</div>
									 --><div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<div id="response_holder"></div>
										</div>
									</div>
									<div class="col-sm-12 contact-msg">
									<div id="success"></div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">
							<div class="row">
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-map-marker"></i>
										<span class="text">LOCATION</span>
									</div>
								</div>
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-phone"></i>
										<span class="text">0051 768622115</span>
									 </div>
								 </div>
								<div class="col-md-12 height-contact-element">    
									<div class="form-group">
										<i class="fa fa-2x fa-envelope"></i>
										<span class="text">hijabcommunitypekalongan@gmail.com </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="follow-us">
			<div class="container"> 
				<div class="text-center height-contact-element">
					<h2>Ikuti Berita Kami</h2>
				</div>
				<img class="img-responsive displayed" src="images/short.png" alt="short" />
				<div class="text-center height-contact-element">
					<ul class="list-unstyled list-inline list-social-icons">
						<li class="active"><a href="https://facebook.com/hijabcommunitypekalongan"><i class="fa fa-facebook social-icons"></i></a></li>
						<li><a href="https://twitter.com/HCPekalongan"><i class="fa fa-twitter social-icons"></i></a></li>
						<li><a href="https://plus.google.com/106114546799854957986/"><i class="fa fa-google-plus social-icons"></i></a></li>
						<li><a href="https://instagram.com/hijcompekalongan"><i class="fa fa-instagram social-icons"></i></a></li>
					</ul>
				</div>
			</div>
		</section>


		<footer id="footer">
			<div class="container">
				<div class="row myfooter">
					<div class="col-sm-6"><div class="pull-left">
					© Copyright Company 2015 | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
					</div></div>
					<div class="col-sm-6">
						<div class="pull-right">Designed by <a href="http://www.atis.al">ATIS</a></div>
					</div>
				</div>
			</div>
		</footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!--Jquery Smooth Scrolling-->
        <script>
            $(document).ready(function(){
                $('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });
            });
        </script>

        <script>
            $(".nav a").on("click", function(){
                     $(".nav").find(".active").removeClass("active");
                    $(this).parent().addClass("active");
            });
        </script>

        <script>
        //jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('a.page-scroll').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
                    $(window).scroll(function () {
                        if ($(this).scrollTop() != 0) {
                            $('#toTop').fadeIn();
                        } else {
                            $('#toTop').fadeOut();
                        }
                    }); 
                $('#toTop').click(function(){
                    $("html, body").animate({ scrollTop: 0 }, 700);
                    return false;
                });
            });
        </script>

    </body>
</html>

<!-- 
<?php
	include_once "admin/lib/function.php";
	$id_berita = $_GET['id_berita'];

	$res = $con->selectBerita($id_berita);
	foreach ($res as $key => $data) {
	echo $data['judul']."<br>";
	echo $data['isi_berita']."<br>";
	echo $data['judul']."<br>";
	echo $data['tanggal']."<br>";
	}


?> -->