<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("login_model","login");
		$user = $this->session->userdata("user");
		if(isset($user->username)){
			redirect("anggota");
		}
	}

	public function index()
	{
		$this->load->view("login");	
	}

	public function auth()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$data = array("username"=>$username,"password"=>md5($password));
		$hasil = $this->login->auth($data);
		if ($hasil) {
			$this->session->set_userdata("user",$hasil);
			redirect("anggota");
		}else{
			$error = "<div class='text-danger'>Username atau Password Salah</div>";
			$this->session->set_flashdata("error_login",$error);
			redirect("login");
		}
	}
}

 ?>