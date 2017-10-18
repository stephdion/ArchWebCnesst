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
			<li class="active"><a href="#"><i>3</i><span>Renseignements ​sur l'événement</span></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">3</p>
					<h2>Renseignements ​sur l'événement</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Lieu de l'événement</h4>

							<div class="text">

								<label class="radiobutton required">
								   <i>Indiquez le lieu de l'événement</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show="#option-1" data-hide=".os-1" type="radio" name="mode">
										   <i>Au Québec</i>
										</label>

										<label class="radiobutton">
										   <input data-show="#option-2" data-hide=".os-1" type="radio" name="mode">
										   <i>Hors du Québec, mais au Canada</i>
										</label>

										<label class="radiobutton">
										   <input data-show="#option-3" data-hide=".os-1" type="radio" name="mode">
										   <i>Hors du Canada</i>
										</label>
										
								   </div>
								</label>



								<div id="option-1" class="os-1 hide">


									<label class="radiobutton required">
									   <i>Précisez le lieu de l'événement</i>

									   <div class="radiobuttons">
										   	
											<label class="radiobutton">
											   <input type="radio" name="mode">
											   <i>Lieu de travail habituel</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="mode">
											   <i>Ailleurs dans l'établissement (Stationnement, cafétéria, etc.)</i>
											</label>

											<label class="radiobutton">
											   <input type="radio" name="mode">
											   <i>À l'extérieur du lieu de travail ​​​​​​​(Sur la route, chez un client, etc.)</i>
											</label>
											
									   </div>
									</label>

								</div>

								<div id="option-2" class="os-1 hide">


									<div class="control-group">
										<label><span class="rft">*</span> Indiquez la province ou le territoire du Canada </label>
										<input type="text" name="montant">
									</div>

								</div>

								<div id="option-3" class="os-1 hide">


									<div class="control-group">
										<label><span class="rft">*</span> Indiquez le pays </label>
										<input type="text" name="montant">
									</div>

								</div>


							</div>


						</div>

						<div class="box2">
							<h4>Description de l'événement</h4>

							<div class="text">

								<div class="control-group">
									<label>Votre employeur a décrit comment s'est produit l'accident ​​​​​​​ou la maladie professionnelle</label>
									<p class="clarification">(Ex. : les opérations effectuées, les équipements utilisés, les mouvements et les gestes exécutés, les parties du corps touchées, etc.)</p>
									<textarea></textarea>
								</div>

								<label class="radiobutton required inline">
								   <i>Votre version est-elle différente de celle décrite par votre employeur?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode2" data-show="#option-4">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode2" data-hide="#option-4">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>


								<div id="option-4" class="box2 hide">
									<div class="control-group">
										<label>Décrivez, en vos propres mots, votre version de l'accident ou la maladie professionnelle</label>
										<textarea data-characters="3000"></textarea>
										<p class="clarification">Maximum de 3000 caractères</p>
									</div>
								</div>

							</div>
						</div>


						<div class="box2">
							<h4>Orthèse ou prothèse</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Réclamez-vous pour une orthèse ou une prothèse endommagée lors de l'accident?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input type="radio" name="mode3" data-show="#option-5">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input type="radio" name="mode3" data-hide="#option-5">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>


								<div id="option-5" class="box2 hide">
									<p class="note"><strong>À noter:</strong>Les frais pour orthèse ou prothèse ne doivent pas être remboursés par un régime d'assurance de l'entreprise.</p>
								</div>

							</div>
						</div>

						<div class="box2">
							<h4>Métier ou profession </h4>

							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Quel est le métier ou la profession exercé lors de l'accident ou de la maladie professionnelle ?</label>
									<input type="text" name="a">
								</div>

							</div>
						</div>




					</div>	
					<div class="btns">
						<a class="btn btn7" href="2-identification.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="4-renseignements-arret-retour-travail.html">Suivant</a>
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