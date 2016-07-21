<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
</div>
<form  style="" action="<?php echo base_url()."admin/updateSanggar/".$res[0]['id']; ?>" method="POST" enctype="multipart/form-data">
<div class="modal-body">
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Nama Sanggar" name="nama" value="<?php echo $res[0]['nama']; ?>">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Lokasi Sanggar" name="lokasi" value="<?php echo $res[0]['lokasi']; ?>">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Koordinator" name="koor" value="<?php echo $res[0]['koordinator']; ?>">
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
