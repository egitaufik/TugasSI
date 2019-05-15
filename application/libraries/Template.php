<?php 

/**
 * 
 */
class Template
{
	protected $ci;
	function __construct()
	{
		$this->ci =& get_instance();
	}

	public function display($view=null,$data=null)
	{
		$output['content'] = $this->ci->load->view($view,$data,true);
		$this->ci->load->view("template",$output);
	}
}

 ?>