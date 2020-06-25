<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('ViewMdl');
		$data = array(
			"page_title" => "Beranda"
		);
        $this->ViewMdl->loadView("index", $data);
	}

}
