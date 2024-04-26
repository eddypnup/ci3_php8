<?php

class M_menu extends CI_Model{
	
	function get_main_menu(){
		$sql = "select m.*, _fa5.class as icon_class from _menu_modul m, _fa5 where m.icon_class_id = _fa5.id and m.parent = '0' and m.status = '1' order by m.urutan";
		$data = $this->db->query($sql)->result();
		return $data;
	}

	function get_sub_menu($parent){
		$sql = "select m.*, _fa5.class as icon_class from _menu_modul m, _fa5 where m.icon_class_id = _fa5.id and m.parent = '$parent' and m.status = '1' order by m.urutan";
		$data = $this->db->query($sql)->result();
		return $data;
	}

	function cek_hak_akses($id_role, $id_menu){
		//$this->db->where('id_role', $id_role);
		//$this->db->where('id_menu', $id_menu);
		//$query = $this->db->get('_modul_akses');
		$sql = "select a.id from _modul_akses a, _menu_modul m where a.id_menu = m.id and a.id_role = '$id_role' and a.id_menu = '$id_menu' and m.status = '1'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
	//merujuk ke table modul_aksiv pembacaan aksi vertikal
	function get_hak_aksiv($id_role, $id_menu, $view_page){
		$sql = "select a.aksi from _modul_aksiv a left join _modul_akses h on a.id_akses = h.id where h.id_role = '$id_role' and h.id_menu = '$id_menu' and view_page = '$view_page'";
		$rs = $this->db->query($sql)->result();
		return $rs;
	}
	
	function cek_hak_aksiv($id_role, $id_menu, $nama_action, $view_page){
		$sql = "select a.aksi from _modul_aksiv a left join _modul_akses h on a.id_akses = h.id where h.id_role = '$id_role' and h.id_menu = '$id_menu' and view_page = '$view_page' and a.aksi = '$nama_action'";
		$rs = $this->db->query($sql)->result();
		//return $this->db->last_query();
		//print_r($rs);
		if(!empty($rs[0])) return 1;
		else return 0;
	}
	
	
	//Aksi yang tersedia diatur di MY_Controller pembacaan aksi horizontal
	function cek_hak_aksi($id_role, $id_menu, $nama_action, $view_page){
		$sql = "select a.$nama_action from _modul_aksi a left join _modul_akses h on a.id_akses = h.id where h.id_role = '$id_role' and h.id_menu = '$id_menu' and view_page = '$view_page'";
		$rs = $this->db->query($sql)->result();
		//return $this->db->last_query();
		//print_r($rs);
		if(!empty($rs[0]->$nama_action)) return $rs[0]->$nama_action;
		else return 0;
	}

	function get_id_menu_by_modul($modul){
		$this->db->where('modul', $modul);
		$this->db->limit(1);
		$query = $this->db->get('_menu_modul');

		if($query->num_rows() > 0){
			return $query->row()->id;
		}else{
			return 0;
		}
	}
}
