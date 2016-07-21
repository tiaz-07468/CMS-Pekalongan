<?php
  if(!isset($_GET['err']))
  {
    $_GET['err']=null;
  }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/styles.css">

    
    
    
  </head>

  <body>

    <form action="proses_login.php" method="post">
      <?php if($_GET['err']!=null) { ?>
      <div class="form-group">
      <?php
         if($_GET['err']=='nologin')
         {
            echo '<h1>Maaf, Anda Belum Login<h1>';
         }
         else if($_GET['err']=='incorrect')
         {
            echo '<h1>Maaf, Penguna atau Password Salah<h1>';
         }
         ?>
      </div>

    <?php } ?>
  
  <fieldset>
    <center>
  	<legend class="legend">Login</legend>
  </center>
    
    <div class="input">
    	<input placeholder="pengguna" name="user" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
    	<input placeholder="password" name="password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <button type="submit" class="submit" value="login"><i class="fa fa-long-arrow-right"></i></button>
    
  </fieldset>
  
  <div class="feedback">
  	login successful <br />
    redirecting...
  </div>
  
</form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  </body>
</html>
