<?php
/**
 *
 */
class Login extends CI_Controller
{

	public function __construct(){
    	parent::__construct();
    	//Codeigniter : Write Less Do More
    	$this->load->model('Dbs');
    	$this->load->helper('url');
    }


	public function index(){
		$this->load->view('front/header.php');
		$this->load->view('login');
		$this->load->view('front/footer.php');
	}


	public function login_act(){

		$where = array(
			'username' => $this->input->post('username',TRUE),
			'password' => sha1($this->input->post('password',TRUE))
		);
		$login = $this->Dbs->cek_login('admin',$where);
		if ($login->num_rows() > 0) {
			$data_session = array(
                'username' => $username,
                'status' => "admin"
                );

            $this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			redirect(base_url("login"));
		}


	}


	public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url());
    }


}

 ?>
