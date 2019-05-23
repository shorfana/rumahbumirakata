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

	public function tipe21()
	{
		$data['rumah'] = $this->Dbs->tipe21();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_tipe21',$data);
		$this->load->view('front/footer.php');
	}

	public function tipe36()
	{
		$data['rumah'] = $this->Dbs->tipe36();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_tipe36',$data);
		$this->load->view('front/footer.php');
	}

	public function tipe45()
	{
		$data['rumah'] = $this->Dbs->tipe45();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_tipe45',$data);
		$this->load->view('front/footer.php');
	}
	public function tipe54()
	{
		$data['rumah'] = $this->Dbs->tipe54();
		$this->load->view('front/header.php');
		$this->load->view('front/rumah_tipe54',$data);
		$this->load->view('front/footer.php');
	}
	public function rumah_terjual()
	{
		$data['rumah'] = $this->Dbs->terjual();
		$this->load->view('front/header.php');
		$this->load->view('front/terjual',$data);
		$this->load->view('front/footer.php');
	}
	public function rumah_belum_terjual()
	{
		$data['rumah'] = $this->Dbs->bterjual();
		$this->load->view('front/header.php');
		$this->load->view('front/belum_terjual',$data);
		$this->load->view('front/footer.php');
	}


}
