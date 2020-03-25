<?php

class Contact_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_contacts()
	{
		$query = $this->db->get('contacts');

		return json_encode($query->result_array());
	}

	public function get_mobile_number_otp($mobile_number)
	{
		$this->db->where('mobile_number', $mobile_number);

		$result =  $this->db->get('contacts');

		if ($result->num_rows() == 1) {
			return $result->row(0)->verification_code;
		} else {
			return false;
		}
	}
}
