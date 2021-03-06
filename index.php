<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Maison de la culture</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#intro">Bienvenue</a>			  
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#two">Que faisons nous ?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#one">Tarifs (Inscription / Calendrier)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#three">Nous contacter</a>
					</li>
				</ul>
				<?php 
				if (isset($_SESSION['login'])){
					echo '<span class="connexionPhp">' . $_SESSION['login'] . '</span>';
					echo '&nbsp; &nbsp; <label class="btn btn-secondary">
						<a href="assets/php/deconnexionSite.php"> Deconnexion</a> 
					</label>';
				}elseif (isset($_SESSION['admin'])) {
					echo '<span class="connexionPhp">' . "Moniteur : " . $_SESSION['admin'] . '</span>';
					echo '&nbsp; &nbsp; <label class="btn btn-secondary">
						<a href="assets/php/deconnexionSite.php"> Deconnexion</a> 
					</label>';
				}
				else{
				echo '<label class="btn btn-secondary">
					<a href="pages/inscriptionSite.html">Inscription</a>
				</label>				
				<label class="btn btn-secondary">
					<a href="pages/connexionSite.html">Connexion</a> 
				</label';
				}
				?>
			</div>
		</nav>
		
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Maison de la culture</h1>
							<p>En France, les maisons de la culture sont des établissements culturels créés en 1961, 
								à l'initiative d'André Malraux, alors ministre des Affaires culturelles. </p>
							<ul class="actions">
								<li><a href="https://fr.wikipedia.org/wiki/Maison_de_la_culture" class="button scrolly">En savoir plus</a></li>
								<li><a href="https://fr.wikipedia.org/wiki/Andr%C3%A9_Malraux" class="button scrolly">André MALRAUX</a></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Que faisons nous</h2>
							<p>Nous vous proposons différente activité notament le ski que vous 
								pouvez pratiquez sur différent site.<br/> <b>Cliquez sur l'image pour plus d'informations</b></p>
								<table>
									<tr>
										<td>
											<a href="pages/la_plagne.html"><img src="images/la_plagne.jpg" alt="La plagne" class="image1" title="La plagne"></a>
											<h4>La plagne</h4>
										</td>
										<td>
											<a href="pages/val_thorens.html"><img src="images/Val_thorens2.jpg" alt="Val thorens" class="image1" title="Val thorens"></a>
											<h4>Val thorens</h4>
										</td>
										
									</tr>
									<tr>
										<td>
											<a href="pages/flaine.html"><img src="images/flaine.jpg" alt="flaine" class="image1" title="flaine"></a>
											<h4>Flaine</h4>
										</td>
										<td>
											<a href="pages/courchevel.html"><img src="images/courchevel2.jpg" alt="courchevel" class="image1" title="courchevel"></a>
											<h4>Courchevel</h4>
										</td>
									</tr>
								</table>
						</div>
					</section>

					<section id="one" class="wrapper style2 fade-up">
							<div class="inner">
									<h2>Tarifs</h2>
									<p>Vous pouvez calculer le tarif suivant vôtre demande. <br/>
										Réductions disponible : <br/>Enfants de -12ans <span class="badge badge-light">-30%</span> |
															Enfants de 12 à 16ans <span class="badge badge-light">-20%</span> |
															Enfants de 16 à 18ans <span class="badge badge-light">-10%</span>
									</p>
										<section>
											<form method="post" name="formcalcul">
												<div class="fields">
													<div class="field half">
														<label for="adulte">Adulte</label>
														<input type="text" name="adulte" id="adulte" value="0" oninput="calcul(formcalcul)" required />
													</div>
													<div class="field half">
														<label for="enfant1">Enfants de - 12ans</label>
														<input type="text" name="enfant1" id="enfant1" value="0" oninput="calcul(formcalcul)" required />
													</div> 
													<div class="field half">
															<label for="enfant2">Enfants entre 12 et 16ans </label>
															<input type="text" name="enfant2" id="enfant2" value="0" oninput="calcul(formcalcul)" required />
													</div>
													<div class="field half">
															<label for="enfant3">Enfants entre 16 et 18ans</label>
															<input type="text" name="enfant3" id="enfant3" value="0" oninput="calcul(formcalcul)" required />
													</div>
													<div class="field half"><h5 id="Prix">Le total à payer est de : </h5></div>
												</div>
												<div class="row">
													<div class="col-md-2">
														<button class="button" type="button" onClick="calcul(formcalcul)">Calculer</button>
													</div>
													<div class="col-md-2">
														<button class="button" type="reset" value="remettre à 0">Remettre à 0</button>	
													</div>
													<div class="col-md-3">
														<a href="pages/inscription.html" class="button scrolly" id="valider" >S'inscrire / Calendrier</a>	
													</div>
													<div class="col-md-3">
														<a href="pages/participantsPages.html" class="button scrolly" id="valider" >Voir les participants</a>	
													</div>
												</div>
											</form>
										</section>
							</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Nous contacter</h2>
							<div class="split style1">
								<section>
							<h5>Vous pouvez nous contacter en remplissant se formulaire ou bien avec les réseaux sociaux utilisé.</h5>
							<br/>
									<form method="post" action="assets/php/contact.php">
										<div class="fields">
											<div class="field half">
												<label for="nom">Nom</label>
												<input type="text" name="nom" id="nom" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5" ></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Envoyer</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Adresse</h3>
											<span>1 Av. du Général Leclerc<br />
											30000 Nîmes<br />
											France</span>
										</li>
										<li>
											<h3>Email</h3>
											<span>lycee@gard.cci.fr</span>
										</li>
										<li>
											<h3>Téléphone</h3>
											<span>04 66 87 97 19</span>
										</li>
										<li>
											<h3>Réseaux</h3>
											<ul class="icons">
												<li><a href="https://twitter.com/cci_gard" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="https://www.facebook.com/ccidugard" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.youtube.com/channel/UCKZeOAaIvH3k4_XEEh9vEow" class="fa-youtube"><span class="label">Youtube</span></a></li>
												<li><a href="https://www.linkedin.com/company/cci-gard/" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>
					<section>
							<div class="inner headerimage">
								<div class="container">
									<div class="row">
										<div class="col-md-offset-4 col-md-4"></div>
										<div class="col-md-4">
											<h3>Crée et développé par : </h3>
										</div>
										<div class="col-md-offset-4 col-md-4"></div>
									</div>
									<br/>
									<div class="row align-center">
										<div class="col-md-4">
											<img class="image imageprofile" src="images/julien.jpg" alt="photo 3"> <label>Julien aquilina</label>
										</div>
										<div class="col-md-4">
											<img class="image imageprofile" src="images/lyam.jpg" alt="photo 1"> <label>Lyam Durand</label>
										</div>
										<div class="col-md-4">
											<img class="image imageprofile" src="images/joris.jpg" alt="photo 2"> <label>Joris Bourguet</label>
										</div>
									</div>
								</div>								
							</div>
							<div id="backshape">
								<div class="wrapper">
									
								</div>
							</div>
					</section>
			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; MDC. Droits réservés.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="assets/js/tarif.js"></script>
	</body>
</html>