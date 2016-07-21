<?php
  if(!isset($_GET['err']))
  {
    $_GET['err']=null;
  }
?>


<!DOCTYPE html>
<!-- <html >
  <head>
    <meta charset="UTF-8">
    <title>Login RGB Pekalongan</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
  <div class="container">
    <h1>Selamat Datang</h1>
    
    <form action="proses_login.php" method="post" class="form">
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


      <input type="text" placeholder="pengguna" name="user">
      <input type="password" placeholder="password" name="password">
      <button type="submit" id="login-button">Login</button>
    </form>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html> -->




<html>
  <head>
    <title>Login</title>
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

      <div class="form-group">
        <label for="exampleInputEmail1">Pengguna</label>
        <input type="text" class="form-control"  placeholder="pengguna" name="user">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" placeholder="password" name="password">
      </div>
      <input type="submit" class="btn btn-default" value="login">
    </form>

   </body> 
</html>