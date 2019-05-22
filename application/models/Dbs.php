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

	function buat_kode()   {    
	  $this->db->select('RIGHT(rumah.no_rumah,2) as kode', FALSE);
	  $this->db->order_by('no_rumah','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('rumah');      //cek dulu apakah  sudah ada no di tabel.    
	  if($query->num_rows() <> 0){       
	   //jika no ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
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


}	 
 ?>