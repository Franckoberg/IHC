<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>schoolApp</title>

<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/font-awesome.min.css'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />

<!-- -->
</head>
<body>
<div class="spacer container">
	<nav class="container navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" inline="text">SchoolApp Salut user  </a>
		</div>

		<div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0px;">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a data-toggle="dropdown" href="#">Menu<b class="caret"></b></a>
					<ul class="dropdown-menu jqueryFadeIn">
						<li><a href="#"><span class="fa fa-bar-chart-o"></span> Tableau de bord</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>	Pr&eacute;sentation</a></li>
						<li class="dropdown-submenu"><a data-toggle="dropdown" tabindex="-1" href="#">
						<span class="fa fa-cogs"></span> Param&eacute;trage</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Administration</li>
								<li>
									<a href="#">
										<span class="fa fa-university" aria-hidden="true">					
										</span> Lister personnel 
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-plus-square" aria-hidden="true"> 
										</span> Cr&eacute;er personnel
									</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Editer l'interface</li>
								<li>
									<a href="#">
										<span class="fa fa-plus-square" aria-hidden="true"> 
										</span> Ajouter un titre 
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-plus-square" aria-hidden="true"> 
										</span> Ajouter un Ect ..
									</a>
								</li>
							</ul></li>
					</ul>
				</li>

				<li class="dropdown"><a data-toggle="dropdown" href="#">Action<b class="caret"></b></a>
					<ul class="dropdown-menu jqueryFadeIn">
						<li class="dropdown-header">Etudiant</li>
						<li><a href=""><span class="fa fa-university" aria-hidden="true"></span> Liste des eleves</a></li>
						<li><a href=""><span class="fa fa-university" aria-hidden="true"></span> Liste des inscrits</a></li>
						<li><a href=""> <span class="fa fa-plus-square" aria-hidden="true"></span> Inscription
						</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Professeur</li>
						<li><a href="<?php echo base_url('administration/listUser'); ?>"><span class="fa fa-university" aria-hidden="true"></span> Liste des professeurs</a></li>
						<li><a href=""><span class="fa fa-plus-square"
								aria-hidden="true"></span> Cr&eacute;er un professeur</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Cours</li>
						<li><a href="#"><span class="fa fa-university"
								aria-hidden="true"></span> Liste des cours</a></li>
						<li><a href="#"><span class="fa fa-plus-square"
								aria-hidden="true"></span> Cr&eacute;er un cours</a></li>

						<li class="divider"></li>
						<li class="dropdown-header">Se deconnecter</li>
						<li><a href="#"><span class="fa fa-university"
								aria-hidden="true"></span> deconnecter </a></li>
					</ul></li>

				<li class="dropdown"><a data-toggle="dropdown" href="#">Palmares<b
						class="caret"></b></a>
					<ul class="dropdown-menu jqueryFadeIn">
						<li class="dropdown-header">Palmares des eleve</li>
						<li><a href="#"><span class="fa fa-university"
								aria-hidden="true"></span> Lister le Palmares</a></li>
						<li><a href="#"><span class="fa fa-plus-square"
								aria-hidden="true"></span> Ajouter les notes</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Bulletin</li>
						<li><a href="#"><span class="fa fa-bank blue"></span>
								Imprimer bulletin</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="label label-pill label-danger count"></span>
					Notification</a>
					<ul class="dropdown-menu"></ul>				
				</li>

			</ul>
			<!-- 	
					<form class="navbar-form pull-right">
						<input type="text" style="wid150px" class="input-sm form-control" placeholder="Recherche">
						<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> </button>
					</form> -->

			<form class="navbar-form navbar-right" action=""
				method="get">
				<input type="text" name="motCle" value=""
					class="form-control" placeholder="Search..." />
			</form>
		</div> 
	</nav>

	<script src="<?php echo base_url('assets/js/jquery.min-2.1.1.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script>
		$(function() {
			// Affichage du sous menu en douceur
			jQuery('ul.nav li.dropdown').hover(
					function() {
						jQuery(this).find('.jqueryFadeIn').stop(true, true)
								.delay(200).fadeIn();
					},
					function() {
						jQuery(this).find('.jqueryFadeIn').stop(true, true)
								.delay(200).fadeOut();
					});

		});
	</script>


	<!-- <script src="<?php // echo base_url('assets/js/dist/jquery.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			window.notifications = window.webkitNotifications || window.mozNotifications || window.notifications;
			if(window.notifications.checkPermission() == 0) {
				$.get('notification', function(result) {
					if (result > 0) {
						var notification = window.notifications.createNotification('assets/avatar/pro.png','Nouveau message ', 'Vous avez'+result+'nouveau msg non-lus');
						notification.show();
					}
				});
			} else {
				window.notifications.requestPermission();
			}
		});
	</script> -->

	<script type="text/javascript">
		$(document).ready(function(){
			function load_notification_action(view = ''){
				$.ajax({
					url: "<?php echo base_url(); ?>",
					method: "POST",
					data: {view:view},
					dataType: "json",
					success: function(data){
						$('.dropdown-menu').html(data.notification);
						if (data.unseen_notification > 0) {
							$('.count').html(data.unseen_notification);
						}
					}
				})
			}

			load_notification_action();
			
			$('#comment_form').on('submit', function(event){
				event.preventDefault();
				if ( $('#subject').val() != '' && $('#comment').val() != '') {
					var form_data = $(this).serialize();
					$.ajax({
						url: "<?php echo base_url('/insert'); ?>",
						method: "POST",
						data: form_data,
						success: function(data){
							$('#comment_form')[0]reset();
							load_notification_action();
						}
					});
				} else {
					alert('Information requis');
				}
			});

			$(document).on('click','.dropdown-toggle', function() {
				$('count').html('');
				load_notification_action('Msg');
			})

			setInterval(function(){
				load_notification_action();
			}, 5000);
		});
	</script>
</div>