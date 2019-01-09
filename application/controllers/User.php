<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('security_model');
		$this->security_model->getsecurity();
	}
	public function index()
	{
	$data['title'] = 'Managent User';
	$data['user'] = $this->db->query('select * from tbl_user');
	$this->load->view('admin/user',$data);
	}
	public function save(){
	$insert_user = array(
		'kd_user' => '',
		'nama_user' => $this->input->post('name'),
		'username_user' => $this->input->post('username'),
		'password_user' => md5($this->input->post('password')),
		'level_user' => $this->input->post('level'),
		'email_user' => $this->input->post('email') );
	$this->db->insert('tbl_user',$insert_user);
	$this->session->set_flashdata('message', 'swal("Berhasil", "User Berhasil Di Tambah Kan", "success");');
	redirect('user');
	}
	public function delete($id){
		$this->db->where('kd_user',$id);
		$this->db->delete('tbl_user');
		$this->session->set_flashdata('message', 'swal("Berhasil", "User Berhasil Di Delete", "success");');
		redirect('user');
	}
	public function edit($id){
		$data['title'] = 'Edit User';
		$data['edit'] = $this->db->where('kd_user',$id)->get('tbl_user')->row_array();
		// die(var_dump($data));
		$this->load->view('admin/edit_user', $data);
	}
	public function update(){
	$user_update = array(
		'nama_user' 	=> $this->input->post('nama'),
		'username_user' => $this->input->post('username'),
		'password_user' => md5($this->input->post('password')),
		'level_user'	=> $this->input->post('level'),
		'email_user' 	=> $this->input->post('email'));
	$where = array('kd_user' => $this->input->post('kd_user'));
	$hsl = $this->db->update('tbl_user', $user_update,$where);
	if ($hsl >=0) {
	$this->session->set_flashdata('message', 'swal("Berhasil", "User Berhasil Di Tambah Kan", "success");');
	redirect('user','refresh');
	}else{
		echo "gagal";
	}
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */