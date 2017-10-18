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
			<li class="active"><a href="#"><i>1</i><span>Collecte d'information</span></a></li>
			<li><a href="#"><i>2</i></a></li>
			<li><a href="#"><i>3</i></a></li>
			<li><a href="#"><i>4</i></a></li>
			<li><a href="#"><i>5</i></a></li>
			<li><a href="#"><i>6</i></a></li>
			<li><a href="#"><i>7</i></a></li>
			<li><a href="#"><i>8</i></a></li>
		</ul>

		<div class="strong">
			<div class="mcl2">

				<div class="step-info">
					<p class="number">1</p>
					<h2>Collecte d'information (1 de 2)</h2>
				</div>

				<div class="infobox5 sp-xl">
					<p>Les renseignements suivants permettent à la CNESST de valider si elle détient de l'information sur l'événement. Si c'est le cas, des champs du formulaires seront pré remplis. Cela facilitera votre déclaration.</p>
				</div>

				<div class="form-cont">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<div class="text">

								<label class="radiobutton required inline">
								   <i>Est-ce que l'événement est lié à un accident du travail ou à une maladie professionnelle déjà déclarée?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-hide="#option-2" data-show="#option-1" type="radio" name="mode" value="oui">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide="#option-1" data-show="#option-2" type="radio" name="mode" value="non">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>


						<div id="option-1" class="hide box2 sp-s">
							<h4>Événement</h4>
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Date de l'événement</label>
									<p class="clarification">(Récidive, rechute ou aggravation.)</p>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>
						   
								<div class="control-group">
									<label><span class="rft">*</span> Date à laquelle la lésion professionnelle a été déclarée la première fois </label>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Numéro de dossier à la CNESST</label>
									<input type="text" name="montant" data-characters="9">
									<p class="clarification">9 chiffres</p>
								</div>
												
							</div>
						</div>


						<div id="option-2" class="hide box2 sp-s">
							<h4>Événement</h4>
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Date d'événement d'origine</label>
									<p class="clarification">(Date de votre accident du travail ou de votre maladie professionnelle)</p>
									<div class="date-icon">
										<input type="text" class="datepicker form-control" value="">
									</div>
									<p class="clarification">aaaa-mm-jj</p>
								</div>

							</div>
						</div>


						<div class="box2 sp-s">
							<h4>Numéro d'identification</h4>
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Numéro d'assurance maladie (NAM)</label>
									<input type="text" name="montant" data-characters="12">
									<p class="clarification">12 caractères</p>
								</div>

								<div class="control-group">
									<label><span class="rft">*</span> Numéro d'assurance sociale (NAS)</label>
									<input type="text" name="montant" data-characters="9">
									<p class="clarification">9 chiffres</p>
								</div>

							</div>
						</div>


					</div>	
					<div class="btns">
						<a class="btn btn7" href="0-avant-de-debuter.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="1-collecte-d-information-2.html">Suivant</a>
					</div>
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