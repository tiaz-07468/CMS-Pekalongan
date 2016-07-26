<?php
    if($_COOKIE['username']!=null){
        if(!isset($_GET['p'])){
            $_GET['p']=null;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin PAYM</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">tinymce.init({selector:'textarea'});</script>    

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
                <a class="navbar-brand" href="index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li ><a href="index.php"><i class="fa fa-bullseye"></i> Beranda</a></li>
                    <li ><a href="index.php?p=galeri"><i class="fa fa-tasks"></i> Galeri</a></li>
                    <!-- <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li> -->
                    <li ><a href="index.php?p=berita"><i class="fa fa-font"></i>Berita</a></li>
                    <li ><a href="index.php?p=datatampil"><i class="fa fa-font"></i>Tampil Berita</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    switch($_GET['p']){
                        case 'home' : include_once "inc/home.php"; break;
                        case 'berita' : include_once "inc/berita.php"; break;
                        case 'galeri' : include_once "inc/galeri.php"; break;
                        case 'datatampil' : include_once "inc/datatampil.php"; break;
                        case 'edit_berita' : include_once "inc/dataedit.php"; break;
                        default : include_once "inc/home.php";break;
                    }

                    ?>
                </div>
            </div>
        </div>
    <!-- /#wrapper -->
</body>
</html>

<?php
    }else{
        header('location:login.php?err=nologin');
    }
?>
