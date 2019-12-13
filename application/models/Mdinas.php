<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdinas extends CI_Model {
	function ambil_admin(){
		$query=$this->db->get('kedinasan');
		$data=$query->result_array();
		return $data;
	}

	function tambah($post){
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '50000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_dinas');
		if($upload){
			$post['foto_dinas']=$this->upload->data('file_name');
		}
		$this->db->insert('kedinasan', $post);
	}
	function hapus($id){
		$this->db->where('id_dinas', $id);
		$this->db->delete('kedinasan');
	}
	function ambil_satu_dinas($id){
		$this->db->where('id_dinas', $id);
		$query=$this->db->get('kedinasan');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

} 