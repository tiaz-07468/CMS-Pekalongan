<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
</div>
<form  style="" action="<?php echo base_url()."admin/updateEvent/".$res[0]['id']; ?>" method="POST" enctype="multipart/form-data">
<div class="modal-body">
	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Judul Event" name="judul" value="<?php echo $res[0]['title']; ?>">
	  </div>
	  <div class="form-group">
	    <input type="date" class="form-control" placeholder="Tanggal Event" name="date" value="<?php echo $res[0]['date']; ?>">
	  </div>
	  <div class="form-group">
	  	<select name="badge" class="form-control">
	  		<option value="">---Pilih Status---</option>
	  		<option value="1">Spesial Event</option>
	  		<option value="0">Regular Event</option>
	  	</select>
	  </div>
	  <div class="form-group">
	    <textarea class="form-control" rows="5" id="comment" placeholder="Keterangan Event" name="body" value=""><?php echo $res[0]['body']; ?></textarea>
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
