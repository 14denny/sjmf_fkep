<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserMdl extends CI_Model {

    //belum selesai

    public function doLogout(){
        $this->session->sess_destroy();
    }
    
    public function isLoggedUser()
	{
		return $this->session->userdata('idUser') != "";
    }
}