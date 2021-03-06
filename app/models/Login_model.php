<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login_model extends CI_Model
{
	function sing_up($code,$nom,$prenom,$sexe,$matiere,$date_naiss,$nif,$adresse,$email,$pseudo,$pass,$phone,$status,$roles,$profession) {
		
			$data = array(
				'matricule' => $code,
				'nom' => $nom,
				'prenom' => $prenom,
				'sexe' => $sexe,
				'matiere' => $matiere,
				'date_naiss' => $date_naiss,
				'cin_ou_nif' => $nif,
				'addresse' => $adresse,
				'email' => $email,
				'pseudo' => $pseudo,
				'mot_de_passe' => $pass,
				'telephone' => $phone,			
				'status_matrimonial' => $status,
				'roles' => $roles,
				'profession' => $profession			
				);
			if ($roles === 'Professeur') {
				$this->db->insert('professeur', $data);
			} else {
				$this->db->insert('personel', $data);
			}
	}
	// dateNomPrenom-id : 2018BF-0001
	function randomCode(){
		$sql = 'SELECT MAX(idpersonel) as id FROM personel';
		// $sql = 'SELECT * FROM personel';
		$req = $this->db->query($sql);
		if ($req->num_rows() > 0) {
			return $req->result_object();
		} else {
			return false;
		}		
	}
}