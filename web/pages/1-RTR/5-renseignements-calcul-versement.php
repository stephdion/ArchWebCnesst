<?php include('../../header.php'); ?>

	<header class="container header-v1">
		<div class="row no-gutters">
			<div class="col-auto">
				<figure class="logo">
					<img src="../../images/logo.png">
				</figure>
			</div>
		    <div class="col align-self-end">
		    	<nav class="top-menu">
		    		<ul>
		    			<li>
			    			<a href="#">
			    				<img src="../../images/icone-cnesst-icone-connexion.png">
			    				<p>Retour à Mon espace travailleur</p>
			    			</a>
		    			</li>
		    			<li>
			    			<a href="#">
			    				<img src="../../images/icone-cnesst-icone-connexion.png">
			    				<p>Me déconnecter</p>
			    			</a>
		    			</li>
		    		</ul>
		    	</nav>
		    </div>
		</div>
		<div class="no-menu">
			<h1>Réclamation du travailleur</h1>
		</div>
	</header>

	<section class="container">

		<ul class="nav nav-wizard">
			<li class="completed"><a href="#"><i>1</i></a></li>
			<li class="completed"><a href="#"><i>2</i></a></li>
			<li class="completed"><a href="#"><i>3</i></a></li>
			<li class="completed"><a href="#"><i>4</i></a></li>
			<li class="active"><a href="#"><i>5</i><span>Renseignements nécessaires</span></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">5</p>
					<h2>Renseignements nécessaires au calcul et au versement de l'indemnité de remplacement du revenu</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Statut d'emploi</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Lors de l'accident de travail ou de la maladie professionnelle, étiez-vous un employé salarié?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-1-1" data-hide=".os-1" type="radio" name="mode">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-show=".os-1-2" data-hide=".os-1" type="radio" name="mode">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>



								<label class="hide os-1 os-1-1 radiobutton required">
								   <i>Quel était votre statut d'emploi?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>Travailleur de la construction</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>À l'emploi du gouvernement du Québec ou du Canada</i>
										</label>
									
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>À l'emploi d'un service des incendies ou pompier volontaire</i>
										</label>
									
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>Travailleur incarcéré </i>
										</label>
									
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>Camelot</i>
										</label>
									
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>À l'emploi d'une entreprise à juridiction fédérale</i>
										   <p class="clarification">(Banque, aviation, maritime, ferroviaire.) </p>
										</label>
									
										<label class="radiobutton">
										   <input type="radio" name="mode2">
										   <i>Autre</i>
										</label>
									

								   </div>

								</label>



								<label class="hide os-1 os-1-2 radiobutton required">
								   <i>Quel était votre statut d'emploi?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode3">
										   <i>Travailleur autonome</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode3">
										   <i>Propriétaire, dirigeant, membre du conseil d'administration</i>
										</label>
									
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode3">
										   <i>Bénévole</i>
										</label>
									
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode3">
										   <i>Domestique</i>
										</label>
									
									
										<label class="radiobutton">
										   <input data-show=".os-4-1" data-hide=".os-4" type="radio" name="mode3">
										   <i>Autre (Ex. : étudiant à temps plein.)</i>
										</label>
									

										<div class="control-group os-4-1 os-4 hide">
											<label><span class="rft">*</span> Précisez </label>
											<input type="text" value="">
										</div>
								   </div>

								</label>

							</div>
						</div>



						<div class="box2">
							<h4>Situation familiale déclarée ​​​​​​​selon les lois sur l'impôt</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Situation familiale</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-2-1" data-hide=".os-2" type="radio" name="mode4">
										   <i>Avec conjoint</i>

											<label class="radiobutton inline hide os-2 os-2-1">
											   <i><span class="rft">*</span> Votre conjoint est-il à votre charge?</i>

											   <div class="radiobuttons">
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode5">
													   <i>Oui</i>
													</label>
												   	
													<label class="radiobutton">
													   <input type="radio" name="mode5">
													   <i>Non</i>
													</label>

												</div>
											</label>

										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" type="radio" name="mode4">
										   <i>Monoparentale</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-2" type="radio" name="mode4">
										   <i>Célibataire</i>
										</label>
									
								   </div>

								</label>


								<div class="control-group">
									<label><span class="rft">*</span> Nombre de personnes mineures (-18 ans) à votre charge</label>
									<input type="text" class="amount" name="montant">
								</div>


								<div class="control-group">
									<label><span class="rft">*</span> Autre que votre conjoint, nombre de personnes majeures (18 ans et + à votre charge)</label>
									<input type="text" class="amount" name="montant">
								</div>


							</div>
						</div>



						<div class="box2">
							<h4>Revenu annuel</h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Quel est votre revenu annuel brut?</label>
									<p class="clarification">(Vous devez y ajouter les montants tels que les bonis, les primes, les pourboires, les commissions, les heures supplémentaires, etc.)</p>
									<input type="text" class="amount" name="montant"> $
								</div>

								<div class="control-group">
									<label>Décrivez quels types de montant vous avez ajoutés à votre revenu annuel</label>
									<textarea></textarea>
								</div>


								<label class="radiobutton required inline">
								   <i>Est-ce que votre employeur continue à vous payer après les ​​​​​​​14 premiers jours d'incapacité à travailler?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode5">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode5">
										   <i>Non</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode5">
										   <i>Je ne sais pas</i>
										</label>
									
								   </div>

								</label>


							</div>
						</div>

						<div class="box2">
							<h4>Autre emploi</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Occupez-vous plus d'un emploi?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-3-1" data-hide=".os-3" type="radio" name="mod6">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mod6">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>



								<label class="radiobutton required inline hide os-3 os-3-1">
								   <i>Est-ce que votre accident de travail ou votre maladie professionnelle vous empêche d'occuper vos ​​​​​​​autres emplois?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mod7">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input  type="radio" name="mod7">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>


							</div>
						</div>


					</div>	

					<div class="btns">
						<a class="btn btn7" href="4-renseignements.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="6-depot-direct.html">Suivant</a>
					</div>
				</div>

				<div class="btns">
					<a class="btn btn4a" href="#"><i class="icon-save"></i> Enregistrer en brouillon</a>
					<a class="btn btn4a" href="#"><i class="icon-delete"></i> Supprimer le brouillon</a>
				</div>

			</div>
		</div>

	</section>

	<footer class="container footer">
		<div class="row no-gutters">
			<div class="col">
				<ul class="footer-menu">
					<li><a href="#">Accessibilit&eacute;</a></li>
					<li><a href="#">Politique de confidentialit&eacute;</a></li>
					<li><a href="#">Plan du site</a></li>
				</ul>
			</div>
			<div class="col right">
				<span>Renseignements g&eacute;n&eacute;raux : </span>
				<span><a href="tel:18448380808">1 844 838-0808</a></span>
				<img src="../../images/logo_footer.png">
			</div>
		</div>
		<div class="row no-gutters bottom">
			&copy; CNESST, 2017
		</div>

	</footer>



<?php include('../../footer.php'); ?>
									   	



<?php include('../../footer.php'); ?>