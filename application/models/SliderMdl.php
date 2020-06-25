<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SliderMdl extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getImages()
    {
        $this->db->select("*");
        $this->db->from("slider_images");
        return $this->db->get()->result();
    }
}
