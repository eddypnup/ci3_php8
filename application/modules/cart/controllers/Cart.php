<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	private $modul;
	public function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		$this->load->view('V_header');
		$this->load->view('V_sidebar');
		$this->load->view('V_cart');
		$this->load->view('V_footer');
	}
	
	function produkDetail(){
		$this->load->view('V_header');
		$this->load->view('V_sidebar');
		$this->load->view('V_produk_detail');
		$this->load->view('V_footer');
	}
	
	
}