<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login_model extends CI_Model
{
	function sing_up($nom,$prenom,$sexe,$matiere,$date_naiss,$nif,$adresse,$email,$pseudo,$pass,$phone,$status,$roles,$profession) {
		
			// $sql = "SELECT MAX(idpersonel) FROM personel ";
		$sql = 'SELECT MAX(idpersonel) FROM personel';
			$req = $this->db->query($sql);

			$code = "";
			$no 	= substr($nom, 0, 1);
			$preno = substr($prenom, 0, 1);
			// formatage de date 
			$now  = time();
			$date = substr(unix_to_human($now), 0,4);
			if($req->num_rows() === 1) {
				foreach ($req as $key) {
						var_dump($key);
					// $user_id = $this->db->insert_id('personel');
					echo $user_id = $key->idpersonel;
					$code .= $date.$no.$preno ;
					$code1 = array($code, $user_id);
					$userCode = implode("-", $code1);

			$data = array(
				'matricule' => $userCode,
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
			}
		// }
	}
	// dateNomPrenom-id : 2018BF-0001
	function randomCode(){
		// $code = "";
		// $nom 	= substr(trim($this->input->post('nom')), 0, 1);
		// $prenom = substr(trim($this->input->post('prenom')), 0, 1);
		// // formatage de date 
		// $now  = time();
		// $date = substr(unix_to_human($now), 0,4);
		
		// $user_id = ($this->db->insert_id() + 1);

		// $code .= $date.$nom.$prenom ;
		// $code1 = array($code, $user_id);

		// return $userCode = implode("-", $code1);
	}
}