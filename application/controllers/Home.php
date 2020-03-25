<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
	private $token;
	private $device_id;
	private $gateway_url_sms_send;

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

		$this->token = "5b18cea86c472a1170a8828b2941bf89";
		$this->device_id = "1563";
		$this->gateway_url_sms_send = "https://smsgateway24.com/getdata/addsms";
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function send_otp_sms()
	{
		$otp = $this->generate_otp();
		$mobile_number = $this->input->post('phone');

		$contact = array(
			'mobile_number' => $mobile_number,
			'verified' => 0,
			'verification_code' => $otp,
		);

		$this->db->insert('contacts', $contact);

		$_SESSION['user_otp'] = $otp;
		$_SESSION['mobile_number'] = $mobile_number;

		$sms_body = "Hello, your verification code is " . $otp . ". This message is sent by Datos Application.";

		$data = array('token' => $this->token, 'sendto' => $mobile_number, 'body' => $sms_body, 'device_id' => $this->device_id);

		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);

		$context = stream_context_create($options);
		$result = file_get_contents($this->gateway_url_sms_send, false, $context);

		if ($result === FALSE) {
			/* insert error handling here */
		}

		#echo json_encode($result);
		redirect(base_url('Home/verify'));
	}

	public function verify()
	{
		$this->load->view("home_verify_otp.php");
	}

	public function verify_otp()
	{
		$user_otp = $this->input->post('otp');

		$user_db_saved_otp = $this->contact_model->get_mobile_number_otp($_SESSION['mobile_number']);

		$contact = array(
			'mobile_number' => $_SESSION['mobile_number'],
			'verified' => 1,
			'verification_code' => $user_db_saved_otp,
		);


		if ($user_otp == $user_db_saved_otp) {
			$this->db->replace("contacts", $contact);

			$latest_data = $this->db->order_by('id', "desc")
				->limit(1)
				->get('data')
				->row();

			$sms_body = "Hello, as of " . $latest_data->date . " we have " . $latest_data->local_confirmed_cases . " confirmed cases, " . $latest_data->local_recovered . " recovered, and " . $latest_data->local_deaths . " deaths in the Philippines. This message is sent by Datos Application.";

			$data = array('token' => $this->token, 'sendto' => $_SESSION['mobile_number'], 'body' => $sms_body, 'device_id' => $this->device_id);

			$options = array(
				'http' => array(
					'header' => "Content-type: application/x-www-form-urlencoded\r\n",
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);

			$context = stream_context_create($options);
			$result = file_get_contents($this->gateway_url_sms_send, false, $context);

			if ($result === FALSE) {
				/* insert error handling here */
			}

			$this->load->view("verified.php");
		} else {
			$this->load->view("invalid.php");
		}
	}

	private function generate_otp(int $length = 4)
	{
		$otp = "";
		$numbers = "0123456789";

		for ($i = 0; $i < $length; $i++) {
			$otp .= $numbers[rand(0, strlen($numbers) - 1)];
		}

		return $otp;
	}
}
