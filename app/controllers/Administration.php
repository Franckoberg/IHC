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

	function listUser(){
		$result = $this->admin->listUser();
		if ($result) {
			foreach ($result as $key ) {
				$data = array (
					'matricule' 	   => $key->matricule,
					'pseudo'		   => $key->pseudo,
					'sexe'			   => $key->sexe,
					'addresse'	       => $key->addresse,
					'email' 	       => $key->email,
					'matiere' 	       => $key->matiere
				);
			}
			$this->load->view('templates/header');
			$this->load->view('user/listUser', $data);
		} else {
			echo 'Professeurs not found ';
			$this->load->view('templates/header');
			$this->load->view('user/listUser');
		}
	}

	function notification(){

		$this->load->view('templates/header');
		$this->load->view('login');
		
	}


}