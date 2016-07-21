<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	    </div>
	</div>
</div>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel">Detail Galeri</h4>
</div>
<div class="modal-body">
	<?php foreach ($res as $data) {?>
		<img src="<?php echo base_url()."assets/img/event/".$data['lokasi']; ?>" class="img-responsive">
		<h4><i class="fa fa-camera"></i>&emsp;Kegiatan : <?php echo $data['judul']; ?></h4>
		<h4><i class="fa fa-image"></i>&emsp;Caption : <?php echo $data['caption']; ?></h4>
		<h4><i class="fa fa-user"></i>&emsp; Oleh : <?php echo $data['penyunting']; ?></h4>
		<h4><i class="fa fa-calendar"></i>&emsp; Pada : <?php echo $data['tanggal']; ?></h4>
	<?php } ?>
</div>
<div class="modal-footer">	
	<a href="#" id="edit" data-id="<?php echo $res[0]['id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
	<a href="<?php echo base_url()."admin/deleteGaleri/".$res[0]['id']."/".$res[0]['lokasi']; ?>" id="hapus" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
</div>

	<script>
        $(function(){
            $(document).on('click','#edit',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url()."admin/editGaleri";?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-content").html(html);

                    }   
                );
            });
        });
    </script>
