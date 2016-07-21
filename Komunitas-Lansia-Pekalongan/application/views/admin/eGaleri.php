
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Edit Galeri</h4>
</div>
<form action="<?php echo base_url()."admin/updateGaleri/".$res[0]['id']; ?>" method="POST" enctype="multipart/form-data">
<div class="modal-body">
	  <div class="form-group">
	  	<img src="<?php echo base_url()."assets/img/event/".$res[0]['lokasi']; ?>" class="img-responsive" /> <br/>
	    <input type="file" placeholder="Foto Galeri" name="gmbr">
	    <input type="hidden" placeholder="Foto Galeri" name="gmbr_lama" value="<?php echo $res[0]['lokasi']; ?>">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" value="<?php echo $res[0]['judul'];?>">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Caption" name="caption" value="<?php echo $res[0]['caption'];?>">
	  </div>
	  <div class="form-group">
	    <input type="text" hidden="hidden" value="<?php echo $this->session->userdata('nama') ?>" name="penulis">
	  </div>
</div>
<div class="modal-footer">
	  <div class="form-group">
	  	<button class="btn btn-warning">Simpan</button>
	  </div>
</div>
</form>
