<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkw extends CI_Model {
	function ambil_admin(){
		$query=$this->db->get('kampung_wisata');
		$data=$query->result_array();
		return $data;
	}

	function tambah($post){
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '50000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_kw');
		if($upload){
			$post['foto_kw']=$this->upload->data('file_name');
		}
		$this->db->insert('kampung_wisata', $post);
	}
	function hapus($id){
		$this->db->where('id_kampung', $id);
		$this->db->delete('kampung_wisata');
	}
	function ambil_satu_admin($id){
		$this->db->where('id_kampung', $id);
		$query=$this->db->get('user');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

} 