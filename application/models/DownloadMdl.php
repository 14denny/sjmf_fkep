<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DownloadMdl extends CI_Model
{

    public function getAllFiles()
    {
        return $this->db->query("SELECT downloads.*, date_format(downloads.updated_at, '%d %M %Y pukul %H:%i') as tanggal_update, d3.id as id_file FROM downloads 
                                JOIN (SELECT id, id_download 
                                    FROM download_files d1
                                    WHERE id=(SELECT MAX(d2.id) 
                                                FROM download_files d2 
                                                WHERE d1.id_download=d2.id_download)
                                    ORDER BY id_download) AS d3 
                                    WHERE downloads.id=d3.id_download")->result();
    }

    public function getFile($id_file)
    {
        $this->db->select("downloads.id, nama, location");
        $this->db->from("download_files");
        $this->db->join("downloads", "download_files.id_download = downloads.id");
        $this->db->where("download_files.id", $id_file);
        return $this->db->get()->row();
    }

    public function getDownloadData($id_file)
    {
        return $this->db->query("SELECT downloads.id, nama, kategori, location 
                                FROM downloads 
                                JOIN download_files 
                                ON downloads.id=download_files.id_download 
                                WHERE downloads.id=$id_file AND 
                                download_files.id IN 
                                    (SELECT MAX(download_files.id) 
                                    FROM download_files 
                                    WHERE id_download=$id_file)")->row();
    }

    public function update_total_download($id_download)
    {
        $this->db->set("total_downloads", "total_downloads + 1", false);
        $this->db->where("id", $id_download);
        $this->db->update("downloads");
    }

    public function update_download($data)
    {
        $filedata = $this->getDownloadData($data["id"]);

        $data_changed = FALSE;
        if ($filedata->nama != $data["nama"]) {
            $data_changed = TRUE;
        }
        if ($filedata->kategori != $data["kategori"]) {
            $data_changed = TRUE;
        }

        if ($data_changed || isset($data["location"])) {
            $this->db->set('nama', $data['nama']);
            $this->db->set('kategori', $data['kategori']);
            $this->db->set('updated_at', "now()", FALSE);
            $this->db->where('id', $data["id"]);
            $this->db->update('downloads');
        }

        if ($data["location"]) {
            $data_file = array(
                'id_download' => $data["id"],
                'location' => $data['location']
            );
            $this->db->insert('download_files', $data_file);
        }
    }

    public function insert_download($data)
    {
        $new_data = array(
            'nama' => $data["nama"],
            'kategori' => $data["kategori"]
        );

        $status = $this->db->insert('downloads', $new_data);

        if ($status) {
            $id = $this->db->insert_id();

            $new_data = array(
                'id_download' => $id,
                'location' => $data["location"]
            );

            $status = $this->db->insert('download_files', $new_data);

            if (!$status) {
                //delete from downloads table
                $this->db->table("downloads");
                $this->db->where("id", $id);
                $this->db->delete();
                return false;
            }
        } else {
            return false;
        }

        return true;
    }

    public function delete_download($id_download)
    {
        //delete from downloads table
        $this->db->where("id", $id_download);
        $this->db->delete("downloads");

        //delete from download_files table
        $this->db->where("id_download", $id_download);
        $this->db->delete("download_files");

        return true;
    }
}
