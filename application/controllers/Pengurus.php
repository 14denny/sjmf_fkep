<?php
class Pengurus extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function pengurus(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Pengurus SJMF FKEP"
		);
		$this->ViewMdl->loadView("pengurus",$data);
	}
}
