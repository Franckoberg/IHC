<!--  <div class="container"> -->		
	 <main role="main" class="container">
	      <div class="jumbotron">
	        <h1> Institution henry christophe</h1>
	        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
	        <a class="btn btn-lg btn-primary" href="#" role="button">En savoir plus sur IHC &raquo;</a>
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

				<h1>Authentification</h1> 

				<form action="<?php echo base_url('login/sign_in');?>" class='form-horizontal' method="post" accept-charset="utf-8">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Pseudo</label>
				    <div class="col-sm-10">
				      <input type="text" name="pseudo" value="" class="form-control" id="pseudo" placeholder="pseudo" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="mot_de_passe" value=""  class="form-control" id="mot_de_passe" placeholder="Mot de passe"  />
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="Sign_in" class="btn btn-default">Sign in</button>
				      <p>
					<a href="<?php echo base_url('account/pass_fotgot'); ?>">Mot de passe oublie</a>
					<a href="<?php echo base_url('login/sing_up'); ?>">Nouveau compte</a>
				</p>
				    </div>
				  </div>
				</form>		
	</main>
</div>