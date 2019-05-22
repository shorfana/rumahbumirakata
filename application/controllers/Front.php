<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	//Codeigniter : Write Less Do More
    	$this->load->model('Dbs');
    	$this->load->helper('url');
    }    

	public function index()
	{
		$this->load->view('front/header.php');
		$this->load->view('front/index.php');
		$this->load->view('front/footer.php');
	}

	public function blok_A()
	{
		$data['rumah'] = $this->Dbs->blokA();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_BlokA',$data);
		$this->load->view('front/footer.php');
	}
	public function blok_B()
	{
		$data['rumah'] = $this->Dbs->blokB();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_BlokB',$data);
		$this->load->view('front/footer.php');
	}
	public function blok_C()
	{
		$data['rumah'] = $this->Dbs->blokC();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_BlokC',$data);
		$this->load->view('front/footer.php');
	}
	public function blok_D()
	{
		$data['rumah'] = $this->Dbs->blokD();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_BlokD',$data);
		$this->load->view('front/footer.php');
	}


}
