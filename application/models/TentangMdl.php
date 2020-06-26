<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TentangMdl extends CI_Model
{

    public function getKontenVisiMisi()
    {
        $this->db->select("konten");
        $this->db->from("visi_misi");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function updateVisiMisi($konten)
    {
        return $this->db->insert("visi_misi", array("konten" => $konten));
    }
}
