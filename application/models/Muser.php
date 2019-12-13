<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	function ambil_user(){
		$query=$this->db->get('user');
		$data=$query->result_array();
		return $data;
	}

	function tambah($post){
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '50000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_user');
		if($upload){
			$post['foto_user']=$this->upload->data('file_name');
		}
		$this->db->insert('user', $post);
	}
	function hapus($id){
		$this->db->where('username', $id);
		$this->db->delete('user');
	}
	function ambil_satu_user($id){
		$this->db->where('username', $id);
		$query=$this->db->get('user');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

} 