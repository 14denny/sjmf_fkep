<?php
class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Kontak SJMF Fakultas Keperawatan"
		);
		$this->ViewMdl->loadView("kontak",$data);
	}
}
