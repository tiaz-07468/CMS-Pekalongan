<?php
class Pages extends CI_Controller {

	public function index(){
                $gambar=$this->LansiaModel->getGaleri();
                $brt = $this->LansiaModel->selectData("berita_terkini");
                $sngr = $this->LansiaModel->selectData("sanggar");
                $content = array(
                        "berita" => $this->load->view('pages/berita',array('res' => $brt),true),
                        "gallery" => $this->load->view('pages/gellery',array('res' => $gambar),true),
                        "tentang" => $this->load->view('pages/tentang',array('res' => $sngr),true)
                );
                $this->load->view('templates/header');
                $this->load->view('pages/home', $content);
                $this->load->view('templates/footer');                        
	}

        public function login(){
                $this->load->view('pages/login');
        }
        public function detailBerita(){
                try{
                        $where = array("id" => $_POST['id']);
                        $data = $this->LansiaModel->getDataId("berita_terkini",$where);
                        $this->load->view('pages/detailBerita',array('res'=>$data));
                }catch(Exception $e){
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
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


}

?>