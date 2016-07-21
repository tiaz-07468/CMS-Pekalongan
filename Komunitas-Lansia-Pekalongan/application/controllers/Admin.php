<?php
class Admin extends CI_Controller {

	public function index(){
                if($this->session->userdata("is_loggin")){
                        $gal = $this->LansiaModel->countData("galeri");
                        $brt = $this->LansiaModel->countData("berita_terkini");
                        $evn = $this->LansiaModel->countData("event");
                        $sngr = $this->LansiaModel->countData("sanggar");
                        $data = array(
                                "galeri" => $gal,
                                "berita" => $brt,
                                "event" => $evn,
                                "sanggar" => $sngr
                        );
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/utama',array('res' => $data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');
                }else{
                        redirect('pages/login');
                }
	}

        function validasi() { 
                $data=array(
                        'username'=>$this->input->post('username'),
                        'password'=>md5($this->input->post('password'))
                );

                // Berfungsi untuk memanggil fungsi ambil_data pada class login_model
                $cek=$this->LansiaModel->authLogin($data);
                if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)
                        $sesi = $this->LansiaModel->getLogin($data);  
                        // Berfungsi untuk menyimpan user data
                        $data2 = array();
                        foreach ($sesi as $data) {
                                array_push($data2,$data2['username'] = $data['username']);
                                array_push($data2,$data2['password'] = $data['password']);
                                array_push($data2,$data2['nama'] = $data['nama']);
                                array_push($data2,$data2['is_loggin'] =1);
                        }
                        $sesi=$this->session->set_userdata($data2);
                        // Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
                        redirect('admin/');
                }else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
                        $this->load->view('pages/login');
                }
        }

                // Berfungsi untuk menghapus session atau logout
        function logout() {
                session_destroy();
                redirect('pages/login');
        } 

        public function inputBerita(){
                if($this->session->userdata("is_loggin")){
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/berita',array(),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');

                }else{
                        redirect('pages/login');
                }
        }
        public function inputGaleri(){
                if($this->session->userdata("is_loggin")){
                        $this->load->view('admin/galeri',array());
                }else{
                        redirect('pages/login');
                }

        }

        public function iBerita(){
                if($this->session->userdata("is_loggin")){
                        $fileName = $_FILES['gmbr']['name'];  
                        $fileSize = $_FILES['gmbr']['size'];  
                        $fileError = $_FILES['gmbr']['error'];  
                        $judul=$_POST['judul'];
                        $berita=$_POST['berita'];
                        $penulis=$_POST['penulis'];
                        $tanggal=date("Y-m-d");
                        $data = array(
                                "id" => '',
                                "judul" => $judul,
                                "berita" => $berita,
                                "penulis" => $penulis,
                                "lokasi" => $fileName,
                                "tanggal" => $tanggal
                        );
                        if(!empty($_FILES['gmbr']['name'])){
                                if($fileSize>0 || $fileError ==0){
                                        $foto = array("lokasi" => $fileName);
                                        $data += $foto;
                                        $stmt = $this->LansiaModel->insertData('berita_terkini',$data);
                                        $move = move_uploaded_file($_FILES['gmbr']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/berita/'.$fileName);  
                                }else{  
                                         echo "Gagal mengupload file: ".$fileError;  
                                }
                        }else{
                                array_push($data, $data['lokasi'] = "-");
                                $stmt = $this->LansiaModel->insertData('berita_terkini',$data);
                        }
                        redirect("admin/tampilBerita");
                }else{
                        redirect('pages/login');
                }
        }

        public function iGallery(){
                if($this->session->userdata("is_loggin")){
                         $fileName = $_FILES['gmbr']['name'];  
                         $fileSize = $_FILES['gmbr']['size'];  
                         $fileError = $_FILES['gmbr']['error'];  
                         $judul=$_POST['kegiatan'];
                         $caption=$_POST['caption'];
                         $penulis=$_POST['penulis'];
                         $tanggal=date("Y-m-d");
                        $data = array(
                                "id" => '',
                                "judul" => $judul,
                                "caption" => $caption,
                                "penyunting" => $penulis,
                                "lokasi" => $fileName,
                                "tanggal" => $tanggal
                        );

                           
                        if($fileSize>0 || $fileError ==0){
                                $stmt = $this->LansiaModel->insertData('galeri',$data);
                                $move = move_uploaded_file($_FILES['gmbr']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/event/'.$fileName);  
  
                                redirect("admin/tampilGaleri");
                        }else{  
                                 echo "Gagal mengupload file: ".$fileError;  
                        }
                }else{
                        redirect('pages/login');
                }
        }

        public function tampilBerita(){
                  if($this->session->userdata("is_loggin")){
                        $data = $this->LansiaModel->selectData("berita_terkini");
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/tberita',array('res' => $data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');
                }else{
                        redirect('pages/login');
                }
              
        }
        public function tampilGaleri(){
                  if($this->session->userdata("is_loggin")){
                        $data = $this->LansiaModel->selectData("galeri");
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/tgaleri',array('res' => $data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');
                }else{
                        redirect('pages/login');
                }
              
        }

        public function detailGaleri(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("galeri",$where);
                                $this->load->view('admin/dGaleri',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                
        }

        public function editGaleri(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("galeri",$where);
                                $this->load->view('admin/eGaleri',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                
        }

        public function updateGaleri($id_gal){
                  if($this->session->userdata("is_loggin")){
                         $judul=$_POST['kegiatan'];
                         $caption=$_POST['caption'];
                         $penulis=$_POST['penulis'];
                         $gambar_lama=$_POST['gmbr_lama'];
                         $tanggal=date("Y-m-d");
                        $data = array(
                                "judul" => $judul,
                                "caption" => $caption,
                                "penyunting" => $penulis,
                                "tanggal" => $tanggal
                        );
                        if(!empty($_FILES['gmbr']['name'])){
                                 $fileName = $_FILES['gmbr']['name'];  
                                 $fileSize = $_FILES['gmbr']['size'];  
                                 $fileError = $_FILES['gmbr']['error'];
                                 // array_push($data, $data["lokasi"] = $fileName);
                                 $foto = array("lokasi" => $fileName);
                                 $data += $foto;
                                if($fileSize>0 || $fileError ==0){
                                        $stmt = $this->LansiaModel->updateData('galeri',$data,$id_gal);
                                        $move = move_uploaded_file($_FILES['gmbr']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/event/'.$fileName);  
                                 @unlink($_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/event/'.$gambar_lama);
                                }else{  
                                         echo "Gagal mengupload file: ".$fileError;  
                                }
                         }else{
                                $stmt = $this->LansiaModel->updateData('galeri',$data,$id_gal);

                         }

                               redirect("admin/tampilGaleri");
                }else{
                        redirect('pages/login');
                }
                
        }

        
        public function deleteGaleri($id_gal,$gambar){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $data = $this->LansiaModel->deleteData("galeri",$id_gal);
                                @unlink($_SERVER['DOCUMENT_ROOT']."/KLP/assets/img/event/".$gambar);
                                redirect('admin/tampilGaleri');
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                
        }

        public function detailBerita(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("berita_terkini",$where);
                                $this->load->view('admin/dBerita',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                
        }

        public function editBerita($id_brt){
                 if($this->session->userdata("is_loggin")){
                        $where = array("id" => $id_brt);
                        $data = $this->LansiaModel->getDataId("berita_terkini",$where);
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/eBerita',array('res'=>$data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');

                }else{
                        redirect('pages/login');
                }
               
        }

        public function updateBerita($id_brt){
                  if($this->session->userdata("is_loggin")){
                        $judul=$_POST['judul'];
                        $berita=$_POST['berita'];
                        $penulis=$_POST['penulis'];
                        $tanggal=date("Y-m-d");
                        $gambar_lama = $_POST['gmbr_lama'];
                        $data = array(
                                "judul" => $judul,
                                "berita" => $berita,
                                "penulis" => $penulis,
                                "tanggal" => $tanggal
                        );
                        if(!empty($_FILES['gmbr']['name'])){
                                 $fileName = $_FILES['gmbr']['name'];  
                                 $fileSize = $_FILES['gmbr']['size'];  
                                 $fileError = $_FILES['gmbr']['error'];
                                 $foto = array("lokasi" => $fileName);
                                 $data += $foto;
                                if($fileSize>0 || $fileError ==0){
                                        $stmt = $this->LansiaModel->updateData('berita_terkini',$data,$id_brt);
                                        $move = move_uploaded_file($_FILES['gmbr']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/berita/'.$fileName);  
                                        if($gambar_lama != "-"){
                                                @unlink($_SERVER['DOCUMENT_ROOT'].'/KLP/assets/img/berita/'.$gambar_lama);
                                        }
                                  }else{  
                                         echo "Gagal mengupload file: ".$fileError;  
                                }
                        }else{
                                $stmt = $this->LansiaModel->updateData('berita_terkini',$data,$id_brt);
                        }
                        redirect("admin/tampilBerita");
                }else{
                        redirect('pages/login');
                }       
        }
        public function deleteBerita($id_brt,$gambar){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $data = $this->LansiaModel->deleteData("berita_terkini",$id_brt);
                                @unlink($_SERVER['DOCUMENT_ROOT']."/KLP/assets/img/berita/".$gambar);
                                redirect('admin/tampilBerita');
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                
        }

        public function inputEvent(){
                if($this->session->userdata("is_loggin")){
                        $this->load->view('admin/event',array());
                }else{
                        redirect('pages/login');
                }


        }

        public function tampilEvent(){
                  if($this->session->userdata("is_loggin")){
                        $data = $this->LansiaModel->selectData("event");
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/tEven',array('res' => $data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');
                }else{
                        redirect('pages/login');
                }

        }

        public function iEvent(){
                if($this->session->userdata("is_loggin")){
                        $title = $_POST['judul'];
                        $date = $_POST['date'];
                        $badge = $_POST['badge'];
                        $tgl = date("d",strtotime($date));
                        $hari = date('l',strtotime($date));
                        $body = $_POST['body'];
                        $penulis = $_POST['penulis'];

                        $data = array(
                                "id" =>'',
                                "hari" => $hari,
                                "tanggal" => $tgl,
                                "date" => $date,
                                "badge" => $badge,
                                "title" => $title,
                                "body" => $body,
                                "penulis" => $penulis
                        );

                        $stmt = $this->LansiaModel->insertData("event",$data);
                        redirect('admin/tampilEvent');

                }else{
                        redirect('pages/login');
                }
        }

        public function updateEvent($id){
                if($this->session->userdata("is_loggin")){
                        $title = $_POST['judul'];
                        $date = $_POST['date'];
                        $badge = $_POST['badge'];
                        $tgl = date("d",strtotime($date));
                        $hari = date('l',strtotime($date));
                        $body = $_POST['body'];
                        $penulis = $_POST['penulis'];

                        $data = array(
                                "hari" => $hari,
                                "tanggal" => $tgl,
                                "date" => $date,
                                "badge" => $badge,
                                "title" => $title,
                                "body" => $body,
                                "penulis" => $penulis
                        );

                        $stmt = $this->LansiaModel->updateData("event",$data,$id);
                        redirect('admin/tampilEvent');

                }else{
                        redirect('pages/login');
                }
        }

        public function detailEvent(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("event",$where);
                                $this->load->view('admin/dEvent',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                

        }

        public function eEvent(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("event",$where);
                                $this->load->view('admin/eEvent',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }

        }

        public function deleteEvent($id){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $data = $this->LansiaModel->deleteData("event",$id);
                                redirect('admin/tampilEvent');
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }

        }

        public function event(){
                if (!empty($_REQUEST['year']) && !empty($_REQUEST['month'])) {
                    $year = intval($_REQUEST['year']);
                    $month = intval($_REQUEST['month']);
                    $lastday = intval(strftime('%d', mktime(0, 0, 0, ($month == 12 ? 1 : $month + 1), 0, ($month == 12 ? $year + 1 : $year))));

                    $dates = array();
                    $even = $this->LansiaModel->selectData("event");
                    $c = $this->LansiaModel->countData("event");

                    for($i = 0; $i <= $c-1; $i++) {
                        $date = $even[$i]['date'];
                        $bedge = $even[$i]['badge'];
                        $title = $even[$i]['title'];
                        $body = $even[$i]['body'];
                        $footer = $even[$i]['penulis'];
                        $dates[$i] = array(
                            'date' => $date,
                            'badge' => ($bedge & 1) ? true : false,
                            'title' => $date,
                            'body' => '<p class="lead">'.$title.'</p>'.$body,
                            'footer' => '<i class="fa fa-user"></i>&emsp;'.$footer,
                        );
                    }

                    echo json_encode($dates);

                } else {
                    echo json_encode(array());
                }
        }

        public function inputSanggar(){
                if($this->session->userdata("is_loggin")){
                        $this->load->view('admin/sanggar',array());
                }else{
                        redirect('pages/login');
                }


        }

        public function tampilSanggar(){
                  if($this->session->userdata("is_loggin")){
                        $data = $this->LansiaModel->selectData("sanggar");
                        $content = array(
                                "menu" => $this->load->view('admin/menu',array(),true),
                                "content" => $this->load->view('admin/tSanggar',array('res' => $data),true)
                        );
                        $this->load->view('include/header_admin');
                        $this->load->view('admin/home',$content);
                        $this->load->view('include/footer_admin');
                }else{
                        redirect('pages/login');
                }

        }

        public function iSanggar(){
                if($this->session->userdata("is_loggin")){
                        $nama = $_POST['nama'];
                        $lokasi = $_POST['lokasi'];
                        $koordinator = $_POST['koor'];
                        $penulis = $_POST['penulis'];

                        $data = array(
                                "id" =>'',
                                "nama" => $nama,
                                "lokasi" => $lokasi,
                                "koordinator" => $koordinator,
                                "oleh" => $penulis
                        );

                        $stmt = $this->LansiaModel->insertData("sanggar",$data);
                        redirect('admin/tampilSanggar');

                }else{
                        redirect('pages/login');
                }
        }

        public function updateSanggar($id){
                if($this->session->userdata("is_loggin")){
                        $nama = $_POST['nama'];
                        $lokasi = $_POST['lokasi'];
                        $koordinator = $_POST['koor'];
                        $penulis = $_POST['penulis'];

                        $data = array(
                                "nama" => $nama,
                                "lokasi" => $lokasi,
                                "koordinator" => $koordinator,
                                "oleh" => $penulis
                        );
                        $stmt = $this->LansiaModel->updateData("sanggar",$data,$id);
                        redirect('admin/tampilSanggar');

                }else{
                        redirect('pages/login');
                }
        }

        public function detailSanggar(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("sanggar",$where);
                                $this->load->view('admin/dSanggar',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }
                

        }

        public function eSanggar(){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $where = array("id" => $_POST['id']);
                                $data = $this->LansiaModel->getDataId("sanggar",$where);
                                $this->load->view('admin/eSanggar',array('res'=>$data));
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }

        }

        public function deleteSanggar($id){
                  if($this->session->userdata("is_loggin")){
                        try{
                                $data = $this->LansiaModel->deleteData("sanggar",$id);
                                redirect('admin/tampilSanggar');
                        }catch(Exception $e){
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }else{
                        redirect('pages/login');
                }

        }

}

?>