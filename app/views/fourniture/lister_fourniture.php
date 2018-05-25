
	<!-- Menus -->

	<main role="main" class="container">
	      <div class="jumbotron">
	        <h1> Institution henry christophe</h1>
	      </div>
	</main>

<!-- 	<div class="container"></div>  -->  
	<div class="container  ">
		<h2 class="sub-header">Liste des fournitures pour classe de 8eme AF</h2>
		<!--  <span class="text-danger" errors="*{signalerS}"> </span> -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Titre du livre</th>
					<th>Nom de l'auteur</th>
					<th>Edition du livre</th>
					<th>Date de publication</th>
				</tr>
			</thead>

			<tbody>

				<tr>
					<td><?php echo 'Mathematique'; //echo $matricule; ?></td>
					<td><?php echo 'Westin Emmanuel'; //echo $pseudo;  ?></td>
					<td><?php echo 'F.I.C'; //echo $sexe; ?></td>
					<td><?php echo 'Juillet 2008'; //echo $sexe; ?></td>
					
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


</body>
</html>