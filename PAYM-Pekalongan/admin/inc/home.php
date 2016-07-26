                    <h1>Admin <small>PAYM</small></h1>
                    <div class="alert alert-dismissable alert-info">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Hai Admin! :)
                        <br />
                        <a href="https://www.shieldui.com"></a> Halaman beranda ini berisi umpan balik, kritik, saran dan pertanyaan 
                        yang berhubungan dengan Kampoeng Batik Kauman, silahkan balas melalui email yang tertera. 
                    </div>
                </div>
            </div>
            <div class="row">
                <div>
    
            <div class="row">
                <div class="col-lg-12">
                    <?php include_once "lib/function.php"; ?>
                        <form>
                            <div class="row text-center">
                                <h2>Umpan Balik</h2>
                            </div>
                             <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                        <table class="table table-striped"> 
                        <th> Nama </th>
                        <th> Email</th>
                        <th> Isi Pesan </th> 
                        <?php
                                $res = $con->tampilFeedback();
                                foreach ($res as $data) {
                        ?>   
                         
                        
                        <tr>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['email']; ?> </td>
                        <td> <?php echo $data['pesan']; ?> </td>
                        
                        </tr>
                        </div>
                        <?php } ?>
                            
                        </div> 
                        </form>
                        </div> 
                </div>
            </div>
