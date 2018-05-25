<?php

/**
* 
*/
class Parametres_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_lister(){
		$sql = 'SELECT * FROM classe';
		$req = $this->db->query($sql);

		if ($req->num_rows() ) {
			return $req->result_object();
		} else {
			return false;
		}
	}

	function ajoute_fournitures($classe, $name, $auteur, $edition){
		$data = array(
			'nom'		=> $name,
			'classe'	=> $classe,
			'auteurs'	=> $auteur,
			'edition'	=> $edition
		);
		$this->db->insert('fourniture_classiques', $data);
	}
}