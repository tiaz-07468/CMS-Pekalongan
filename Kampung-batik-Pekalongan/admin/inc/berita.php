    <div>
        <form action="lib/proses_berita.php" method="POST" enctype="multipart/form-data">
        <div class="row text-center">
            <h2>Masukan Berita Baru</h2>
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
                Upload Gambar :
            </label>
            <div class="col-md-10">
                <input type="file" name="foto" id="uploadgbr">
                <p class="help-block">
                    Format yang diperbolehkan : jpg, jpeg, png, gif
                </p>
            </div>          
        </div>

        <div class="form-group col-md-10">
            <label>Text area</label>
            <textarea class="form-control" rows="3" name="berita"></textarea>
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
    </div> 