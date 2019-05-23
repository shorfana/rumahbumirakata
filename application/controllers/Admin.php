<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet

class Admin extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	//Codeigniter : Write Less Do More
    	$this->load->model('Dbs');
    	$this->load->helper('url');
			if ($this->session->userdata('status')!='admin') {
            redirect(base_url()."Login");
        }
    }

	public function index()
	{
		$data['rumah'] = $this->Dbs->get_data()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/data_rumah.php',$data);
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


    public function rumahBlokA(){
    	$blokA['rumah'] = $this->Dbs->blokA();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_blok_A',$blokA);
		$this->load->view('admin/footer');

    }

    public function rumahBlokB(){
    	$blokB['rumah'] = $this->Dbs->blokB();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_blok_B',$blokB);
		$this->load->view('admin/footer');

    }
    public function rumahBlokC(){
    	$blokC['rumah'] = $this->Dbs->blokC();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_blok_C',$blokC);
		$this->load->view('admin/footer');

    }


    public function rumahBlokD(){
    	$blokD['rumah'] = $this->Dbs->blokD();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_blok_D',$blokD);
		$this->load->view('admin/footer');

    }

    public function rumah_terjual(){
    	$terjual['rumah'] = $this->Dbs->terjual();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_r_terjual',$terjual);
		$this->load->view('admin/footer');
    }

    public function rumah_belum_terjual(){
    	$bterjual['rumah'] = $this->Dbs->bterjual();
    	$this->load->view('admin/header');
		$this->load->view('admin/data_r_belumterjual',$bterjual);
		$this->load->view('admin/footer');
    }

		// Export ke excel
		public function excel(){
			$data = array( 'title' => 'Data Rumah | Pt Rakata',
							 'rumah' => $this->Dbs->terjual());
		 			$this->load->view('admin/header');
					$this->load->view('admin/excel',$data);
					$this->load->view('admin/footer');
		}

		public function export_excel(){
			$data = array( 'title' => 'Laporan Excel | Pt Rakata','format' => 'Laporan  Penjualan Rumah PT Rakata yang sudah Terjual',
                'rumah' => $this->Dbs->terjual());
      $this->load->view('admin/Laporan_view',$data);
		}
		public function excel2(){
			$data = array( 'title' => 'Data Rumah | Pt Rakata',
							 'rumah' => $this->Dbs->bterjual());
					$this->load->view('admin/header');
					$this->load->view('admin/excel_belumterjual',$data);
					$this->load->view('admin/footer');
		}

		public function export_excel2(){
			$data = array( 'title' => 'Laporan Excel | Pt Rakata','format' => 'Laporan  Penjualan Rumah PT Rakata yang Belum Terjual',
								'rumah' => $this->Dbs->bterjual());
			$this->load->view('admin/Laporan_view',$data);
		}

}
