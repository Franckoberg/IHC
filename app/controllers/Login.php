<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// protected $CI;

	function __construct(){
		parent::__construct();
	}

    function index()
	{
		$this->CI =& get_instance();
		$this->load->view('templates/header');
		$this->load->view('login');	
	}

	function sing_in(){
		$this->load->view('templates/header');
		$this->load->view('login');		
	}

	function sing_up(){
		if (trim($this->input->post('save'))) {
			if (!empty(trim($this->input->post('pseudo'))) AND !empty(trim($this->input->post('mot_de_passe')))
				AND !empty(trim($this->input->post('mot_de_passe_c'))) AND !empty(trim($this->input->post('matiere')))
				AND !empty(trim($this->input->post('inputNom'))) AND !empty(trim($this->input->post('inputPrenom')))
				AND !empty(trim($this->input->post('date_naiss'))) AND !empty(trim($this->input->post('featsexe')))
				AND !empty(trim($this->input->post('featstat'))) AND !empty(trim($this->input->post('inputProfession'))) 
				AND !empty(trim($this->input->post('inputNif'))) AND !empty(trim($this->input->post('inputTelephone')))
				AND !empty(trim($this->input->post('inputAdresse'))) AND !empty(trim($this->input->post('inputEmail')))
				AND !empty(trim($this->input->post('roles'))) ) {

				$pseudo = trim($this->input->post('pseudo')); $pass = trim($this->input->post('mot_de_passe'));
				$pass_c = trim($this->input->post('mot_de_passe_c')); $matiere = trim($this->input->post('matiere'));
				$nom = trim($this->input->post('inputNom')); $prenom = trim($this->input->post('inputPrenom'));
				$date_naiss = trim($this->input->post('date_naiss')); $sexe = trim($this->input->post('featsexe'));
				$status = trim($this->input->post('featstat')); $profession = trim($this->input->post('inputProfession'));
				$nif = trim($this->input->post('inputNif')); $phone = trim($this->input->post('inputTelephone'));
				$adresse = trim($this->input->post('inputAdresse')); $email = trim($this->input->post('inputEmail'));
				$roles = trim($this->input->post('roles'));

				if ($pass !== $pass_c) {
					$this->load->view('templates/header');
					$_SESSION['flash']['danger'] = 'Les deux mot de passe doit etre identique';
					$this->load->view('user/formUser');
				} else {
					$result = $this->login->sing_up($nom,$prenom,$sexe,$matiere,$date_naiss,$nif,$adresse,$email,$pseudo,$pass,$phone,$status,$roles,$profession);
					// if ($result) {
						$this->load->view('templates/header');
						$_SESSION['flash']['info'] = 'Enregistrement reussie';
						$this->load->view('user/formUser');
					// } else {
					// 	$this->load->view('templates/header');
					// 	$_SESSION['flash']['danger'] = 'Une erreur ce produit lors de l\'enregistrement reesaye !';
					// 	$this->load->view('user/formUser');
					// }
				}
			} else {
				$this->load->view('templates/header');
				$_SESSION['flash']['danger'] = 'Remplir tous les champs svp!';
				$this->load->view('user/formUser');
			}
		} else {
			$this->load->view('templates/header');
			$this->load->view('user/formUser');
		}
	}

	function randomCode(){
		
	}
}
