<?php
class Pengurus extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index()
	{
		$this->load->model("ViewMdl");
		$this->load->model("PengurusMdl");

		$all_pengurus = $this->PengurusMdl->getAllPengurus();
		$data = array(
			"page_title" => "Pengurus SJMF Fakultas Keperawatan",
			"all_pengurus" => $all_pengurus
		);
		$this->ViewMdl->loadView("pengurus", $data);
	}

	public function edit()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("pengurus"));
		}
		$this->load->model("ViewMdl");
		$this->load->model("PengurusMdl");

		$all_pengurus = $this->PengurusMdl->getAllPengurus();
		$data = array(
			"page_title" => "Pengurus SJMF Fakultas Keperawatan",
			"all_pengurus" => $all_pengurus
		);
		$this->ViewMdl->loadView("edit_pengurus", $data);
	}

	public function submit()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("pengurus"));
		}
		$this->load->model("PengurusMdl");
		$this->load->model("ViewMdl");

		$nama = $this->input->post("nama[]");
		$jabatan = $this->input->post("jabatan[]");

		$data = [];
		for ($i = 0; $i < sizeof($nama); $i++) {
			array_push($data, array(
				"nama" => $nama[$i],
				"jabatan" => $jabatan[$i]
			));
		}

		$status = $this->PengurusMdl->input_pengurus($data);
		return redirect(base_url("pengurus"));
	}
}
