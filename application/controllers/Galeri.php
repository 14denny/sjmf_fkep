<?php
class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Galeri Foto SJMF Fakultas Keperawatan"
		);
		$this->ViewMdl->loadView("galeri_foto",$data);
	}

	public function lihat_foto(){
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Galeri Foto SJMF Fakultas Keperawatan"
		);
		$this->ViewMdl->loadView("lihat_foto",$data);
	}
}

