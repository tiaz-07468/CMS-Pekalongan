	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-pencil"></i></a></li>
					<li class="active">Edit Berita</li>
				</ol>
			</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
				<form style="padding-top:30px; padding-left:30px;" action="<?php echo base_url()."admin/updateBerita/".$res[0]['id']; ?>" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				  <?php if($res[0]['lokasi']!="-") {?>
				  	<img src="<?php echo base_url()."assets/img/berita/".$res[0]['lokasi']; ?>" class="img-responsive" /> 
			  	  <?php }else { ?>
	  		  	    <img src="<?php echo base_url()."assets/img/berita/no.jpg"; ?>" style="width: 50%; height: 50%;" /> 
	  		  	   <?php } ?>
				  	<br/>
				    <input type="file" placeholder="Gambar Berita" name="gmbr">
				    <input type="hidden" placeholder="Foto Galeri" name="gmbr_lama" value="<?php echo $res[0]['lokasi']; ?>">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" placeholder="Judul Berita" name="judul" value="<?php echo $res[0]['judul']; ?>">
				  </div>
				  <div class="form-group">
				    <textarea class="form-control" rows="5" id="comment" placeholder="Berita" name="berita"><?php echo $res[0]['berita']; ?></textarea>
				  </div>
				  <div class="form-group">
				    <input type="text" hidden="hidden" value="<?php echo $this->session->userdata('nama') ?>" name="penulis">
				  </div>
				  <div class="form-group">
				  	<button class="btn btn-warning">Simpan</button>
				  </div>
				</form>
			</div>
		</div><!--/.row-->

		<div class="row">
		
		</div><!--/.row-->
	</div>	<!--/.main-->