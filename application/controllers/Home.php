<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'List Antrian Room';
		$data['reservasi'] = $this->db->query("SELECT * FROM tbl_reservasi ORDER BY id_reservasi desc")->result_array();
		$this->load->view('admin/index',$data);		
	}
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */