<body layout:fragment="content" class="spacer">

	<!-- Menus -->
	
	<div class="container ">
		<h1>Enregistre les fournitures a utiliser par classe</h1>

		<div class="row">
			<!-- left column -->
			<form class="form-horizontal" action="<?php echo base_url('Parametres/ajoute_fournitures');?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

				<!-- edit form column -->
				<div class="col-xs-12  personal-info">
					<div class="alert alert-info alert-dismissable">
							<a class="panel-close close" data-dismiss="alert">×</a>
							 <i class="fa fa-coffee"></i> <strong>Bonjour </strong> IHC vous souhait la bienvenu
						</div>

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

					<div class="form-group row">
						<label  for="pseudo" class="col-sm-2 col-form-label"></label>
						<div class="col-sm-8">
							<?php $req = $this->settings->get_lister(); ?>
						    <select class="form-control" id="classe" name="classe">
						    	<option> Classe </option>
						    	<?php foreach ($req as $rows) :?>
						      <option value="<?php echo $rows->nom; ?>" ><?php echo $rows->nom; ?></option>
						       <?php endforeach?>
						    </select>
						</div>
					</div>

					<div class="form-group row">
						<label for="livre_name" class="col-sm-2 col-form-label">Nom du livre</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="livre_name" id="livre_name" placeholder="Mathematique" />
						</div>
					</div>
					<div class="form-group row">
						<label for="auteur_name" class="col-sm-2 col-form-label">Auteur</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="auteur_name" id="auteur_name" placeholder="Westin Emmanuel" />
						</div>
					</div>
					<div class="form-group row">
						<label for="edition_name" class="col-sm-2 col-form-label">Edition</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="edition_name" id="edition_name" placeholder="F.I.C" />
						</div>
					</div>

					<div class="form-group row">
						<p><a href="#"> + Plus de champs</a></p>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<button type="submit" class="btn btn-primary" name="save" value="ajoute_fournitures">	Enregistre </button>
							<span></span> <input type="reset" class="btn btn-default" value="Cancel" />
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>

</body>
</html>