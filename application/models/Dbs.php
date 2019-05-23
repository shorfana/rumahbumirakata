<?php
/**
 *
 */
class Dbs extends CI_Model
{

	function get_data(){
		$rumah=$this->db->get('rumah');
		return $rumah;
	}

	function get_rumahByid($id){
		$this->db->where('id',$id);
		return $this->db->get('rumah')->row();
	}

	function insert($data,$table){
		$this->db->insert($table,$data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	function lapor(){
		$this->db->select('*');
		$this->db->from('rumah');
		$this->db->order_by('no_rumah', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	function buat_kode()   {
	  $this->db->select('RIGHT(rumah.no_rumah,2) as no_rumah', FALSE);
	  $this->db->order_by('no_rumah','DESC');
	  $this->db->limit(1);
	  $query = $this->db->get('rumah');      //cek dulu apakah  sudah ada no di tabel.
	  if($query->num_rows() <> 0){
	   //jika no ternyata sudah ada.
	   $data = $query->row();
	   $kode = intval($data->no_rumah) + 1;
	  }
	  else{
	   //jika no belum ada
	   $kode = 1;
	  }
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
	  $kodejadi = "RMPT".$kodemax;
	  return $kodejadi;
	 }

	function update($data,$table,$where,$value){
		$this->db->where($where,$value);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	function delete($id,$table){
		$this->db->where($id);
	$this->db->delete($table);
	}

	function blokA(){
		$dml = "SELECT * FROM rumah WHERE blok = 'A'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function blokB(){
		$dml = "SELECT * FROM rumah WHERE blok = 'B'";
		$query = $this->db->query($dml)->result();
		return $query;
	}
	function blokC(){
		$dml = "SELECT * FROM rumah WHERE blok = 'C'";
		$query = $this->db->query($dml)->result();
		return $query;
	}
	function blokD(){
		$dml = "SELECT * FROM rumah WHERE blok = 'D'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function terjual(){
		$dml = "SELECT * FROM rumah WHERE status = 'Terjual'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function bterjual(){
		$dml = "SELECT * FROM rumah WHERE status = 'Belum Terjual'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function tipe21(){
		$dml = "SELECT * FROM rumah WHERE tipe = '21'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function tipe36(){
		$dml = "SELECT * FROM rumah WHERE tipe = '36'";
		$query = $this->db->query($dml)->result();
		return $query;
	}
	function tipe45(){
		$dml = "SELECT * FROM rumah WHERE tipe = '45'";
		$query = $this->db->query($dml)->result();
		return $query;
	}
	function tipe54(){
		$dml = "SELECT * FROM rumah WHERE tipe = '54'";
		$query = $this->db->query($dml)->result();
		return $query;
	}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

}
 ?>
