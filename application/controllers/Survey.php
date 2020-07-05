<?php
class Survey extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ViewMdl");
		$this->load->model("SurveyMdl");
	}


	//////////////////// Survey Kemudahan dan Kelengkapan Informasi Web ////////////////////
	public function kemudahan()
	{

		$ip = $this->input->ip_address();
		$data_survey = $this->SurveyMdl->getDataByIP($ip);

		$status_survey = $data_survey == null ? false : true;

		$data = array(
			"page_title" => "Survey Kemudahan dan Kelengkapan Informasi Web",
			"ip" => $ip,
			"status_survey" => $status_survey
		);

		$this->ViewMdl->loadView("survey/survey_kemudahan", $data);
	}

	public function submit_kemudahan()
	{

		$kemudahan = $this->input->post('kemudahan');
		$informatif = $this->input->post('informatif');
		$ip = $this->input->ip_address();

		$data = array(
			'ip' => $ip,
			'kemudahan' => $kemudahan,
			'informatif' => $informatif
		);

		$this->SurveyMdl->submitKemudahan($data);

		return redirect(base_url('survey/kemudahan'));
	}

	public function perkuliahan()
	{

		$data = array(
			"page_title" => "Survey Perkuliahan"
		);
		$this->ViewMdl->loadView("survey/survey_perkuliahan", $data);
	}


	//////////////////// Hasil Survey ////////////////////
	public function hasil()
	{

		$data = array(
			"page_title" => "Hasil Survey"
		);
		$this->ViewMdl->loadView("survey/hasil_survey", $data);
	}

	public function get_kemudahan(){
		header('Content-Type: application/json');
		$is_ajax = $this->input->is_ajax_request();
		if (!$is_ajax) {
            exit('No direct script access allowed');
		}
		
		$data = $this->SurveyMdl->getSurveyKemudahanData();
		echo json_encode($data);
		exit;
	}
}
