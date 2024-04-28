<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	private $modul;
	public function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		//redirect(base_url("public"));
		$jammalam = strtotime('19:00');
		$jamsore = strtotime('15:00');
		$jamsiang = strtotime('11:00');
		$jampagi = strtotime('06:00');
		if(time() > $jammalam) $ucapan = "Selamat Malam";
		else if(time() > $jamsore) $ucapan = "Selamat Sore";
		else if(time() > $jamsiang) $ucapan = "Selamat Siang";
		else if(time() > $jampagi) $ucapan = "Selamat Pagi";
		else $ucapan = "Tidur dulu";
		$data['hello'] = $ucapan; 
		$this->load->view('V_header');
		$this->load->view('V_sidebar');
		$this->load->view('V_admin', $data);
		$this->load->view('V_footer');
	}
	
	function cart(){
		
		
	}
	
}