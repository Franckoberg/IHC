<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('etudiants/formEtudiant');
	}
}
