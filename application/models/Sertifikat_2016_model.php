<?php 

/**
* 
*/
class Sertifikat_2016_model extends CI_Model
{

	/*

	*	Model for execute Sertifikat NTB

	*/
	public function get_display_ntb(){
		$this->db->where('wilayah','ntb');
		$query_ntb = $this->db->get('sert_2016');
		return $query_ntb->result();

	}
	
	public function get_sertifikat_ntb_info($sertifikat_ntb_id){

			$this->db->where('id_sert',$sertifikat_ntb_id);
			$query = $this->db->get('sert_2016');

			return $query->row();



	}
	
	public function create_sertifikat_ntb($data){

		$query_insert = $this->db->insert('sert_2016',$data);
		return $query_insert;
	}

	public function update_ntb($sertifikat_ntb_id,$data){

			$this->db->where('id_sert',$sertifikat_ntb_id);
			$this->db->update('sert_2016',$data);
			return true;
	}



	public function delete_ntb($sertifikat_ntb_id){

		$this->db->where('id_sert',$sertifikat_ntb_id);
		$this->db->delete('sert_2016');
	}
	/* end model ntb */

















}