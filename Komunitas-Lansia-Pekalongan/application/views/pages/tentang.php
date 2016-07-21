       <section id="team">
        <div class="container">
            <h2>Tentang Kami</h2>
            <hr class="sep">
            <p>Komunitas Lansia Pekalongan</p> <!-- Ini kalau diklik muncul dibawah e tapi blm jadi -->
            <div class="row wow fadeInUp" data-wow-delay=".3s">
<!--                 <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/MariaDoe.jpg" alt="1">
                        <form action="#detSatu" class="page-scroll">
                        <a href ="#detSatu" class="page-scroll" onclick="satuDetail()">
                            <button onclick="satuDetail()" class="page-scroll">Struktur Organisasi</button>
                        <!-- </a>    
                        </form>
                        
                    </div>
                </div> -->
                <div class="col-md-6">
                    <a href ="#detDua" class="page-scroll" onclick="duaDetail()">
                        <div class="team">
                            <img class="img-responsive center-block" src="<?php echo base_url(); ?>assets/img/team/logo.png" alt="2">
                            <h4>Tentang Komunitas Lansia</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href ="#detTiga" class="page-scroll" onclick="tigaDetail()">
                        <div class="team">
                            <img class="img-responsive center-block" src="<?php echo base_url(); ?>assets/img/team/pkl.png" alt="3">
                            <h4>Kegiatan Rutin Komunitas</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail Tentang Kami 
    =======================================================-->

    <div id="detDua">
        <section id="services">
        <div class="container">
            <h2>Komunitas Lansia Pekalongan</h2>
            <hr class="light-sep">
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-12">
                        <p align="justify">
                        Komunitas Lansia Pekalongan awalnya hanyalah sebuah perkumpulan rutin para lansia yang tinggal di kota pekalongan untuk mengadakan senam lansia. Awalnya kegiatan senam tersebut dikenal dengan Senam Sehat Indonesia (SSI). Pertama kali didirikan pada akhir era 80-an, SSI merupakan lembaga senam independen dan tidak dikelola secara resmi oleh pemerintah setempat. <br />
                        Saat ini SSI telah bertransformasi menjadi satu komunitas besar yang menaungi banyak kegiatan senam bagi lansia. Di antaranya adalah senam sehat indonesia, senam jantung sehat dam senam diabet. Kegiatan tersebut diadakan di berbagai kecamatan yang ada di Pekalongan, tercatat terdapat 16 sasana yang secara rutin menggelar senam tersebut. Selain senam yang diadakan secara reguler, Komunitas Lansia Pekalongan juga secara aktif menjadi partner pemerintah dalam memperingati hari lansia nasional.<br />
                        SELAMAT BERGABUNG DI KOMUNITAS LANSIA PEKALONGAN!
                        </p>
                    </div>
                    
                </div>
            </div>
            </div>
        </section>
    </div>

    <div id="detTiga">
        <section id="services">
        <div class="container">
            <h2>Kegiatan Rutin Komunitas</h2>
            <hr class="light-sep">
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-12">
                        <p align="justify">
                            Senam Rutin, Dengan Macam-macam senam :<br />
                            1. Senam Sehat Indonesia<br />
                            2. Senam Diabet<br />
                            3. Senam Jantung Sehat<br />
                        </p>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: white;">
                        <!-- define the calendar element -->
                        <div id="my-calendar"></div>

                        <!-- initialize the calendar on ready -->
                        <script type="application/javascript">
                          $(document).ready(function () {
                            $("#my-calendar").zabuto_calendar({
                              cell_border: true,
                              today: true,
                              show_days: true,
                              weekstartson: 0,
                              nav_icon: {
                                prev: '<i class="fa fa-chevron-circle-left"></i>',
                                next: '<i class="fa fa-chevron-circle-right"></i>'
                              },
                              legend: [
                                {type: "text", label: "Special event", badge: "00"},
                                {type: "spacer"},
                                {type: "block", label: "Regular event", badge: "01"},
                              ],

                              ajax: {
                                  url: "<?php echo base_url()."pages/event" ?>",
                                  modal: true,
                              }
                            });
                          });
                        </script>                        
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-12" style="padding-top: 10px">
                        <p align="justify">
                            Daftar sanggar yang tergabung dalam Komunitas Lansia Pekalongan :<br />
                            <?php
                                $i=1;
                                foreach ($res as $data) {
                            ?>
                                &emsp;&emsp;<i class="fa fa-home"></i>&ensp;<?php echo $data['nama']; ?>&ensp;|
                                <i class="fa fa-map-marker"></i>&ensp;<?php echo $data['lokasi']; ?>&ensp;|
                                <i class="fa fa-user"></i>&ensp;<?php echo $data['koordinator']; ?><br />
                            <?php $i++; } ?>

                        </p>
                    </div>

                </div>
            </div>
            </div>
        </section>
    </div>