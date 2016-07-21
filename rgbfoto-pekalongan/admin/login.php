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
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
      </ul>
      
      <div class="tab-content">
        
        </div>
        
        <div id="login">   
          <h1>Selamat Datang!</h1>
          
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
          
            <div class="field-wrap">
            <input placeholder="pengguna" name="user"/>
          </div>
          
          <div class="field-wrap">
            <input placeholder="password" name="password"/>
          </div>          
          <button class="button button-block" type="submit" value="login"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
