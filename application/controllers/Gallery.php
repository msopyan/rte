<?php
class Gallery extends CI_Controller{
	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_all_galeri();
		$this->load->view('gallery',$x);
	}
}
