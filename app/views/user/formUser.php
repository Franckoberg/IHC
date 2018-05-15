<body layout:fragment="content" class="spacer">

	<!-- Menus -->
	
	<div class="container">
		<h1>Enregistre un personnel</h1>

		<div class="row">
			<!-- left column -->
			<form class="form-horizontal" action="<?php echo base_url('login/sing_up');?>" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
				<div class="col-md-3">
					<div class="text-center">
						<img class="img-circle" src="<?php echo base_url('assets/img/male_user-icon.png') ?>"
							width="100" height="100" />
						<h6>Upload une photo ..</h6>

						<input type="file" name="picture" class="form-control" /> 
						<span class="text-danger" errors="*{foto}"> </span>
					</div>
				</div>

				<!-- edit form column -->
				<div class="col-md-9 personal-info">

					<div class="alert alert-info alert-dismissable">
						<a class="panel-close close" data-dismiss="alert">×</a>
						 <i class="fa fa-coffee"></i> <strong>Bonjour </strong> IHC vous souhait la bienvenu
					</div>
					<h3>Saisir les informations</h3>

						<!--C Moi -->
					 <?php if (validation_errors()): ?> 
						 <div class="alert alert-danger">
								<?php echo validation_errors(); ?> 						
						 </div>
					  <?php endif ?>
					<!-- fin MOi -->
				
					<?php if (isset($_SESSION['flash'])): ?>
						<?php foreach ($_SESSION['flash'] as $type => $message):?>
							 <div class="alert alert-<?= $type; ?>">
									<?= $message; ?> 						
							 </div>
						<?php endforeach ?>
						<?php unset($_SESSION['flash']) ?>
					<?php endif ?>

					<!-- nouveau champs -->
					<div class="form-group row">
						<label for="codeUser" class="col-sm-2 col-form-label">Identifiant</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="codeUser" id="codeUser" placeholder="Identifiant" />
						</div>
					</div>
					<div class="form-group row">
						<label for="pseudo" class="col-sm-2 col-form-label">Pseudo</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="nom d'utilisateur" />
						</div>
					</div>
					<div class="form-group row">
						<label for="mot_de_passe" class="col-sm-2 col-form-label">Mot de passe</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe"  placeholder="********" />
						</div>
					</div>
					<div class="form-group row">
						<label for="mot_de_passe_c" class="col-sm-2 col-form-label">Mot de passe de comfirmation</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="mot_de_passe_c" id="mot_de_passe_c"  placeholder="********" />
						</div>
					</div>
					<div class="form-group row disabled">
						<label for="roles" class="col-sm-2 col-form-label">Roles</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="roles" id="roles" placeholder="Matiere" />
						</div>
					</div>
					<div class="form-group row disabled">
						<label for="matiere" class="col-sm-2 col-form-label">Mati&eacute;re</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="matiere" id="matiere" placeholder="Matiere" />
						</div>
					</div>

					<div class="form-group row">
						<label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputNom" id="inputNom" placeholder="Nom" />
							 <span class="text-danger"  errors="*{nom}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputPrenom" id="inputPrenom" placeholder="Prenom" />
							 <span class="text-danger" errors="*{prenom}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="date_naiss" class="col-sm-2 col-form-label">Date de Naissance
						</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="date_naiss" id="date_naiss" placeholder="aa-mm-jj" /> 
							<span class="text-danger" Errors="*{dateNaissance}"> </span>
						</div>
					</div>

					<div class="form-group row"> 
						<label for="inputSexe" class="col-sm-2 col-form-label radio-inline"><strong>Sexe</strong>
						</label>
					    <input id="features1" name="featsexe" type="radio" value="Masculin" />
					    <input name="_features" type="hidden" value="on" />
					    <label  for="features1">Masculin</label>
					 
					    <input id="features2" name="featsexe" type="radio" value="Feminin" />
					    <input name="_features" type="hidden" value="on" />
					    <label for="features2">Feminin</label> 
					</div> &nbsp; &nbsp;    


					<h2>Status Matrimonial</h2>
 
					<div>
					    <input id="features1" name="featstat" type="radio" value="Celibataire" />
					    <input name="_features" type="hidden" value="on" />
					    <label for="features1">Celibataire</label>
					 
					    <input id="features2" name="featstat" type="radio" value="Marie" />
					    <input name="_features" type="hidden" value="on" />
					    <label for="features2">Marie</label>
					 
					    <input id="features3" name="featstat" type="radio" value="Autre" />
					    <input name="_features" type="hidden" value="on" />
					    <label for="features3">Autre</label>
					</div> &nbsp; &nbsp; &nbsp; &nbsp; <br> </br>
					
 
					<div class="form-group row">
						<label for="inputProfession" class="col-sm-2 col-form-label">Profession</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputProfession" id="inputProfession" placeholder="Profession" /> 
							<span class="text-danger" errors="*{profession}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputNif" class="col-sm-2 col-form-label">NIF</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputNif" id="inputNif" placeholder="NIF" />
							<span class="text-danger" errors="*{nif}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputTelephone" class="col-sm-2 col-form-label">Telephone</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputTelephone" id="inputTelephone" placeholder="Telephone" /> 
							<span class="text-danger" errors="*{telephone}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputAdresse" class="col-sm-2 col-form-label">Adresse</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputAdresse" id="inputAdresse" placeholder="Adresse" /> 
							<span class="text-danger" errors="*{adresse}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" />
							 <span class="text-danger" errors="*{email}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<!--<label for="dateEnregistrement" class="col-sm-2 col-form-label">Enregistrement</label> -->
						<div class="col-sm-8">
							<input type="hidden" class="form-control" name="dateEnregistrement" id="dateEnregistrement" placeholder="date d'enregistrement"
								value="*{dateEnregistrement}" />
							<!--  <span class="text-danger" errors="*{signalerS}"> </span> -->
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<button type="submit" class="btn btn-primary" name="save" value="sign_up">	Enregistre </button>
							<span></span> <input type="reset" class="btn btn-default" value="Cancel" />
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>

</body>
</html>