    <section id="services">
        <div class="container">
            <h2>Berita Terkini</h2>
            <hr class="light-sep">
            <p>Komunitas Lansia Pekalongan</p>
            <!-- tag mulai modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div>
            <!-- selesai modal -->

            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                <!-- start berita -->
                <?php foreach ($res as $data) {?>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-lightbulb"></span></div>
                        <div class="media-body">
                            <h3><?php echo $data['judul']; ?></h3>
                            <p><?php echo substr(strip_tags($data['berita']), 0,300)."..."; ?>
                            <a href ="#" data-id="<?php echo $data['id']; ?>" class="page-scroll" id="detail">Detail</a></p>
                        </div>
                    </div>  
                    <?php } ?>                  
                    <!-- end berita -->
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function(){
            $(document).on('click','#detail',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url()."pages/detailBerita";?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-content").html(html);
                    }   
                );
            });
        });
    </script>
