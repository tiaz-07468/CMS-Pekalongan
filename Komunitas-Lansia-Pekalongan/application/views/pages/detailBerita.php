<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $res[0]['judul']; ?></h4>
</div>
<div class="modal-body">
	<?php foreach ($res as $data) {?>
        <?php if($data['lokasi'] != "-"){?>
            <img src="<?php echo base_url()."assets/img/berita/".$data['lokasi']; ?>" class="img-responsive">
        <?php } ?>
    		<div style="color: black; text-align: left;"><?php echo strip_tags($data['berita']); ?></div>
	<?php } ?>
</div>
<div class="modal-footer">
<div style="text-align: left;">
    <h8><i class="fa fa-user"></i>&emsp; Oleh : <?php echo $res[0]['penulis']; ?> &emsp;
    |&emsp; <i class="fa fa-calendar"></i>&emsp; Pada : <?php echo $res[0]['tanggal']; ?></h8>
</div>	
</div>
