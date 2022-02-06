<?php 
/**
 * 
 */
class Pasien_model extends CI_model
{
	
	public function getAllPasien()
	{
		return $this->db->get('tbl_pasien')->result_array();
	}

	public function getAllPasienRinap()
	{
		$tja='RAWAT INAP';
		$sqlAllPasienRinap = "SELECT * FROM tbl_pendaftaran WHERE tujuanasesmen='$tja'"; 
		return $this->db->query($sqlAllPasienRinap)->result_array();
	}

	
}