<?php
class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function produk(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Produk SJMF FKEP"
		);
		$this->ViewMdl->loadView("produk",$data);
	}
}
