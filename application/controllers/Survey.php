<?php
class Survey extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function kemudahan(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Survey Kemudahan dan Kelengkapan Informasi Web"
		);
		$this->ViewMdl->loadView("survey/survey_kemudahan",$data);
	}

	public function perkuliahan(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Survey Perkuliahan"
		);
		$this->ViewMdl->loadView("survey/survey_perkuliahan",$data);
	}

	public function hasil(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Hasil Survey"
		);
		$this->ViewMdl->loadView("survey/hasil_survey",$data);
	}
}
