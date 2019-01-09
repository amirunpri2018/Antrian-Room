<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	 $data['ipaddres'] = $this->getUserIP();
	 $this->load->view('login',$data);
	}
	public function cekuser(){
        $u = $this->input->post('username');
        $p = md5($this->input->post('password'));
            $this->db->where('username_user',$u);
            $this->db->where('password_user',$p);
            $query = $this->db->get('tbl_user');
            if ($query->num_rows()>0) {
                foreach ($query->result() as $row) {
                    $sess = array(
                        'username_user' => $row->username_user,
                        'password_user' => $row->password_user,
                        'nama_user'     => $row->nama_user,
                        'email_user'   => $row->email_user,
                        'level_user'   => $row->level_user
                    );
                    $this->session->set_userdata($sess);
                    redirect('reservasi');
                }
            }
        else{
        $this->session->set_flashdata('message', 'swal("Gagal", "Email/Password Salah", "error");');
        redirect('login');
        }   
    }
    function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
        
    }
	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */