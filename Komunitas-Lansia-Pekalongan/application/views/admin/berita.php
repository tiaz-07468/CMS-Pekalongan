	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
					<li class="active">Tambah Berita</li>
				</ol>
			</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
				<form  style="padding-top:30px; padding-left:30px;" action="<?php echo base_url()."admin/iBerita"; ?>" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <input type="file" placeholder="Gambar Berita" name="gmbr">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" placeholder="Judul Berita" name="judul">
				  </div>
				  <div class="form-group">
				    <textarea class="form-control" rows="5" id="comment" placeholder="Berita" name="berita"></textarea>
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