<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include_once "admin/lib/function.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Family Nursing Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="css/lightbox.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<div class="navbar-header">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
      					<!-- <a class="navbar-brand logo" href="#">family</a> -->
    			</div>
			</div>
			<div class="col-md-8">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="index.php" class="page-scroll">Kembali ke Beranda</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>


<div class="container-fluid features" id="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
						$id_berita = $_GET['id_berita'];
						$data = $con->selectBerita($id_berita);
						//foreach ($res as $key => $data) { 
					?>
				<h2 class="text-center features-text"><?php echo $data['jdl_berita']; ?></h2>
				
			</div>
		</div>
	</div>
</div>

<div class="container-fluid work" id="work">
	<div class="container">
		<div class="row" id="starts">
			<div class="col-md-12 col-sm-12 col-xs-12 work-list">

				<center>
					<img src="images/berita/<?php echo $data['foto']; ?>">
					<br>
					<br>
					<br>
					<span><i class="fa fa-calendar-o"></i><?php echo $data['tgl_berita']; ?></span>
					<span><i class="fa fa-user"></i> Diposting oleh : <?php echo $data['penulis']; ?></span>
					<br>
					<br>
					<br>
					<p><?php echo $data['isi_berita']; ?></p>
				</center>
			</div>
		</div>
	</div>
</div>
							



<div class="container-fluid contact" id="section4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center portfolio-text">Kontak Kami</h2>
				<div class="col-md-6 col-sm-12 col-xs-12contact-form">
					<form method="POST" action="admin/lib/proses_pesan.php">
                        <div class="form-group">
                            <input type="text" class="form-control form-effect" id="nama" placeholder="Nama Lengkap" name="nama">
                        </div>
                        <div class="form-group">                                 
                            <input type="email" class="form-control form-effect" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <textarea type="textarea" class="form-control form-effect" id="text" placeholder="Pesan dan Kesan" name="pesan"></textarea>
                        </div>  
                        <button type="submit" class="btn btn-default btn-sub">Simpan</button>
                    </form>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 address-space">
					<div id="map-canvas"></div>
					<div class="address">
						<h3>Alamat</h3>
						<p><i class="glyphicon glyphicon-map-marker"></i>Jalan Parkit no.21 Binagriya Pekalongan Perum RCS Garden B27-28 Kedungwuni Pekalongan</p>
						<p><i class="glyphicon glyphicon-earphone"></i>085713903300</p>
						<p><i class="glyphicon glyphicon-envelope"></i>nurse.utami@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid footer">
	<div class="row">
		<div class="col-md-12">
			<p>Copyright &copy; Ravalic 2015 By <a href="http://www.html5layouts.com">HTML5 Layouts</a> | <a href="http://vectortoons.com/">Get Vector Graphics</a></p>
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(-6.900783, 109.659716),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
	$(document).ready(function () {
		$(document).on("scroll", onScroll);
 
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
 
			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
 
			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});
 
	function onScroll(event){
		var scrollPosition = $(document).scrollTop();
		$('nav a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('nav ul li a').removeClass("active");
				currentLink.addClass("active");
			}
			else{
				currentLink.removeClass("active");
			}
		});
	}
	</script>
	<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('.timer').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });
 
      // start all the timers
      $('#starts').waypoint(function() {
    $('.timer').each(count);
	});
 
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
  	</script>
</body>
</html>
