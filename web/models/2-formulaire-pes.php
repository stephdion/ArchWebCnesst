<?php include('../header.php'); ?>


	<header class="container header-v1">
		<div class="row no-gutters">
			<div class="col-auto">
				<figure class="logo">
					<img src="../images/logo.png">
				</figure>
			</div>
		    <div class="col align-self-end">
		    	<nav class="top-menu">
		    		<ul>
		    			<li>
			    			<a href="#">
			    				<img src="../images/icone-cnesst-icone-connexion.png">
			    				<p>Connexion</p>
			    			</a>
		    			</li>
		    		</ul>
		    	</nav>
		    </div>
		</div>
		<div class="no-menu"></div>
	</header>

	<section class="container">
		<div class="strong">
			<div class="mcl2">
				<div class="form-cont">
					<div class="header">
						<h3>Titre de section</h3>
					</div>
					<div class="content">
						<div class="control-group">
							<label>Nom</label>
							<input type="text" name="nom">
						</div>
						<div class="control-group">
							<label>Courriel</label>
							<input type="email" name="courriel">
						</div>
						<div class="control-group">
							<label>T&eacute;l&eacute;phone</label>
							<input type="tel" name="tel">
							<p class="clarification">(xxx) xxx-xxxx</p>
						</div>
						<div class="control-group">
							<label>Cellulaire</label>
							<input type="tel" name="cell">
							<p class="clarification">(xxx) xxx-xxxx</p>
						</div>
						<div class="control-group">
							<label>Date</label>
							<div class="date-icon">
								<input type="text" class="datepicker form-control" value="">
							</div>
						</div>
						<div class="control-group">
							<label>Texte</label>
							<textarea></textarea>
							<p class="clarification">Le champ doit contenir maximum 1000 caract&egrave;res.</p>
						</div>
						<div class="control-group">
							<label>Addresse</label>
							<input type="text" name="adresse">
						</div>
						<div class="control-group">
							<label>Utilisateur</label>
							<input type="text" name="utilisateur">
						</div>
						<div class="control-group">
							<label>Mot de passe</label>
							<div class="password-icon">
								<input type="password" name="mot de passe">
							</div>
						</div>
						<div class="control-group">
							<label>Montant</label>
							<input type="text" class="amount" name="montant">
						</div>

						<div class="control-group">
							<label class="checkbox">
							   <input type="checkbox" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>
							<label class="checkbox">
							   <input type="checkbox" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>
							<label class="checkbox">
							   <input type="checkbox" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>
						</div>

						<div class="control-group">
							<label class="radiobutton">
							   <input type="radio" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>
							<label class="radiobutton">
							   <input type="radio" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>
							<label class="radiobutton">
							   <input type="radio" name="mode" value="create">
							   <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i>
							</label>

						</div>

					</div>	
					<div class="btns">
						<a class="btn btn7" href="#">Pr&eacute;c&eacute;dent</a>
						<a class="btn btn3" href="#">Suivant</a>
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
				<span>Renseignements g&eacute;n&eacute;raux: </span>
				<span><a href="tel:18448380808">1 844 838-0808</a></span>
				<img src="../images/logo_footer.png">
			</div>
		</div>
		<div class="row no-gutters bottom">
			&copy; CNESST, 2017
		</div>

	</footer>


<?php include('../footer.php'); ?>