<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('SliderMdl');
		$this->load->model('ViewMdl');

		$slider = $this->SliderMdl->getImages();
		
		$data = array(
			"page_title" => "Beranda",
			"slider_images" => $slider
		);

		// echo "<pre>".print_r($slider,true)."</pre>";
        return $this->ViewMdl->loadView("index", $data);
	}

}
