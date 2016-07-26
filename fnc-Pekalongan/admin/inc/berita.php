<form action="lib/proses_berita.php" method="POST" enctype="multipart/form-data">
<div>
        <div class="row text-center">

            <h2>Masukan Berita Baru</h2>
        </div>
        <div>
            <label for="Judul" class="col-md-2">
                Judul Berita :
            </label>
            <div class="col-md-9">
                <input type="text" name="jdl_berita" class="form-control" id="firstname" placeholder="Masukkan judul berita">
            </div>
            <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>        
        <div>
            <label for="penulis" class="col-md-2">
                Nama Penulis :
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="penulis" id="lastname" placeholder="Masukkan nama penulis">
            </div>
             <div class="col-md-1">
                <i class="fa fa-lock fa-2x"></i>
            </div>
        </div>
        <div>
             <label class="col-md-2">Isi Berita </label>
                            
            <div class="col-md-9">
               
                <textarea name="isi_berita" class="form-control" rows="3"></textarea>
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
    </div>
</form>