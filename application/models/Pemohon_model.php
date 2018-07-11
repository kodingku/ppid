<?php 

/**
* 
*/
class Pemohon_model extends CI_Model
{

	/*

	*	Model for execute Pemohon

	*/
	
	

	
	public function create_pemohon($data){

		$query_insert = $this->db->insert('tm_ppid',$data);
		return $query_insert;
	}

	public function update_pemohon($id_pemohon,$data){

			$this->db->where('id_pemohon',$id_pemohon);
			$this->db->update('tm_ppid',$data);
			return true;
	}



	public function delete_pemohon($id_pemohon){

		$this->db->where('id_pemohon',$id_pemohon);
		$this->db->delete('tm_ppid');
	}
	/* end model pemohon */

















}