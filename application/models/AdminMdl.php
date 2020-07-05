<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMdl extends CI_Model {

    public function doLogout(){
        $this->session->sess_destroy();
    }
    
    public function isLoggedIn()
	{
		return $this->session->userdata('nama') != "";
    }
	
    public function setLoginUser($userdata){
        // Set session ke user yang login sekarang
        $this->session->set_userdata('nama', $userdata->nama);
    }

    public function getAdminName(){
        return $this->session->userdata('nama');
    }

    public function doLogin($username, $password){
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->where("username", $username);
        $userData = $this->db->get()->row();

        if($userData == null){
            return false;
        } else {
            if(password_verify($password, $userData->password)){
                $this->setLoginUser($userData);
                return true;
            } else {
                return false;
            }
        }
    }
	
}