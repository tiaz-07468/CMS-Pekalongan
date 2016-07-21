	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
					<li class="active">Tampil Berita</li>
				</ol>
			</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
					<div style="padding-bottom: 15px; padding-top: 20px;">
				  		<a href="<?php echo base_url()."admin/inputBerita"; ?>" class="btn btn-info">Tambah Berita</a>
			  		</div>
			  		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			            <div class="modal-dialog">
			                <div class="modal-content">
			                </div>
			            </div>
			        </div>
				  	<div class="table table-responsive">
				  		<table class="table table-striped">
				  			<tr>
				  				<th>No</th>
				  				<th>Judul</th>
				  				<th>Berita</th>
				  				<th>Tanggal</th>
				  				<th>Action</th>
				  			</tr>
	  			            <?php
	  			            	$i=1;
	  			            	foreach ($res as $data) {
	  			            ?>
	  			            <tr>
	  			            	<td><?php echo $i; ?></td>
	  			            	<td><?php echo $data['judul']; ?></td>
	  			            	<td><?php echo substr(strip_tags($data['berita']), 0,300)."..."; ?></td>
	  			            	<td><?php echo $data['tanggal']; ?></td>
	  			            	<td><a href="#" id="detail" data-id="<?php echo $data['id']; ?>" class="btn btn-info">Detail</a></td>
	  			            </tr>
			                <?php  
			                	$i++;
			                	} 
			                ?>
				  		</table>
				  	</div>
			</div>
		</div><!--/.row-->

		<div class="row">
		
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script>
        $(function(){
            $(document).on('click','#detail',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url()."admin/detailBerita";?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-content").html(html);
                    }   
                );
            });
        });
    </script>
