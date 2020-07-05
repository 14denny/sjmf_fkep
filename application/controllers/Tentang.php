<?php
class Tentang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ViewMdl");
		$this->load->model("TentangMdl");
		$this->load->model("AdminMdl");
	}


	///////////////// Visi Misi /////////////////
	public function visi()
	{
		$konten = $this->TentangMdl->getKontenVisiMisi();
		$data = array(
			"page_title" => "Visi, Misi, & Tujuan",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/visi_misi", $data);
	}

	public function edit_visi_misi()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/visi"));
		}
		$konten = $this->TentangMdl->getKontenVisiMisi();
		$data = array(
			"page_title" => "Visi, Misi, & Tujuan",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/edit_visi_misi", $data);
	}

	public function submit_visi()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/visi"));
		}
		$isi = $this->input->post("isi");
		$status = $this->TentangMdl->updateVisiMisi($isi);
		return redirect(base_url("tentang/visi"));
	}



	///////////////// Struktur Organisasi dan Tupokasi /////////////////
	public function struktur()
	{
		$konten = $this->TentangMdl->getKontenStruktur();

		$data = array(
			"page_title" => "Struktur Organisasi dan Tupoksi",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/struktur_organisasi", $data);
	}

	public function edit_struktur()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/struktur"));
		}
		$konten = $this->TentangMdl->getKontenStruktur();
		$data = array(
			"page_title" => "Struktur Organisasi dan Tupoksi",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/edit_struktur", $data);
	}

	public function submit_struktur()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/struktur"));
		}
		$isi = $this->input->post("isi");
		$status = $this->TentangMdl->updateStruktur($isi);
		return redirect(base_url("tentang/struktur"));
	}




	///////////////// Program dan Sasaran /////////////////
	public function program()
	{
		$konten = $this->TentangMdl->getKontenProgram();
		$data = array(
			"page_title" => "Program dan Sasaran",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/program_sasaran", $data);
	}

	public function edit_program()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/program"));
		}
		$konten = $this->TentangMdl->getKontenProgram();
		$data = array(
			"page_title" => "Program dan Sasaran",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/edit_program", $data);
	}

	public function submit_program()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/program"));
		}
		$isi = $this->input->post("isi");
		$status = $this->TentangMdl->updateProgram($isi);
		return redirect(base_url("tentang/program"));
	}




	///////////////// Kegiatan /////////////////
	public function kegiatan()
	{
		$konten = $this->TentangMdl->getKontenKegiatan();

		$data = array(
			"page_title" => "Kegiatan",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/kegiatan", $data);
	}

	public function edit_kegiatan()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/kegiatan"));
		}
		$konten = $this->TentangMdl->getKontenKegiatan();
		$data = array(
			"page_title" => "Kegiatan",
			"konten" => $konten == null ? "" : $konten->konten
		);
		$this->ViewMdl->loadView("tentang/edit_kegiatan", $data);
	}

	public function submit_kegiatan()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("tentang/kegiatan"));
		}
		$isi = $this->input->post("isi");
		$status = $this->TentangMdl->updateKegiatan($isi);
		return redirect(base_url("tentang/kegiatan"));
	}

	public function sk_rektor()
	{
		$data = array(
			"page_title" => "SK Rektor"
		);
		$this->ViewMdl->loadView("tentang/sk_rektor", $data);
	}

	public function kebijakan_mutu()
	{
		$data = array(
			"page_title" => "Kebijakan Mutu"
		);
		$this->ViewMdl->loadView("tentang/kebijakan_mutu", $data);
	}
}
