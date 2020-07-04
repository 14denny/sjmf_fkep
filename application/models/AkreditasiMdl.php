<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AkreditasiMdl extends CI_Model
{

    public function getCurrentAkreditasi(){
        $this->db->select("*");
        $this->db->from("akreditasi");
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function getAkreditasi($id_akreditasi){
        $qr = $this->db->query("SELECT akreditasi_prodi.*, nilai_akreditasi.nilai as akreditasi from akreditasi_prodi join (select max(id) as id from akreditasi) as akreditasi on akreditasi.id=akreditasi_prodi.id_akreditasi join nilai_akreditasi on nilai_akreditasi.id=akreditasi_prodi.id_nilai");
        return $qr->result();
    }

    public function insertAkreditasi($data){
        $this->db->insert('akreditasi', $data);
        return $this->db->insert_id();
    }

    public function insertAkreditasiProdi($data){
        return $this->db->insert_batch('akreditasi_prodi', $data);
    }

}
