<div class="text-center">
            <h2>Masukan Gambar Baru</h2>
        </div> 
        <div>
            <label for="penulis" class="col-md-2">
                Gambar diambil oleh :
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="lastname" placeholder="Masukkan nama penulis">
            </div>
             <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>
        <div>
             <label class="col-md-2"> Deskripsi Gambar </label>
                            
            <div class="col-md-9">
               
                <textarea class="form-control" rows="3"></textarea>
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
                <input type="file" name="uploadgbr" id="uploadgbr">
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

    <?php include_once "lib/function.php"; ?>
    <div class="col-md-1">
    <div class="col-md-6">
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
                <td> <?php echo $data['lokasi']; ?> </td>
                <td> <?php echo $data['caption']; ?> </td>
                <td><a href="lib/proses_hapus.php?kunci=<?php echo $data['id_berita']; ?>">[hapus]</a>
                <a href=\"edit.php?kunci=$row[id_berita]\">[edit]</a></td>
            </tr>
    </div>
    <?php } ?>
    </div>