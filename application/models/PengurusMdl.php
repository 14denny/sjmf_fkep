<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengurusMdl extends CI_Model
{

    public function getAllPengurus()
    {
        $this->db->select("*");
        $this->db->from("pengurus");
        return $this->db->get()->result();
    }

    public function input_pengurus($data)
    {
        $old_data = $this->db->get("pengurus")->result();

        $this->db->empty_table("pengurus");

        $status = $this->db->insert_batch("pengurus", $data);
        if ($status > 0) {
            return $status;
        } else {
            $status = $this->db->insert_batch("pengurus", $old_data);
            return -1;
        }
    }
}
