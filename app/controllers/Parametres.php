<?php 

/**
* 
*/
class Parametres extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function ajoute_fournitures(){
		if ($this->input->post('save')) {
			if (!empty($this->input->post('classe')) AND !empty($this->input->post('livre_name')) AND
				!empty($this->input->post('auteur_name')) AND !empty($this->input->post('edition_name'))) {

				$classe = trim($this->input->post('classe'));
				$name = trim($this->input->post('livre_name'));
				$auteur = trim($this->input->post('auteur_name'));
				$edition = trim($this->input->post('edition_name'));

				$req = $this->settings->ajoute_fournitures($classe, $name, $auteur, $edition);
					$_SESSION['flash']['success'] = 'Enregistrement reussie.';
					$this->load->view('templates/header');
					$this->load->view('fourniture/ajouter_fourniture');
			} else {
				$_SESSION['flash']['danger'] = 'Veuille remplir tous les champs';
				$this->load->view('templates/header');
				$this->load->view('fourniture/ajouter_fourniture');
			}
		} else {
			$this->load->view('templates/header');
			$this->load->view('fourniture/ajouter_fourniture');
		}
	}

	function suprimer_fourniture(){

	}

	function modifier_fourniture(){

	}

	function lister_fourniture(){
		$this->load->view('templates/header');
		$this->load->view('fourniture/lister_fourniture');
	}
}