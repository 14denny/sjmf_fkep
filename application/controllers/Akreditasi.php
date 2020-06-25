<?php
class Akreditasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function akreditasi(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Akreditasi SJMF FKEP"
		);
		$this->ViewMdl->loadView("akreditasi",$data);
	}
}

