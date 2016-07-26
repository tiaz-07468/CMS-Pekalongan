<?php
    if($_COOKIE['username']!=null){
        ?><!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
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
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> Upload Foto</a></li>
                    <li><a href="produk.php"><i class="fa fa-tasks"></i> Upload Produk</a></li>
                    <li><a href="jadwal.php"><i class="fa fa-tasks"></i> Upload Jadwal Dokter</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Beranda <small>Kritik dan Saran</small></h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Selamat Datang Admin Rumah Sakit Karomah Holistic Pekalongan
                    </div>
                </div>
            </div>

            <?php include_once "libs/function.php"; ?>
            <div>
                <div class='col-md-1'></div>
                <div class='col-md-6'>
                    <center><h3>Kritik dan Saran</h3></center>
                    <table class='table table-striped'>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kritik & Pesan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $res = $con->tampilKritik();
                        foreach ($res as $data) {
                            ?>
                            <tr>
                                <td> <?php echo $data['nama']; ?> </td>
                                <td> <?php echo $data['email']; ?> </td>
                                <td> <?php echo $data['pesan']; ?> </td>
                                <td><a href="libs/proses_hapus.php?kunci=<?php echo $data['id_keritik']; ?>">[Hapus]</td>
                            </tr>
                        
                </div>
                <?php } ?>
            </div>
            
            
            

                    
                        
    <!-- /#wrapper -->

    
</body>
</html>

<?php
    }else{
        header("location:login.php?err=nologin");
    }
?>
