<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	//Codeigniter : Write Less Do More
    	$this->load->model('Dbs');
    	$this->load->helper('url');
    }    

	public function index()
	{
		$this->load->view('admin/header.php');
		$this->load->view('admin/index.php');
		$this->load->view('admin/footer.php');
	}

	public function data_rumah()
	{
		$data['rumah'] = $this->Dbs->get_data()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/data_rumah.php',$data);
		$this->load->view('admin/footer.php');
	}

	public function tambah_rumah(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/tambahRumah.php');
		$this->load->view('admin/footer.php');
	}

	public function act_tambahRumah(){

		$a['nounik'] = $this->Dbs->buat_kode();
		$kode = implode(',', $a);
		$gambar = $_FILES['gambar']['name'];
		$config['upload_path']='./foto_rumah';
        $config['allowed_types']='jpg|gif|png';
        $this->load->library('upload',$config);
        if (!$this->upload->do_upload('gambar')) {
            echo "Download Gagal"; die();
        }else{
            $gambar=$this->upload->data('file_name');
        }
		$data = array(
				'no_rumah' => $kode,
				'nama_rumah' => $this->input->post('nama_rumah',TRUE),
				'harga_rumah' => $this->input->post('harga_rumah',TRUE),
				'gambar' => $gambar,
				'blok' => $this->input->post('blok',true),
				'tipe' => $this->input->post('tipe',true),
				'luas_bangunan' => $this->input->post('luas_bangunan',true),
				'luas_tanah' => $this->input->post('luas_tanah',true),
				'sertifikat' => $this->input->post('sertifikat',true),
				'sarana' => $this->input->post('sarana',true),
				'keterangan' => $this->input->post('keterangan',true),
				'status' => $this->input->post('status',true),
		);
		$sql = $this->Dbs->insert($data,'rumah');
		if ($sql) {
            echo "<script type='text/javascript'>alert('Berhasil Menambahkan Data Rumah'); document.location='http://localhost/rumahrakata/admin/data_rumah' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Menambahkan Data Rumah'); document.location='http://localhost/rumahrakata/admin/data_rumah' </script>";
            
        }

	}

	public function edit_rumah($id){
		$get= $this->Dbs->get_rumahByid($id);

		$data = array(
			'id' => $get->id,
			'nama_rumah' => $get->nama_rumah,
			'harga_rumah' => $get->harga_rumah,
			'blok' => $get->blok,
			'tipe' => $get->tipe,
			'luas_bangunan' => $get->luas_bangunan,
			'luas_tanah' => $get->luas_tanah,
			'sertifikat' => $get->sertifikat,
			'sarana' => $get->sarana,
			'keterangan' => $get->keterangan,
			'status' => $get->status,

		);

		$this->load->view('admin/header.php');
		$this->load->view('admin/editRumah.php',$data);
		$this->load->view('admin/footer.php');

	}

	public function act_edtRumah(){
		$gambar = $_FILES['gambar']['name'];
		

        if ($gambar == null){
        	$data = array(
				
				'nama_rumah' => $this->input->post('nama_rumah',TRUE),
				'harga_rumah' => $this->input->post('harga_rumah',TRUE),
				'blok' => $this->input->post('blok',true),
				'tipe' => $this->input->post('tipe',true),
				'luas_bangunan' => $this->input->post('luas_bangunan',true),
				'luas_tanah' => $this->input->post('luas_tanah',true),
				'sertifikat' => $this->input->post('sertifikat',true),
				'sarana' => $this->input->post('sarana',true),
				'keterangan' => $this->input->post('keterangan',true),
				'status' => $this->input->post('status',true),
		);
        }else{
        	$config['upload_path']='./foto_rumah';
        	$config['allowed_types']='jpg|gif|png';
	        $this->load->library('upload',$config);
	        if (!$this->upload->do_upload('gambar')) {
	            echo "Download Gagal"; die();
	        }else{
	            $gambar=$this->upload->data('file_name');
	        }
        	$data = array(
				
				'nama_rumah' => $this->input->post('nama_rumah',TRUE),
				'harga_rumah' => $this->input->post('harga_rumah',TRUE),
				'gambar' => $gambar,
				'blok' => $this->input->post('blok',true),
				'tipe' => $this->input->post('tipe',true),
				'luas_bangunan' => $this->input->post('luas_bangunan',true),
				'luas_tanah' => $this->input->post('luas_tanah',true),
				'sertifikat' => $this->input->post('sertifikat',true),
				'sarana' => $this->input->post('sarana',true),
				'keterangan' => $this->input->post('keterangan',true),
				'status' => $this->input->post('status',true),
			);
        }

		
		$id = $this->input->post('id',TRUE);
		$sql=$this->Dbs->update($data,'rumah','id',$id);
		if ($sql) {
            echo "<script type='text/javascript'>alert('Berhasil mengedit data Rumah'); document.location='http://localhost/rumahrakata/admin/data_rumah' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal mengedit data Rumah'); document.location='http://localhost/rumahrakata/admin/data_rumah' </script>";   
        }
	}

    public function delete($id){
    	$where = array('id' => $id);
		$this->Dbs->delete($where,'rumah');
        echo "<script type='text/javascript'>alert('Berhasil Dihapus');  document.location='http://localhost/rumahrakata/admin/data_rumah' </script>";   
    }



}
