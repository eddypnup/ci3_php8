<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	private $modul;
	public function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		//redirect(base_url("public"));
		$this->load->view('index');
	}
	
	function admin(){
		$this->load->view('admin');
	}
}