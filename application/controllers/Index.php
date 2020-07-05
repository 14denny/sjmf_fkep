<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index()
	{
		$this->load->model('BerandaMdl');
		$this->load->model('ViewMdl');

		$slider = $this->BerandaMdl->getSliderImages();
		$konten = $this->BerandaMdl->getKonten();

		$data = array(
			"page_title" => "Beranda",
			"slider_images" => $slider,
			"konten" => $konten->konten
		);

		// echo "<pre>".print_r($slider,true)."</pre>";
		return $this->ViewMdl->loadView("index", $data);
	}

	public function edit_beranda()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url());
		}
		$this->load->model('BerandaMdl');
		$this->load->model('ViewMdl');

		$konten = $this->BerandaMdl->getKonten();

		$data = array(
			"page_title" => "Edit Isi Beranda",
			"konten" => $konten == null ? "" : $konten->konten
		);

		return $this->ViewMdl->loadView("edit_beranda", $data);
	}

	///////////////////////// function for submit changes /////////////////////////
	public function submit_beranda()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url());
		}
		$this->load->model("ViewMdl");
		$this->load->model("BerandaMdl");
		$isi = $this->input->post("isi");
		$this->BerandaMdl->updateBeranda($isi);
		return redirect(base_url());
	}
}
