<?php  

/**
* 
*/
class Administration extends CI_Controller
{
	
	function index(){
		$this->load->view('templates/header');
		$this->load->view('admin/administration');
	}	
}
?>