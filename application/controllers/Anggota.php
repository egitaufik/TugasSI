<?php
	/**
	 * 
	 */
	class Anggota extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$user = $this->session->userdata("user");
			if(!isset($user->username)){
				redirect("login");
			}
			$this->load->model("anggota_model","anggota");
			$this->load->library("template");
		}

		public function index()
		{
			$output['anggota'] = $this->anggota->get_anggota();
			// echo json_encode($output);
			$this->template->display("anggota",$output);
		}

		public function tambah_anggota()
		{
			$this->template->display("tambah_data");
		}

		public function add_anggota()
		{
			$nama = $this->input->post("nama");
			$npm = $this->input->post("npm");
			$jurusan = $this->input->post("jurusan");
			$angkatan = $this->input->post("angkatan");
			var_dump($_POST);
			$data = array(
				"Nama"=>$nama,
				"Npm"=>$npm,
				"Jurusan"=>$jurusan,
				"Angkatan"=>$angkatan,
			);

			$hasil = $this->anggota->tambah_anggota($data);
			if ($hasil) {
				$notif = "<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data Anggota Berhasil diSimpan.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}else{
				$notif = "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				Data Anggota Gagal diSimpan.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}
		}

		public function delete_anggota($id)
		{
			$hasil = $this->anggota->delete_anggota(array("npm"=>$id));
			if ($hasil) {
				$notif = "<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data Anggota Berhasil diHapus.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}else{
				$notif = "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				Data Anggota Gagal diHapus.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}
		}

		public function ubah_anggota($npm)
		{
			$where = array("Npm"=>$npm);
			$hasil = $this->anggota->get_anggota($where,true);
			$output['anggota'] = $hasil;
			$this->template->display('ubah_data',$output);
		}

		public function edit_anggota()
		{
			$nama = $this->input->post("nama");
			$npm = $this->input->post("npm");
			$jurusan = $this->input->post("jurusan");
			$angkatan = $this->input->post("angkatan");
			var_dump($_POST);
			$data = array(
				"Nama"=>$nama,
				"Jurusan"=>$jurusan,
				"Angkatan"=>$angkatan,
			);
			$where = array(
				"Npm"=>$npm
			);

			$hasil = $this->anggota->ubah_anggota($data,$where);
			if ($hasil) {
				$notif = "<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data Anggota Berhasil diubah.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}else{
				$notif = "<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				Data Anggota Gagal diubah.</div>";
				$this->session->set_flashdata("notif",$notif);
				redirect("anggota");
			}
		}
	}
?>