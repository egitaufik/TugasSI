<?php 
/**
 * 
 */
class logout extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
	}
	public function index()
	{
		$this->session->unset_session("user");
		redirect("login");
	}

}
?>
