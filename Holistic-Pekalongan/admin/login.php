<?php
	if(!isset($_GET['err'])){
		$_GET['err']=null;
	}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login-page">
  		<div class="form">
    		<form class="register-form">
		      <input type="text" placeholder="name"/>
		      <input type="password" placeholder="password"/>
		      <input type="text" placeholder="email address"/>
		      <button>create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    	</form>
		    		<form action="proses-login.php" method="post">
		    			<?php if($_GET['err']!=null){ ?>
							<div class="form-group">
								<?php if ($_GET['err']=='nologin'){
									echo '<h1>Maaf, Anda Belum Login</h1>';
								}else if ($_GET['err']=='incorrect'){
									echo '<h1>Maaf, Pengguna atau Password Salah</h1>';
								}
								?>
							</div>
						<?php }?>
		      <input type="text" placeholder="Pengguna" name="user"/>
		      <input type="password" placeholder="password" name="password"/>
		      <button>login</button>
		      <p class="message">Not registered? <a href="#">Create an account</a></p>
		    </form>
  		</div>
	</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
  </body>
</html>