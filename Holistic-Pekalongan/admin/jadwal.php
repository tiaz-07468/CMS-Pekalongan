<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        img {
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
            -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            margin-bottom: 20px;
        }
        img:hover {
            filter: none; /* IE6-9 */
            -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
        }
    </style>

<script src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({ selector:'textarea' });
</script>
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
                <a class="navbar-brand" href="index.php">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> Upload Foto</a></li>
                    <li><a href="produk.php"><i class="fa fa-tasks"></i> Upload Produk</a></li>
                    <li class="selected"><a href="jadwal.php"><i class="fa fa-tasks"></i> Upload Jadwal Dokter</a></li>
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

        <div class="container">                    
                <div class="row">
                    <div class="col-lg-8">
                        <form action="proses_jadwal.php" method="POST">
                          <div class="form-group">
                            <center><h3>Tambah Jadwal Dokter</h3></center>
                          </div>
                          <div class="form-group">
                            <label>Nama Dokter</label>
                            <input type="text" class="form-control" placeholder="Nama Dokter" name="nama">
                          </div>

                          <div class="form-group">
                            <label>Jadwal Dokter</label>
                            <input type="text" class="form-control" placeholder="Jadwal Dokter" name="jadwal">
                          </div>
                          <div class="form-group">
                            <button class="btn btn-warning">Simpan</button>
                          </div>
                        </form>
                    </div>
                </div><!--/.row-->
                <div class="row">
                </div><!--/.row-->
        </div>

        <?php include_once "libs/function.php"; ?>
            <div>
                <div class='col-md-1'></div>
                <div class='col-md-6'>
                    <center><h3>Daftar Jadwal Dokter</h3></center>
                    <table class='table table-striped'>
                        <tr>
                            <th>Nama Dokter</th>
                            <th>Jam Praktik</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $res = $con->getJadwal();
                        foreach ($res as $data) {
                            ?>
                            <tr>
                                <td> <?php echo $data['nama_dokter']; ?> </td>
                                <td> <?php echo $data['jadwal']; ?> </td>
                                <td><a href="libs/proses_hapus_jadwal.php?kunci=<?php echo $data['id']; ?>">[Hapus]
                                <a href="form_edit_jadwal.php?kunci=<?php echo $data['id']; ?>">[Edit]</td>
                            </tr>
                </div>
                <?php } ?>
            </div>

        <!-- <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>Silahkan Upload Foto</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="gallery/1.jpg" />
                            <span>
                                Caption
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="gallery/2.jpg" />
                            <span>
                                Caption
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="gallery/3.jpg" />
                            <span>
                                Caption
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="gallery/4.jpg" />
                            <span>
                                Caption
                            </span>
                        </div>
                    </div>
                    
                            
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</body>
</html>
