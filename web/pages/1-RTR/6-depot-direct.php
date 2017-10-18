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
			    				<img src="../../images/icone-cnesst-icone-fleche-retour.png">
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
			<li class="completed"><a href="#"><i>5</i></a></li>
			<li class="active"><a href="#"><i>6</i><span>Dépôt direct </span></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">6</p>
					<h2>Dépôt direct </h2>
				</div>

				<div class="infobox5 sp-xl">
					<p>Le dépôt direct vous permet de recevoir plus rapidement les sommes versées par la CNESST (indemnités et remboursement de frais).</p>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">

						<div class="box2">
							<h4>Demande d'inscription</h4>
							<div class="text">

								<label class="radiobutton">
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-1-1" data-hide=".os-1" type="radio" name="mode">
										   <i>Inscription au dépôt direct</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-1" type="radio" name="mode">
										   <i>Déjà inscrit au dépôt direct de la CNESST</i>
										</label>
									
								   </div>

								</label>



							</div>
						</div>

						<div class="box2 os-1 os-1-1 hide">
							<h4>Inscription au dépôt direct</h4>
							<div class="text">

								<label class="radiobutton required">
									<i>Comment voulez-vous nous transmettre vos coordonnées bancaires?</i>
								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-2-1" data-hide=".os-2" type="radio" name="mod2">
										   <i>En joignant un spécimen de chèque (Document PDF, image, photo ou autre.)</i>
										</label>

										<label class="radiobutton">
										   <input data-show=".os-2-2" data-hide=".os-2" type="radio" name="mod2">
										   <i>En saisissant vos coordonnées bancaires</i>
										</label>
									
								   </div>

								</label>


								<div class="os-2 os-2-1 hide">

									<div class="control-group">
										<label><span class="rft">*</span> Joindre un spécimen de chèque</label>
										<input type="file" name="montant">
									</div>

								</div>


								<div class="os-2 os-2-2 hide">

									<div class="control-group">
										<label>Coordonnées bancaires</label>
										<p class="clarification">(Les numéros demandés apparaissent au bas d'un chèque.) </p>
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Numéro de transit de la succursale</label>
										<input type="text" name="montant" class="amount" data-characters="5">
										<p class="clarification">5 chiffres</p>
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Numéro de l'institution financière</label>
										<input type="text" name="montant" class="amount" data-characters="3">
										<p class="clarification">3 chiffres</p>
									</div>

									<div class="control-group">
										<label><span class="rft">*</span> Numéro de compte</label>
										<input type="text" name="montant" class="amount" data-characters="12">
										<p class="clarification">12 chiffres au maximum</p>
										<img src="../../images/pages/image-cnesst-void-cheque.png">
									</div>

								</div>


								<div class="control-group">
									<label><span class="rft">*</span> Nom du titulaire du compte bancaire</label>
									<input type="text" name="montant">
								</div>


							</div>
						</div>


						<div class="box2 os-1 os-1-1 hide">
							<h4>Autorisation</h4>
							<div class="text">

								<ul class="bullets1">
									<li>Je confirme avoir vérifié les coordonnées bancaires du compte pour le dépôt direct. </li>
									<li>J'autorise le dépôt des montants d'indemnités ou de remboursements de frais par la CNESST dans ce compte.</li>
								</ul>

								

								<label class="radiobutton">
								   <input type="checkbox" name="mode" value="create">
								   <i>En cochant cette case, <strong>je donne mon consentement.</strong></i>
								</label>

							</div>
						</div>


					</div>	
					
					<div class="btns">
						<a class="btn btn7" href="5-renseignements-calcul-versement.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="6-transmettre.html">Suivant</a>
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