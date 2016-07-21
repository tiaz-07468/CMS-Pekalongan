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
        <a href="index.php?p=edit&&kunci=<?php echo $data['id_news']; ?>">[edit]</a>
    </td>
   
    </div>
    <?php } ?>

    </div>
</form>