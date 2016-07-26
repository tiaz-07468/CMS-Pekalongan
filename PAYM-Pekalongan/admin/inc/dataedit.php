    <?php
        include_once "lib/function.php";
        $data = $con->selectBerita($_GET['kunci']);
    ?>


        <div>
        <form action="lib/proses_edit.php" method="POST" >
        <div class="row text-center">
            <h2>Edit Berita</h2>
        </div>
        <div>
            <label for="firstname" class="col-md-2">
                Judul:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="firstname" placeholder="Masukkan judul" name="judul"
                value="<?php echo $data['judul']; ?>">
                <input type="hidden" class="form-control" id="firstname" placeholder="Masukkan judul" name="id_berita"
                value="<?php echo $data['id_berita']; ?>">
            </div>
            <div class="col-md-1">

            </div>
        </div>        
          <div class="form-group col-md-10">
                    <label>Text area</label>
                    <textarea class="form-control" rows="3" name="berita">"<?php echo $data['berita'];?>"</textarea>
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

    <?php include_once "lib/function.php"; ?>
        <form>
        <div class="row text-center">
            <h2>Edit Berita</h2>
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
            <td> <?php echo $data['penyunting']; ?> </td>
            <td><a href="lib/proses_hapus.php?kunci=<?php echo $data['id_berita']; ?>">[hapus]</a>
                <!-- <a href=\"edit.php?kunci=$row[id_berita]\">[edit]</a> -->
            </td>
            </tr>
        </div>
            <?php } ?>
            </form>
   <!--  </div> --> 

        <br><br>
        <div>