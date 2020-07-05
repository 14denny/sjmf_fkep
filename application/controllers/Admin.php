<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
	}

	public function index()
	{
		if($this->AdminMdl->isLoggedIn()){
			redirect(base_url());
			exit;
		}

		$this->load->view("admin/admin_login");
	}

	public function login()
	{
		if($this->AdminMdl->isLoggedIn()){
			redirect(base_url());
			exit;
		}

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if($this->AdminMdl->doLogin($username, $password)){
			redirect(base_url());
		} else {
			$this->session->set_flashdata("error",1);
			redirect("admin");
		}

	}

	public function logout(){
		$this->AdminMdl->doLogout();
		redirect(base_url());
	}
}
