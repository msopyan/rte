<?php
// create curl resource
$ch = curl_init();

class Support extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}
   
    function index(){
		$this->load->view('support');
	}

}
 