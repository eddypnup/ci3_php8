<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Modul extends CI_Model {
	
	function getJmlApl01($username){
		$sql = "select id from apl_01 where username = '$username'";
		$n = $this->db->query($sql)->num_rows();
		return $n;
	}
	
	function getJmlSkema(){
		$sql = "select id from skema where aktif = '1'";
		$n = $this->db->query($sql)->num_rows();
		return $n;
	}
	
	function getJmlTerjadwal(){
		$sql = "select id from apl_01 where id_status_terakhir = '3'";
		$n = $this->db->query($sql)->num_rows();
		return $n;
	}
	
	function getNStatusTerakhir($where = array(), $wherelike= array()){
		$this->db->select('id')->from( 'apl_01' )->where($where)->like($wherelike);
		$n = $this->db->get()->num_rows();
		return $n;
	}
	
	function getNUjikom($where = array(), $wherelike= array()){
		//$sql = "select id,count(id) from ujikom where aktif ='1' group by id";
		$this->db->select('id')->from( 'ujikom' )->where($where)->like($wherelike);
		$n = $this->db->get()->num_rows();
		return $n;
	}
}