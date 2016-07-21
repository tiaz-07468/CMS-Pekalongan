<?php
	if(!isset($_GET['err'])){
		$_GET['err']=null;
	}
?>
<html>
	<head>
		<title>Login | Komunitas Jompo Pekalongan</title>
	    <link href="<?php echo base_url(); ?>assets/bootstrap-assets/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/css/cssku.css" rel="stylesheet">
	</head>
	<body>
		<br /><br /><br />
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 center">
					<center><img src="<?php echo base_url(); ?>assets/img/logo/logos.png" id="lingkaran"></center>
					<form action="<?php echo base_url()."admin/validasi"; ?>" method="post">
					<?php if($_GET['err']!=null) { ?>
					  <div class="form-group">
					  		<?php
					  			// if($this->session->userdata("is_loggin")){
					  			// 	echo '<h1>Selamat Datang</h1>';
					  			// }else{
					  			// 	echo '<h1>Maaf, Anda Belum Login</h1>';
					  			// }
					  		 ?>
					  		 <?php echo validation_errors(); ?> 
					  </div>
					  <?php }?>
					  <div class="box-shadows">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Pengguna</label>
						    <input type="text" class="form-control" placeholder="Pengguna" name="username">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" placeholder="password" name="password">
						  </div>
						  <center>
							  <input type="submit" class="btn btn-info" value="Login">
							  <input type="reset" class="btn btn-danger" value="Cancel">
 						 </center>
					</div>
					</form>	
				</div>
			</div>
		</div>
	</body>
</html>