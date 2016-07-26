    <div>
    <?php include_once "lib/function.php"; ?>
        <form>
        <div class="row text-center">
            <h2>Masukan Berita Baru</h2>
        </div>
         <div class="col-md-3">
    </div>
    <div class="col-md-6">
    <table class="table table-striped"> 
    <th> Judul </th>
    <th> Isi Berita </th>
    <th> Penulis </th>  
    <th> Aksi </th>
    <?php
            $res = $con->tampilBerita();
            foreach ($res as $data) {
    ?>   
    
    <tr>
    <td> <?php echo $data['judul']; ?> </td>
    <td> <?php echo $data['berita']; ?> </td>
    <td> <?php echo $data['penulis']; ?> </td>
    <td><a href="lib/proses_hapus.php?kunci=<?php echo $data['id_berita']; ?>">[hapus]</a>
        <a href="index.php?p=edit_berita&&kunci=<?php echo $data['id_berita']; ?>">[edit]</a>
    </td>
    </tr>
    </div>
    <?php } ?>
        
    </div> 
    </form>
    </div> 