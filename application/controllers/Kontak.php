<?php
class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Kontak SJMF FKEP"
		);
		$this->ViewMdl->loadView("kontak",$data);
	}
}
