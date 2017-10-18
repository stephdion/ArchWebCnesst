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
			<li class="active"><a href="#"><i>4</i><span>Renseignements ​​​​​​​sur l'arrêt et le retour au travail </span></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">4</p>
					<h2>Renseignements ​​​​​​​sur l'arrêt et le retour au travail </h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Arrêt de travail</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Êtes-vous actuellement ou ​​​​​​​avez-vous été en arrêt de travail?</i>

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


								<div class="control-group os-1-1 os-1 hide">
									<label><span class="rft">*</span> Date de votre dernier jour travaillé </label>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>


							</div>


						</div>


						<div class="box2 os-1-1 os-1 hide">
							<h4>Retour au travail</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Êtes-vous actuellement de retour au travail?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show=".os-2-1" data-hide=".os-2" type="radio" name="mode2">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-show=".os-2-2" data-hide=".os-2" type="radio" name="mode2">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>


								<div class="control-group os-2-1 os-2 hide">
									<label><span class="rft">*</span> Date de votre retour </label>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>


								<div class="control-group os-2-2 os-2 hide">
									<label><span class="rft">*</span> Date prévue de votre retour </label>
									<p class="clarification">(Si elle est connue.) </p>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>


							</div>
						</div>


						<div class="box2 os-2-1 os-1-2 os-1 os-2 hide">
							<h4>Au travail</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Occupez-vous le même emploi qu'avant l'accident de travail ou la maladie professionnelle? </i>
								   <p class="clarification">(Mêmes tâches, même horaire et mêmes conditions.)</p>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-3" type="radio" name="mode3">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-show=".os-3-2" data-hide=".os-3" type="radio" name="mode3">
										   <i>Non</i>
										</label>
									
								   </div>

								</label>


								<label class="hide os-3 os-3-2 radiobutton required">
								   <i>Précisez votre emploi</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode4">
										   <i>Assignation temporaire ​​​​​​​(temps plein)</i>
										</label>

										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode4">
										   <i>Assignation temporaire(temps partiel)</i>
										</label>
									
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode4">
										   <i>Travail allégé (temps plein)</i>
										</label>
									
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode4">
										   <i>Retour progressif</i>
										</label>
									
										<label class="radiobutton">
										   <input data-hide=".os-4" type="radio" name="mode4">
										   <i>Chez un autre employeur</i>
										</label>
									
										<label class="radiobutton">
										   <input data-show=".os-4-1" data-hide=".os-4" type="radio" name="mode4">
										   <i>Autre</i>
										</label>
									

										<div class="control-group os-4-1 os-4 hide">
											<label><span class="rft">*</span> Précisez </label>
											<input type="text" value="">
										</div>
								   </div>

								</label>



								<label class="radiobutton required inline">
								   <i>Est-ce que votre employeur continue à payer votre salaire ​​​​​​​en totalité?</i>

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

					</div>	
					<div class="btns">
						<a class="btn btn7" href="3-renseignements-evenement.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="5-renseignements-calcul-versement.html">Suivant</a>
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