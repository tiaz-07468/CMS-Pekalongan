<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	    </div>
	</div>
</div>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $res[0]['judul']; ?></h4>
</div>
<div class="modal-body">
	<?php foreach ($res as $data) {?>
        <?php if($data['lokasi'] != "-"){?>
            <img src="<?php echo base_url()."assets/img/berita/".$data['lokasi']; ?>" class="img-responsive">
        <?php } ?>
    		<?php echo $data['berita']; ?>
	<?php } ?>
</div>
<div class="modal-footer">
<div style="text-align: left;">
    <h6><i class="fa fa-user"></i>&emsp; Oleh : <?php echo $res[0]['penulis']; ?> &emsp;
    |&emsp; <i class="fa fa-calendar"></i>&emsp; Pada : <?php echo $res[0]['tanggal']; ?></h6>
</div>	
	<a href="<?php echo base_url()."admin/editBerita/".$res[0]['id']; ?>" id="edit" class="btn btn-success"><i class="fa fa-pencil"></i></a>
	<a href="<?php echo base_url()."admin/deleteBerita/".$res[0]['id']."/".$res[0]['lokasi']; ?>" id="hapus" onclick="javascript: return confirm('Anda yakin ingin menghapus berita ini ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
</div>
