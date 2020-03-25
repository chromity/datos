<?php
	class Contacts extends CI_Controller {
		public function index() {
			$data['contacts'] = $this->contact_model->get_contacts();
		}
	}
