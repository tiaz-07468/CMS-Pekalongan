<?php
    include_once "lib/function.php";
    $data = $con->selectBerita($_GET['kunci']);
?>
<form action="lib/proses_edit.php" method="POST">
<div>
        <div class="row text-center">
            <h2>Edit Berita</h2>
        </div>
        <div>
            <label for="Judul" class="col-md-2">
                Judul Berita :
            </label>
            <div class="col-md-9">
                <input type="text" name="judul" class="form-control" value="<?php echo $data['jdl_news']; ?>" id="firstname" placeholder="Masukkan judul berita">
                <input type="hidden" name="id_berita" class="form-control" value="<?php echo $data['id_news']; ?>" id="firstname" placeholder="Masukkan judul berita">
            </div>
            <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>        
        <div>
            <label class="col-md-2">Isi Berita </label>             
            <div class="col-md-9">
                <textarea name="isi_berita" class="form-control" rows="3"><?php echo $data['isi_berita']; ?></textarea>
            </div>
             <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <button type="submit" class="btn btn-info">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>

<?php include_once "lib/function.php"; ?>
<form>
<div>
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
    <center>
    <h1> Daftar Berita </h1> 
    </center>
    <table class="table table-striped"> 
    <tr>
    <th> Judul </th>
    <th> Isi Berita </th>
    <th> Penulis </th>  
    <th> Aksi </th>
    </tr>
    <?php
            $res = $con->tampilBerita();
            foreach ($res as $data) {
    ?> 
    <tr>
    <td> <?php echo $data['jdl_news']; ?> </td>
    <td> <?php echo $data['isi_berita']; ?> </td>
    <td> <?php echo $data['penulis']; ?> </td>
    <td><a href="lib/proses_hapus.php?kunci=<?php echo $data['id_news']; ?>">[hapus]</a>
        <!-- <a href="">[edit]</a> -->
    </td>
   
    </div>
    <?php } ?>

    </div>
</form>