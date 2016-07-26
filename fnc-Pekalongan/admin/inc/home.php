<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12">
                    <h1>Halaman Admin</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        <p>Selamat datang di halaman admin. Di sini anda dapat menambah berita dan foto,
                        serta dapat melihat kritik dan saran yang diberikan oleh pengunjung halaman website.</p>
                    </div>
                </div>
            </div>
        </div>
<?php include_once "lib/function.php"; ?>
<form>
<div>
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
    <center>
        <h1> Kritik dan Saran</h1>
        <small> *anda bisa membalas pesan dari para pengunjung melalui email yang disertakan </small>
    <table class="table table-striped"> 
    <tr>
    <th> Nama </th>
    <th> Email </th>
    <th> Isi Pesan </th>
    </tr>
    <?php
            $res = $con->tampilPesan();
            foreach ($res as $data) {
    ?>  

    <tr>
    <td> <?php echo $data['nama']; ?> </td>
    <td> <?php echo $data['email']; ?> </td>
    <td> <?php echo $data['pesan']; ?> </td>
   
    </div>
    <?php } ?>

    </div>
</form>
</div>