<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org"
	xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
	layout:decorator="template">
<head>
<meta charset="UTF-8" />
<title>La liste des Etudiants</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"
	th:href="@{/css/bootstrap.min.css}" />
<link rel="stylesheet" type="text/css" href="static/css/style.css"
	th:href="@{/css/style.css}" />

</head>
<body layout:fragment="content">

	<!-- Menus -->


	<div class="container"></div>   
	<div class="container spacer">
		<h2 class="sub-header">Liste des etudiants</h2>
		<!--  <span class="text-danger" th:errors="*{signalerS}"> </span> -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Identifiant</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Sexe</th>
					<th>Niveau</th>
					<th>Annee academique</th>
					<th>Email</th>
				</tr>
			</thead>

			<tbody>

				<tr th:each="e:${pageEtudiants.content}">
					<td th:text="${e.codeEtudiant}"></td>
					<td th:text="${e.nom}"></td>
					<td th:text="${e.prenom}"></td>
					<td th:text="${e.sexe}"></td>
					<td th:text="${e.classe}"></td>
					<td th:text="${e.anneeAcademique}"></td>
					<td th:text="${e.email}"></td>
					<td><img class="img-circle" th:src="@{getFoto(id=${e.id})}"
						width="50" height="50" /></td>
					<td><a th:href="@{profil(id=${e.id})}"> <img
							th:src="@{/img/male_user-icon.png}" width="20" height="20" /></a></td>
					<td><a th:href="@{edit(id=${e.id})}"> <img
							th:src="@{/img/Edit-icon.png}" width="30" height="30" /></a></td>
					<td><a th:href="@{supprimer(id=${e.id})}"> <img
							th:src="@{/img/delete-icon.png}" width="20" height="20" /></a></td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="container">
		<ul class="nav nav-pills">
			<li th:each="p:${pages}" th:class="${p==pageCourante}?active:''">
				<a th:text="${p}" th:href="@{list(page=${p}, motCle=${motCle})}"></a>
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