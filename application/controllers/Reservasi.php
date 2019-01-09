<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('security_model');
		$this->security_model->getsecurity();
	}
	
	public function index()
	{
		$data['title'] = 'Reservasi Room';
		$data['reservasi'] = $this->db->query("SELECT * FROM tbl_reservasi ORDER BY id_reservasi desc")->result_array();
	 	$this->load->view('admin/reservasi',$data);

	}
	public function editproses($id)
	{
	 $data['title'] = 'Reservasi Room';
	 $data['edit'] = $this->db->where('id_reservasi',$id)->get('tbl_reservasi')->row_array();
	 $this->load->view('admin/proses', $data);
	}
	public function updateproses($id)
	{
	  $where = array('id_reservasi' => $id);
	  $update = array('status_reservasi' => $this->input->post('proses'));
	  $this->db->update('tbl_reservasi',$update,$where);
	  $this->session->set_flashdata('message', 'swal("Berhasil", "Pendafataran Berhasil Dan Sedang Di Proses", "success");');
	  redirect('reservasi','refresh');
	}
	public function pesan($id)
	{	
	 $data['title'] = 'Reservasi Room';
	 $data['edit'] = $this->db->where('id_reservasi',$id)->get('tbl_reservasi')->row_array();
	 $this->load->view('admin/pesan', $data);	
	}
	public function kirimpesan($id)
	{
		$my_apikey = "FY821E3WALP3Q0VC3U5E"; 
		$destination = "$id"; 
		$message = $this->input->post('desc');
		$api_url = "http://panel.apiwha.com/send_message.php"; 
		$api_url .= "?apikey=". urlencode ($my_apikey); 
		$api_url .= "&number=". urlencode ($destination); 
		$api_url .= "&text=". urlencode ($message); 
		$my_result_object = json_decode(file_get_contents($api_url, false));
		$this->session->set_flashdata('message', 'swal("Berhasil", " Pendafataran Berhasil Dan Sedang Di Proses", "success");');
	  	redirect('reservasi','refresh');
	}
}

/* End of file Reservasi.php */
/* Location: ./application/controllers/Reservasi.php */