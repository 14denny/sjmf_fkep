<?php
class Download extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Dokumen SJMF Fakultas Keperawatan Unsyiah"
		);
		$this->ViewMdl->loadView("download",$data);
	}
}
