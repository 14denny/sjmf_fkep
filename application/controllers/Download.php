<?php
class Download extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Download SJMF FKEP"
		);
		$this->ViewMdl->loadView("download",$data);
	}
}
