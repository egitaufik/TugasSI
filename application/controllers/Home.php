<?php 
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$user = $this->session->userdata("user");
			if(!isset($user->username)){
				redirect("login");
			}
			$this->load->library("template");
			
		}

		public function index()
		{
			$this->template->display("index",'');
		}
	}
 ?>