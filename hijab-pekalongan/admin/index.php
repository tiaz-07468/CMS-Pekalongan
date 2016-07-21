<?php

    if($_COOKIE['username']!= null){
        if(!isset($_GET['p']))
        {
            $_GET['p'] = null;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Hijab</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript"> tinymce.init({selector:'textarea'});</script>   

      <style>

        div {
            padding-bottom:20px;
        }

    </style>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right navbar-user">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"><i class="fa fa-bullseye"></i> Beranda </a></li>
                    <li><a href="index.php?p=galeri"><i class="fa fa-tasks"></i> Olah Gambar </a></li>
                    <li><a href="index.php?p=berita"><i class="fa fa-font"></i> Tambah Berita</a></li>
                    <li><a href="index.php?p=data"><i class="fa fa-font"></i> Data Berita</a></li>
                </ul>                
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li> -->
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
            </div>
        </nav>

       <div>
        <div class="row">
            <?php
                switch($_GET['p'])
                {
                    case 'home' :include_once "inc/home.php";break;
                    case 'berita' :include_once "inc/berita.php";break;
                    case 'galeri' :include_once "inc/galeri.php";break;
                    case 'data' :include_once "inc/data.php";break;
                    case 'edit' :include_once "inc/form_edit.php";break;
                    default : include_once "inc/home.php"; break;
                }
            ?>
        </div>
       </div>

</body>
</html>
<?php
    }
    else
    {
        header('location:login.php?err=nologin');
    }
?>
