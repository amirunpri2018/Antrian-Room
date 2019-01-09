<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Daftar Room Meeting';
	 	$this->load->view('admin/daftar',$data);
	}
	public function insert_reservasi(){
		// // die(print_r($_POST));
		// $sqlCek = $this->db->query("SELECT tgl_reservasi,mulai_reservasi,selesai_reservasi FROM `tbl_reservasi`");
		// $rrCek = $sqlCek->row_array();
		// if ($rrCek) {
		// 	$this->session->set_flashdata('message', 'swal("Gagal", "Pendaftaran Gagal cek kembali list room untuk waktu yg beda", "error");');
		// 	redirect('reservasi/daftar','refresh');
		// } else {
			$data = array(
			'id_reservasi' 	  	=> '',
			'status_reservasi' 	  	=> '2',
			'room_reservasi'  	=> $this->input->post('room'),
			'nama_reservasi'  	=> $this->input->post('nama'),
			'nomor_reservasi' 	=> $this->input->post('nomor'),
			'jml_org_reservasi'	=> $this->input->post('jml_org'),
			'tgl_reservasi'		=> $this->input->post('tanggal'),
			'mulai_reservasi'	=> $this->input->post('mulai'),
			'selesai_reservasi' => $this->input->post('selesai'),
			'desc_reservasi'	=> $this->input->post('desc')
			);
		$hsl = $this->db->insert('tbl_reservasi', $data);
		$this->session->set_flashdata('message', 'swal("Berhasil", " Pendafataran Berhasil Dan Sedang Di Proses", "success");');
	    redirect('daftar','refresh');
		// }

	}
}
/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */