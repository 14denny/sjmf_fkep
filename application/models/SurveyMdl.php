<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SurveyMdl extends CI_Model
{

    public function getDataByIP($ip)
    {
        $this->db->select("*");
        $this->db->from("survey_kemudahan");
        $this->db->where("ip", $ip);
        $qr = $this->db->get()->row();
        return $qr;
    }

    public function submitKemudahan($data)
    {
        return $this->db->insert('survey_kemudahan', $data);
    }

    public function getSurveyKemudahanData(){
        $this->db->select("kemudahan as nilai, count(kemudahan) as total");
        $this->db->group_by("kemudahan");
        $this->db->from('survey_kemudahan');
        $kemudahan = $this->db->get()->result();

        $this->db->select("informatif as nilai, count(informatif) as total");
        $this->db->group_by("informatif");
        $this->db->from('survey_kemudahan');
        $informatif = $this->db->get()->result();

        $this->db->select("count(*) as total");
        $this->db->from("survey_kemudahan");
        $count = $this->db->get()->row()->total;
        
        $data = array(
            'kemudahan' => $kemudahan,
            'informatif' => $informatif,
            'count' => $count
        );

        return $data;
    }
}
