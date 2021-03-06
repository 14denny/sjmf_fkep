<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerandaMdl extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSliderImages()
    {
        $this->db->select("*");
        $this->db->from("slider_images");
        return $this->db->get()->result();
    }

    public function getKonten()
    {
        $this->db->select("konten");
        $this->db->from("beranda");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }



    public function updateBeranda($konten)
    {
        return $this->db->insert("beranda", array("konten" => $konten));
    }
}
