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
		$marquee = $this->BerandaMdl->getMarquee();

		$data = array(
			"page_title" => "Beranda",
			"slider_images" => $slider,
			"konten" => $konten->konten,
			"marquee"=>$marquee->isi
		);
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


	public function submit_marquee()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url());
		}
		$this->load->model("ViewMdl");
		$this->load->model("BerandaMdl");
		$isi = $this->input->post("isi");
		$this->BerandaMdl->updateMarquee($isi);
		return redirect(base_url());
	}

	
	///////////////////////// edit slider /////////////////////////
	public function edit_slider()
	{
		$this->load->model('ViewMdl');

		$data = array(
			"page_title" => "Beranda"
		);
		$this->ViewMdl->loadView("edit_slider", $data);
	}
}
