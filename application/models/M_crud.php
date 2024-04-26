<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {
	function antiInject($data) {
		$filter = strip_tags(html_entity_decode($data));
		$filter = addslashes(stripslashes(strip_tags(htmlspecialchars($filter, ENT_QUOTES))));
		//$con = get_instance()->db->conn_id;
		//$filtered = mysqli_real_escape_string($con, $filtered);
		return $filter;
	}
	
	function filterData($namaTable, $where = array(), $wherelike= array()){
		//$sql = "select * from proposal where status = '".$where['status']."' and judul like '%".$where['judul']."%'";
		//$data = $this->db->query($sql)->result();
		$this->db->select()->from($namaTable)->where($where)->like($wherelike);
		$data = $this->db->get()->result();
		return $data;
	}

	function insertData($namaTable, $data){
		//bagian ini tambahan untuk keamanan jika ada percobaan post xss
		
		$xss = new XssClean();
		foreach($data as $key => $val)
			$data[$key] = $xss->clean_input($val);
		
		//htmlentities($val, ENT_QUOTES, 'UTF-8');
		//$this->security->xss_clean($val);//remove style

		$hasil = $this->db->insert($namaTable, $data);
		//return $this->db->error();
		/**/
		if($hasil) return true;
		else{
			//if($this->debug){
			$error = $this->db->error();
			return $error['code'];
			//}else return "Data Gagal Disimpan";
		}
		/**/
		//return $this->db->last_query();
		
	}
	
	function updateData($namaTable,$data,$id){
		//bagian ini tambahan untuk keamanan jika ada percobaan post xss
		
		$xss = new XssClean();
		foreach($data as $key => $val)
			$data[$key] = $xss->clean_input($val);
		
		$hasil = $this->db->where('id', $id)->update($namaTable, $data);
		if($hasil) return true;
		else{
			//if($this->debug){
			$error = $this->db->error();
			return $error['message'];
			//}else return "Data Gagal Disimpan";
		}
		
    }
	
	function updateDataM($namaTable,$data,$where){
		//bagian ini tambahan untuk keamanan jika ada percobaan post xss
		foreach($data as $key => $val) 
			$data[$key] = htmlentities($val, ENT_QUOTES, 'UTF-8');
		
		$hasil = $this->db->where($where)->update($namaTable, $data);
		if($hasil) return true;
		else{
			//if($this->debug){
			$error = $this->db->error();
			return $error['message'];
			//}else return "Data Gagal Disimpan";
		}
    }
	
	function deleteData($namaTable, $id){
		return $this->db->where('id', $id)->delete($namaTable);
	}
	
	function deleteDataM($namaTable, $where){
		return $this->db->where($where)->delete($namaTable);
	}

	function deleteAll($namaTable){
		return $this->db->empty_table($namaTable);
	}
}