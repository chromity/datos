<?php
class Data extends CI_Controller {
	public function get_all_data() {
		$data = $this->data_model->get_data();

		echo $data['data'];
	}

	public function get_combined_data() {
		$data[0] = $this->data_model->get_confirmed_cases();
		$data[1] = $this->data_model->get_recovered();
		$data[2] = $this->data_model->get_deaths();

		echo $data;
	}

	public function get_confirmed_cases() {
		$data['data'] = $this->data_model->get_confirmed_cases();

		echo $data['data'];
	}

	public function get_recovered() {
		$data['data'] = $this->data_model->get_recovered();

		echo $data['data'];
	}

	public function get_deaths() {
		$data['data'] = $this->data_model->get_deaths();

		echo $data['data'];
	}
}

