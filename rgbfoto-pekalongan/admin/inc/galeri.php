<div class="text-center">
        <form action="lib/proses_galeri.php" method="POST" enctype="multipart/form-data">
            <h2>Masukan Gambar Baru</h2>
        </div> 
        <div>
            <label for="penulis" class="col-md-2">
                Caption :
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="caption" name="caption" placeholder="">
            </div>
             <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>
        
        <div>
            <label for="uploadimage" class="col-md-2">
                Upload Gambar :
            </label>
            <div class="col-md-10">
                <input type="file" name="foto" id="uploadimage">
                <p class="help-block">
                    Format yang diperbolehkan : jpg, jpeg, png, gif
                </p>
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
        </form>
    </div>

    <?php include_once "lib/function.php"; ?>
    <div>
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
    <center>
    <h1> Daftar Gambar </h1> 
    </center>
    <table class="table table-striped"> 
    <tr>
    <th> Foto </th>
    <th> Caption </th>
    <th> Tanggal </th>
    <th> Aksi </th>
    </tr>
    <?php
            $res = $con->tampilGaleri();
            foreach ($res as $data) {
    ?> 
    <tr>
    <td> <img src="../img/galeri/<?php echo $data['foto']; ?>" height="100" width="100"></td>
    <td> <?php echo $data['tanggal']; ?> </td>
    <td> <?php echo $data['caption']; ?> </td>
    <td><a href="lib/proses_hpsgmb.php?kunci=<?php echo $data['id_gal']; ?>">[hapus]</a>
    </td>
   
    </div>
    <?php } ?>

    </div>
