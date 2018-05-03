<!-- Menus -->
	<div class="container">
		<h1 th:text="#{titre}">Titre</h1>

		<div class="row">
			<!-- left column -->
			<form class="form-horizontal" role="form" th:action="@{saveEtudiant}"
				method="post" th:object="${etudiant}" enctype="multipart/form-data">
				<div class="col-md-3">
					<div class="text-center">
						<img class="img-circle" src="assets/img/male_user-icon.png"
							width="100" height="100" />
						<h6>Upload une photo ..</h6>

						<input type="file" name="picture" class="form-control" /> <span
							class="text-danger" th:errors="*{foto}"> </span>
					</div>
				</div>


				<!-- edit form column -->
				<div class="col-md-9 personal-info">

					<div class="alert alert-info alert-dismissable">
						<a class="panel-close close" data-dismiss="alert">×</a> <i
							class="fa fa-coffee"></i> This is an <strong>.alert</strong>. Use
						this to show important messages to the user.
					</div>
					<h3 th:text="#{sous_titre}">SouS_titre</h3> 

					<!-- nouveau champs -->
					<div class="form-group row disabled">
						<label for="Code-ins" class="col-sm-2 col-form-label">Code
							Etudiant</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="Code-ins"
								th:field="*{codeEtudiant}" placeholder="20170901-00001" />
						</div>
					</div>
					<div class="form-group row">
						<label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputNom"
								placeholder="Nom" th:field="*{nom}" /> <span
								class="text-danger" th:Errors="*{nom}"> </span> 
						</div>
					</div>

					<div class="form-group row">
						<label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputPrenom"
								placeholder="Prenom" th:field="*{prenom}" /> 
								<span class="text-danger" th:Errors="*{prenom}"> </span>
						</div>
					</div>

				
						<div class="form-group row"> 
					<label for="inputSexe" class="col-sm-2 col-form-label radio-inline"><strong>Sexe</strong></label>
					    <input id="features1" name="features" type="radio" th:field="*{sexe}"  value="Masculin" />
					    <input name="_features" type="hidden" value="on" />
					    <label  for="features1">Masculin</label>
					 
					    <input id="features2" name="features" type="radio" th:field="*{sexe}" value="Feminin" />
					    <input name="_features" type="hidden" value="on" />
					    <label for="features2">Feminin</label> 
					    <span class="text-danger" th:Errors="*{sexe}"> </span>
					</div> &nbsp; &nbsp;    


					<div class="form-group row">
						<label for="inputDateNaissance" class="col-sm-2 col-form-label">Date
							de Naissance</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputDateNaissance"
								placeholder="aa-MM-jj" th:field="*{dateNaissance}" /> <span
								class="text-danger" th:Errors="*{dateNaissance}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputLieuNaissance" class="col-sm-2 col-form-label">Lieu
							de Naissance</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputLieuNaissance"
								placeholder="Lieu de Naissance" th:field="*{lieuNaissance}" />
							<span class="text-danger" th:Errors="*{lieuNaissance}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputAdresse" class="col-sm-2 col-form-label">Adresse</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputAdresse"
								placeholder="Adresse" th:field="*{adresse}" /> <span
								class="text-danger" th:Errors="*{adresse}"> </span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputTelephone" class="col-sm-2 col-form-label">Telephone</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputTelephone"
								placeholder="Telephone" th:field="*{telephone}" /> <span
								class="text-danger" th:Errors="*{telephone}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputClasse" class="col-sm-2 col-form-label">Classe</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputClasse"
								placeholder="Classe" th:field="*{classe}" /> <span
								class="text-danger" th:Errors="*{classe}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputAnneeAcademique" class="col-sm-2 col-form-label">Annee
							academique</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputAnneeAcademique"
								placeholder="aaaa-MM-jj" th:field="*{anneeAcademique}" /> <span
								class="text-danger" th:Errors="*{anneeAcademique}"> </span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputEmail"
								placeholder="Email" th:field="*{email}" /> <span
								class="text-danger" th:Errors="*{email}"> </span>
						</div>
					</div>
					<h2>Personne responsable</h2>
					<div>
						<input id="features1" name="features" type="radio"
							th:field="*{nomp}" value="Pere " /> <input name="_features"
							type="hidden" value="on" /> <label for="features1">Pere</label>

						<input id="features2" name="features" type="radio"
							th:field="*{nomp}" value="Mere " /> <input name="_features"
							type="hidden" value="on" /> <label for="features2">Mere</label>

						<input id="features3" name="features" type="radio"
							th:field="*{nomp}" value="Autre " /> <input name="_features"
							type="hidden" value="on" /> <label for="features3">Autre</label>
							<span class="text-danger" th:Errors="*{nomp}"> </span>
					</div>
					&nbsp; &nbsp; &nbsp; &nbsp; <br> </br>



					<div class="form-group row">
						<label for="inputNomp" class="col-sm-2 col-form-label">Nom</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputNomp"
								placeholder="Nom" th:field="*{nomp}" /> <span
								class="text-danger" th:Errors="*{nomp}"> </span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputTelephone" class="col-sm-2 col-form-label">Telephone</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputTelephone"
								placeholder="Telephone" th:field="*{telephonep}" /> <span
								class="text-danger" th:Errors="*{telephonep}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputAdresse" class="col-sm-2 col-form-label">Adresse</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputAdresse"
								placeholder="Adresse" th:field="*{adressep}" /> <span
								class="text-danger" th:Errors="*{adressep}"> </span>
						</div>
					</div>


					<h1>Education</h1>
					<h4>Dernier Etablisement frequente</h4>
					<div class="form-group row">
						<label for="outputDate" class="col-sm-2 col-form-label">Annees</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="outputDate"
								placeholder="Annees" th:field="*{anne}" /> <span
								class="text-danger" th:Errors="*{anne}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="ecolef" class="col-sm-2 col-form-label">Etablissement</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ecolef"
								placeholder="Nom de l'etablissement" th:field="*{etablissement}" />
							<span class="text-danger" th:Errors="*{etablissement}"> </span>
						</div>
					</div>




					<h3>Important : Clauses disciplinaires</h3>
					<ol>
						<li>L'étudiant se doit de respecter les membres du corps
							enseignant, du décanat et du personnel administratif. Tout acte
							d’irrespect peut faire l’objet du renvoi définitif.</li>
						<li>Le college x est une institution à confession évangélique
							mettant en application les principes moraux de la Bible. En
							conséquence il est demandé à l'étudiant d'être toujours décemment
							vêtu. Le port de vêtements décolletés, de tenues fantaisistes, de
							deux boucles d’oreilles (casquette, maillots, bermudas,
							débardeurs) est formellement interdit à l’intérieur de
							l’établissement. Il est interdit aux étudiants de sexe masculin
							de porter de boucles d'oreilles, de cheveux longs, tressés,
							permanentés ou repassés au sein de l’établissement. Tout
							contrevenant à cet article est passible de sanctions
							disciplinaires allant jusqu'au renvoi définitif.</li>
						<li>Il est formellement interdit aux étudiants de faire de la
							violence au sein de l’établissement quel que soit le mobile des
							faits.</li>
						<li>La Direction de l’Etablissement n’accepte aucune
							négociation de remboursement une fois les frais et la scolarité
							ont été acquittés. La mensualité se paie entre le 1 er et le 10
							de chaque mois qui n’est pas inclue dans les frais d’obligation à
							la rentrée.</li>
					</ol>

					<div class="form-group row">
						<label for="SignatureE" class="col-sm-2 col-form-label">Signature
							du postulant</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="SignatureE"
								placeholder="Signature" th:field="*{signalerE}" /> <span
								class="text-danger" th:Errors="*{signalerE}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<label for="EnregistreS" class="col-sm-2 col-form-label">Enregistre
							par</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="Name"
								placeholder="Signature" th:field="*{signalerS}" /> <span
								class="text-danger" th:Errors="*{signalerS}"> </span>
						</div>
					</div>

					<div class="form-group row">
						<!-- 						<label for="dateEnregistrement" class="col-sm-2 col-form-label">Enregistrement</label> -->
						<div class="col-sm-8">
							<input type="hidden" class="form-control" id="dateEnregistrement"
								placeholder="date d'enregistrement"
								th:value="*{dateEnregistrement}" />
							<!--  <span class="text-danger" th:errors="*{signalerS}"> </span> -->
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<button class="btn btn-primary" type="submit">Save</button>
							<span></span> <input type="reset" class="btn btn-default"
								value="Cancel" />
						</div>
					</div>

				</div>
			</form>
		</div>
