<?php
class Akreditasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("ViewMdl");
		$this->load->model("AkreditasiMdl");

		$akreditasi = $this->AkreditasiMdl->getCurrentAkreditasi();

		$akreditasi->tanggal = date("d F Y", strtotime($akreditasi->tanggal));

		$data_akreditasi = $this->AkreditasiMdl->getAkreditasi($akreditasi->id);

		$data = array(
			"page_title" => "Akreditasi SJMF Fakultas Keperawatan",
			"akreditasi" => $akreditasi,
			"data_akreditasi" => $data_akreditasi
		);
		// echo "<pre>".print_r($data,true)."</pre>";
		$this->ViewMdl->loadView("akreditasi", $data);
	}

	public function edit()
	{
		$this->load->model("ViewMdl");
		$this->load->model("AkreditasiMdl");

		$akreditasi = $this->AkreditasiMdl->getCurrentAkreditasi();

		$data_akreditasi = $this->AkreditasiMdl->getAkreditasi($akreditasi->id);

		$data = array(
			"page_title" => "Akreditasi SJMF Fakultas Keperawatan",
			"akreditasi" => $akreditasi,
			"data_akreditasi" => $data_akreditasi
		);

		$this->ViewMdl->loadView("edit_akreditasi", $data);
	}

	public function submit()
	{
		$this->load->model("ViewMdl");
		$this->load->model("AkreditasiMdl");

		$tanggal = $this->input->post("tanggal");
		$ket = $this->input->post("ket");
		$prodi = $this->input->post("prodi[]");
		$jenjang = $this->input->post("jenjang[]");
		$akreditas = $this->input->post("akreditasi[]");
		$hingga = $this->input->post("hingga[]");

		$data_akreditasi = array(
			'tanggal' => $tanggal,
			'ket' => $ket
		);

		$status = $this->AkreditasiMdl->insertAkreditasi($data_akreditasi);

		if ($status > 0) { //berhasil

			//susun data
			$data = [];
			for ($i = 0; $i < sizeof($prodi); $i++) {
				array_push($data, array(
					'id_akreditasi' => $status,
					'prodi' => $prodi[$i],
					'jenjang' => $jenjang[$i],
					'id_nilai' => $akreditas[$i],
					'hingga' => $hingga[$i]
				));
			}

			$status = $this->AkreditasiMdl->insertAkreditasiProdi($data);

			if ($status > 0) {
				redirect(base_url('akreditasi'));
			} else {
				echo "gagal";
			}
		} else {
			echo "gagal";
		}
	}
}
