 <section id="portfolio">
        <div class="container-fluid">
            <h2>Galeri</h2>
            <hr class="sep">
            <p>Galeri kegitan rutin serta even komunitas Lansia pekalongan</p>
            <div class="row">
            <?php foreach ($res as $data) {?>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="<?php echo base_url();?>assets/img/event/<?php echo $data['lokasi']; ?>" data-lightbox="image-1" data-title="<?php echo $data['caption']; ?>">
                        <img src="<?php echo base_url();?>assets/img/event/<?php echo $data['lokasi']; ?>" class="img-responsive" alt="1">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $data['judul']; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>