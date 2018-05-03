<?php
/**
* 
*/
class C_pdf extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf_report');
	}
	
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('c_pdf');
	}
}

?>