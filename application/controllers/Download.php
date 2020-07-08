<?php
class Download extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("AdminMdl");
		$this->load->model("ViewMdl");
		$this->load->model("DownloadMdl");
	}

	public function index()
	{
		$files = $this->DownloadMdl->getAllFiles();
		$data = array(
			"page_title" => "Dokumen SJMF Fakultas Keperawatan Unsyiah",
			"files" => $files
		);
		$this->ViewMdl->loadView("download", $data);
	}

	public function download()
	{
		$id_file = $this->input->get("file");

		//load helper download
		$this->load->helper('download');

		//get file data
		$file = $this->DownloadMdl->getFile($id_file);
		$file_ext = pathinfo($file->location, PATHINFO_EXTENSION);

		//increase total download value
		$this->DownloadMdl->update_total_download($file->id);

		$file_content = file_get_contents($file->location);
		if ($file_content) {
			//start downloading file
			force_download($file->nama . "." . $file_ext, file_get_contents($file->location));
		} else {
			$this->session->set_flashdata("error", "Tidak dapat membaca file!");
			redirect(base_url("download"));
		}
	}

	public function get_file_data()
	{
		header('Content-Type: application/json');

		$is_ajax = $this->input->is_ajax_request();
		if (!$is_ajax || !$this->AdminMdl->isLoggedIn()) {
			exit('No direct script access allowed');
		}

		$id_file = $this->input->post("id");
		$file = $this->DownloadMdl->getDownloadData($id_file);
		echo json_encode($file);
		exit;
	}

	public function submit()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("download"));
		}

		$id_file = $this->input->post("id_file");
		$nama = $this->input->post("nama");
		$kategori = $this->input->post("kategori");

		$file_changed = FALSE; //flag the file changes
		$upload_path = "uploads/dokumen/";
		$new_name = "";

		if ($_FILES["dokumen"]["error"] == 0) { //file inserted

			$file_changed = TRUE; //change the flag

			$filename = $_FILES["dokumen"]["name"];
			$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
			$new_name = time() . "." . $ext;

			$config = array(
				'upload_path' => "./$upload_path",
				'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png|txt|csv',
				'file_name' => $new_name,
				'overwrite' => FALSE,
				'max_size' => "20480"
			);

			$this->load->library('upload', $config); //load upload library

			if (!$this->upload->do_upload('dokumen')) {
				$this->session->set_flashdata("error", $this->upload->display_errors("", ""));
				redirect(base_url("download"));
			}
		}

		$data = array(
			'id' => $id_file,
			'nama' => $nama,
			'kategori' => $kategori
		);

		if ($file_changed) {
			$data['location'] = $upload_path . $new_name;
		}

		$this->DownloadMdl->update_download($data);

		$this->session->set_flashdata("success", "Berhasil meng-update data dokumen");
		redirect(base_url("download"));
	}

	public function add()
	{
		if (!$this->AdminMdl->isLoggedIn()) {
			return redirect(base_url("download"));
		}

		if ($_FILES["dokumen"]["error"] != 0) { //file error
			$this->session->set_flashdata("error", "Terjadi kesalahan saat mengunggah dokumen. Coba lagi!");
			redirect(base_url("download"));
			exit;
		}

		$nama = $this->input->post("nama");
		$kategori = $this->input->post("kategori");
		$upload_path = "uploads/dokumen/";
		$filename = $_FILES["dokumen"]["name"];
		$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
		$new_name = time() . "." . $ext;

		$config = array(
			'upload_path' => "./$upload_path",
			'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png|txt|csv',
			'file_name' => $new_name,
			'overwrite' => FALSE,
			'max_size' => "20480"
		);

		$this->load->library('upload', $config); //load upload library

		if (!$this->upload->do_upload('dokumen')) {
			$this->session->set_flashdata("error", $this->upload->display_errors("", ""));
			redirect(base_url("download"));
		}

		$data = array(
			'nama' => $nama,
			'kategori' => $kategori,
			'location' => $upload_path . $new_name
		);

		$status = $this->DownloadMdl->insert_download($data);

		if ($status) {
			$this->session->set_flashdata("success", "Berhasil meng-update data dokumen");
			redirect(base_url("download"));
		} else {
			$this->session->set_flashdata("error", "Terjadi kesalahan saat menambahkan dokumen.");
			redirect(base_url("download"));
		}
	}

	public function delete_download()
	{
		header('Content-Type: application/json');

		$is_ajax = $this->input->is_ajax_request();
		if (!$is_ajax || !$this->AdminMdl->isLoggedIn()) {
			exit('No direct script access allowed');
		}

		$id_download = $this->input->post("id");

		$status = $this->DownloadMdl->delete_download($id_download);

		$data = ['status' => $status];

		echo json_encode($data);
		exit;
	}
}
