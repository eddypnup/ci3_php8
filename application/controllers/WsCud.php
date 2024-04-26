<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		redirect('kesalahan/error_page');
	}
	
	//$keyName tiap modul masih berbeda
	
}
?>