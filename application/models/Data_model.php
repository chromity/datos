<?php
	class Data_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_data() {
			$this->db->select('date, local_confirmed_cases, local_deaths, local_recovered');
			$query = $this->db->get('data');
			
			return json_encode($query->result_array());
		}
	}
