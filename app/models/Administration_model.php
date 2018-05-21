<?php  

/**
* 
*/
class Administration_model extends CI_Model
{
	function listUser(){
		$sql = 'SELECT * FROM professeur';

		$req = $this->db->query($sql);

		if ($req->num_rows() === 1) {
			return $req->result_object();
		} else {
			return false;
		}
	}


	// function notification(){
	// //	if ($this->input->post('view')) {
	// 		$output = '';
	// 		$sql = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 5 ";
			
	// 		$req = mysqli_query($sql, $conn);
	// 		if (mysqli_num_rows($req) > 0) {
	// 			while ($rows = mysqli_fetch_array($req) ) {				
	// 			    $output .= '
	// 					<li>
	// 						<a href="#">
	// 							<strong>'.$rows['comment_subject'].'</strong><br />
	// 							<small><em>'.$rows['comment_text'].'</em></small>
	// 						</a>
	// 					</li>
	// 				';
	// 			}
	// 		} else {
	// 			return $output .= ' 
	// 				<li><a href="#" class = "text-bold text-italic"> No notification found </a></li>
	// 			';
	// 		}

	// 		$query = "SELECT * FROM comments WHERE comment_status = 0";
	// 		$requete = $this->db->query($query);
	// 		$count = rowCount($requete);
	// 		var_dump($count);
	// 		if ($requete->num_rows() > 0 ) {
	// 			$data = array(
	// 				'notification' 		  => $output, 
	// 				'unseen_notification' => $count 
	// 			);
	// 			echo json_decode($data);
	// 		}
			
	// //	}
	// }

	// function insert($comment_subject,$comment_text){

	// 	$data = array(
	// 		'comment_id' => '',
	// 		'comment_subject' =>$comment_subject , 
	// 		'comment_text' =>$comment_text
	// 	);
	// 	$this->db->insert('comments',$data);
	// }

	function notification(){
		// if ($this->input->post('view')) {
		// 	$output = '';
		// 	$sql = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 5 ";
		// 	$req = $this->db->query($sql);
		// 	if ($req->num_rows() > 0 ) {
		// 		foreach ($req as $rows) {
		// 			$output .= '
		// 				<li>
		// 					<a href="#">
		// 						<strong>'.$rows->comment_sujet.'</strong><br />
		// 						<small><em>'.$rows->comment_text.'</em></small>
		// 					</a>
		// 				</li>
		// 			';
		// 		}
		// 	} else {
		// 		$output .= ' 
		// 			<li><a href="#" class = "text-bold text-italic"> No notification found </a></li>
		// 		';
		// 	}

		// 	$query = "SELECT * FROM comments WHERE comment_status = 0";
		// 	$requete = $this->db->query($query);
		// 	$count->rowCount();
		// 	if ($requete->num_rows() === 1 ) {
		// 		foreach ($requete as $key) {
		// 			$data = array(
		// 				'notification' 		  => $output, 
		// 				'unseen_notification' => $count 
		// 			);
		// 		}
		// 	}
		// 	echo json_decode($data);
		// }
	}

	function insert(){
		if($this->input->post('subject')){
			$comments_sujet = $this->input->post('comment_sujet');
			$comments_text  = $this->input->post('comment_text');

			$sql = 'INSERT INTO comments (?,?)';
			$req = $this->db->query($sql, array($comment_sujet, $comment_text));


		}
	}

}