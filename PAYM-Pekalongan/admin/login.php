<?php
  if(!isset($_GET['err'])){
    $_GET['err']=null;
  }
?>





<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        PAYM
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body><!-- Copy the snippet beween the body tags and use it in your website, if required -->

<form action="proses_login.php" method="post">
  <?php if($_GET['err']!=null) { ?> 
          <div class = "form-group">
            <?php
                if($_GET['err']=='nologin'){
                  echo '<h1>Maaf, Anda Belum Login<h1>';
                }else if($_GET['err']=='incorrect'){
                    echo '<h1 align="center" style="font-family:Narkisim; color:white">Pengguna atau Pasword salah<h1>';
                }
              ?>
          </div>
          <?php } ?>

  <div id="block">
    <label id="user" for="name">p</label>
    <input type="text" id="name" placeholder="Pengguna" name="user" required/>
    <label id="pass" for="password">k</label>
    <input type="password" id="password" placeholder="password" name="password" required />
    <input type="submit" id="submit" name="submit" value="submit"/>
  </div>
</form>
<div id="option"> 
  <p>Login</p> 
</div>
</body>
</html>





 
