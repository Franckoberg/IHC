<body layout:fragment="content">

	<!-- Menus -->

	<main role="main" class="container">
	      <div class="jumbotron">
	        <h1> Institution henry christophe</h1>
	      </div>
	</main>


<!-- 	<div class="container"></div>  -->  
	<div class="container  ">
		<h2 class="sub-header">Liste des professeurs</h2>
		<!--  <span class="text-danger" errors="*{signalerS}"> </span> -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Identifiant</th>
					<th>Pseudo</th>
					<th>Sexe</th>
					<th>Addresse</th>
					<th>Email</th>
					<th>Matiere</th>
				</tr>
			</thead>

			<tbody>

				<tr>
					<td><?php echo $code_professeur; ?></td>
					<td><?php echo $pseudo;  ?></td>
					<td><?php echo $sexe; ?></td>
					<td><?php echo $addresse;  ?></td>
					<td><?php echo $email; ?></td>
					<td><?php // mecho $matiere ?></td>
					<td><?php // echo  ?></td>
					<td><img class="img-circle" src="<?php echo base_url('assets/avatar/profil-icon.jpg'); ?>" width="40" height="40" /></td>
					<td><a href="profil#"> <img src="<?php echo base_url('assets/img/male_user-icon.png'); ?>" width="30" height="30" /></a></td>
					<td><a href="edit#"> <img src="<?php echo base_url('assets/img/Edit-icon.png'); ?>" width="30" height="30" /></a></td>
					<td><a href="supprimer#"> <img src="<?php echo base_url('assets/img/delete-icon.png'); ?>" width="30" height="30" /></a></td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="container">
		<ul class="nav nav-pills">
			<li each="p:${pages}" class="${p==pageCourante}?active:''">
				<a text="${p}" href="list(page=${p}, motCle=${motCle})}"></a>
			</li>
		</ul>
	</div>

	<!--   
  <div class="container" >
	<nav aria-label="...">
	  <ul class="pagination pagination-sm">
	    <li class="page-item disabled">
	      <a class="page-link" href="#" tabindex="-1">Previous</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item active"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>
  </div>
 -->

</body>
</html>