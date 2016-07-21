<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	    </div>
	</div>
</div>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 class="modal-title" id="myModalLabel"><?php echo $res[0]['title']; ?></h3>
</div>
<div class="modal-body">
	<?php foreach ($res as $data) {?>
		<h4><i class="fa fa-calendar"></i>&emsp;<?php echo $data['date']; ?></h4>
		<h4><i class="fa fa-book"></i>&emsp;<?php echo strip_tags($data['body']); ?></h4>
	<?php } ?>
</div>
<div class="modal-footer">
<div style="text-align: left;">
    <h6><i class="fa fa-user"></i>&emsp; Oleh : <?php echo $res[0]['penulis']; ?> &emsp;
</div>	
	<a href="#" id="edit" data-id="<?php echo $res[0]['id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
	<a href="<?php echo base_url()."admin/deleteEvent/".$res[0]['id']; ?>" id="hapus" onclick="javascript: return confirm('Anda yakin ingin menghapus event ini ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
</div>
	<script>
        $(function(){
            $(document).on('click','#edit',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url()."admin/eEvent";?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-content").html(html);
                    }   
                );
            });
        });
    </script>
