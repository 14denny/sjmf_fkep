<?php
class Tentang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function visi()
	{
		$this->load->model("ViewMdl");
		$this->load->model("TentangMdl");

		$konten = $this->TentangMdl->getKontenVisiMisi();
		$data = array(
			"page_title" => "Visi, Misi, & Tujuan",
			"konten" => $konten->konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/visi_misi", $data);
	}

	// public function edit_visi_misi()
	// {
	// 	$this->load->model("ViewMdl");
	// 	$this->load->model("TentangMdl");

	// 	$konten = $this->TentangMdl->getKontenVisiMisi();
	// 	$data = array(
	// 		"page_title" => "Visi, Misi, & Tujuan",
	// 		"konten" => $konten->konten == null ? "" : $konten->konten
	// 	);
	// 	$this->ViewMdl->loadView("tentang/edit_visi_misi", $data);
	// }

	public function struktur()
	{
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Struktur Organisasi dan Tupoksi"
		);
		$this->ViewMdl->loadView("tentang/struktur_organisasi", $data);
	}

	public function program()
	{
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Program dan Sasaran"
		);
		$this->ViewMdl->loadView("tentang/program_sasaran", $data);
	}

	public function kegiatan()
	{
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Kegiatan"
		);
		$this->ViewMdl->loadView("tentang/kegiatan", $data);
	}

	public function sk_rektor()
	{
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "SK Rektor"
		);
		$this->ViewMdl->loadView("tentang/sk_rektor", $data);
	}

	public function kebijakan_mutu()
	{
		$this->load->model("ViewMdl");

		$data = array(
			"page_title" => "Kebijakan Mutu"
		);
		$this->ViewMdl->loadView("tentang/kebijakan_mutu", $data);
	}

	///////////////////////// function for submit changes /////////////////////////
	// public function submit_visi()
	// {
	// 	$this->load->model("ViewMdl");
	// 	$this->load->model("TentangMdl");
	// 	$isi = $this->input->post("isi");
	// 	$status = $this->TentangMdl->updateVisiMisi($isi);
	// 	return redirect(base_url("tentang/visi"));
	// }
}
