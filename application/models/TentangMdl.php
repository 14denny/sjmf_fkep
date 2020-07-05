<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TentangMdl extends CI_Model
{

    //////////// Visi Misi ////////////
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


    //////////// Struktur Organisasi dan Tupokasi ////////////
    public function getKontenStruktur()
    {
        $this->db->select("konten");
        $this->db->from("struktur");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function updateStruktur($konten)
    {
        return $this->db->insert("struktur", array("konten" => $konten));
    }

    //////////// Program dan Sasaran ////////////
    public function getKontenProgram()
    {
        $this->db->select("konten");
        $this->db->from("program");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function updateProgram($konten)
    {
        return $this->db->insert("program", array("konten" => $konten));
    }

    //////////// Kegiatan ////////////
    public function getKontenKegiatan()
    {
        $this->db->select("konten");
        $this->db->from("kegiatan");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function updateKegiatan($konten)
    {
        return $this->db->insert("kegiatan", array("konten" => $konten));
    }
}
