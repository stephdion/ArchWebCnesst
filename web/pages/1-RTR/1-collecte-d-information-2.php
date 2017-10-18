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
					<h2>Collecte d'information (2 de 2)</h2>
				</div>

				<div class="form-cont sp-xl">

					<div class="content">
						<div class="text sp-s">
							<p><span class="rft">*</span> Obligatoire</p>
						</div>

						<div class="box2">
							<h4>Document remis par ​​​​​​​l'employeur</h4>

							<div class="text">

								<label class="radiobutton required inline">
								   <i>Est-ce que votre employeur vous a remis une copie du document Avis de l'employeur et demande de remboursement?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show="#option-1" type="radio" name="mode" value="create">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide="#option-1" type="radio" name="mode" value="create">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>


						<div id="option-1" class="hide box2 sp-s">
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Numéro de référence de l'avis de l'employeur et demande de ​​​​​​​remboursement</label>
									<p class="clarification">(Ce numéro est inscrit en haut à gauche du document.)</p>
									<input type="text" name="montant">
									<img src="../../images/pages/image-cnesst-reference-avis.png">
								</div>
											
							</div>
						</div>


						<div class="box2">
							<h4>Document remis par le médecin</h4>
							<div class="text">

								<label class="radiobutton required inline">
								   <i>Est-ce que votre médecin vous a remis une copie du document   Attestation médicale?</i>

								   <div class="radiobuttons">
									   	
										<label class="radiobutton">
										   <input data-show="#option-2" type="radio" name="mode2" value="create">
										   <i>Oui</i>
										</label>

										<label class="radiobutton">
										   <input data-hide="#option-2" type="radio" name="mode2" value="create">
										   <i>Non</i>
										</label>
										
								   </div>
								</label>
							</div>
						</div>



						<div id="option-2" class="hide box2 sp-s">
							<div class="text">

								<div class="control-group">
									<label><span class="rft">*</span> Numéro de référence de l'attestation médicale</label>
									<p class="clarification">(Ce numéro est inscrit en haut à gauche du document.)</p>
									<input type="text" name="montant">
									<img src="../../images/pages/image-cnesst-reference-avis-2-a.png">
								</div>
											
							</div>
						</div>



					</div>	
					<div class="btns">
						<a class="btn btn7" href="1-collecte-d-information-1.html">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="2-identification.html">Suivant</a>
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