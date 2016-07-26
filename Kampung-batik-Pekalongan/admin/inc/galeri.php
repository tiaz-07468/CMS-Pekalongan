    <div>
        <form action="lib/proses_galeri.php" method="POST" enctype="multipart/form-data">
        <div class="row text-center">
            <h2>Masukan Foto Baru</h2>
        </div>
        <div>
            <label for="firstname" class="col-md-2">
                Judul:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="firstname" placeholder="Masukkan judul" name="judul">
            </div>
            <div class="col-md-1">

            </div>
        </div>        
        <div>
            <label for="lastname" class="col-md-2">
                Penyunting:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="lastname" placeholder="Penyunting" name="penyunting">
            </div>
             <div class="col-md-1">

            </div>
        </div>
        
        <div>
            <label for="uploadimage" class="col-md-2">
                Upload Gambar:
            </label>
            <div class="col-md-10">
                <input type="file" name="gmbr" id="uploadimage">
                <p class="help-block">
                    format yang dibolehkan: jpeg, jpg, gif, png
                </p>
            </div>          
        </div>
         <div class="form-group col-md-10">
            <label>Caption</label>
            <input type="text" class="form-control" name="caption">
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
    
    <br><br></form>
            <?php include_once "lib/function.php"; ?>
            <div class="col-md-12">
            <div class="col-md-12">
                    <center>
                    <h4>Daftar Galeri</h4>
                <table class="table table-striped"> 
                    <th> Judul </th>
                    <th> Foto </th>
                    <th> Caption </th>  
                    <th> Aksi </th>
                    <?php
                        $res = $con->tampilGaleri();
                        foreach ($res as $data) {
                    ?>   
            
                    <tr>
                        <td> <?php echo $data['judul']; ?> </td>
                        <td> <img src="../images/galeri/<?php echo $data['lokasi']; ?>"> </td>
                        <td> <?php echo $data['caption']; ?> </td>
                        <td><a href="lib/proses_hapus_galeri.php?kunci=<?php echo $data['id_galeri']; ?>">[hapus]</a>
                        
                    </tr>
                    </center>
                 
            </div>
            <?php } ?>
            </div>
    

  