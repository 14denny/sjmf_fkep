<?php
class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Produk SJMF Fakultas Keperawatan"
		);
		$this->ViewMdl->loadView("produk",$data);
	}
}
