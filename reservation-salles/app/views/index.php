<?php
   require APPROOT . '/views/includes/head.php';
?>
<body class="index">
<div id="section-landing">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
		<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>My TeamSpace</h2>
						</header>
						<p>Votre <strong>espace privé</strong> 
						<br />
						de travail collaboratif 
						<br />
						par<a href="<?php echo URLROOT; ?>/reservations/planning"> réservation.</a></p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Explorer</a></li>
							</ul>
						</footer>

					</div>

				</section>
    		

					<!-- Main -->
				<article>

					<header class="special container">
						<span class="icon solid fa-chart-bar"></span>
						<h2>ESPACE DE COWORKING À MARSEILLE, QUARTIER  VIEUX PORT </h2>
						<p>Location de bureaux partagés et privatifs à Marseille entre les quartier de la
						 Préfecture et du Vieux Port<br />
						au sein d’un immeuble entièrement rénové.<br />
						Cette importante rénovation et la taille humaine de ce nouveau lieu pour entreprendre
						 à Marseille offre une ambiance de travail à la fois moderne et cosy. Nos espaces de 
						 travail (bureaux, salles de réunion) et espaces événementiels sont lumineux et 
						 climatisés. Ainsi, les entrepreneurs Marseillais, Startups locales, salariés de 
						 grands groupes et voyageurs d’affaires trouveront chez <strong>My teamSpace</strong> un lieu de travail
						  serein et convivial. </p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-6 col-12-narrower">

									
										<h2>Situation de <strong> My TeamSpace</strong><br/>18 rue Dieudé<br/>
										13006 Marseille<br/>Tel 07 69 07 61 38</h2>
									
									<p>Metro ligne 2 Notre Dame du Mont<br/>
									Metro ligne 1 Estrangin et Vieux Port<br/>
									Bus 81 Salvatore Italie<br/>
									Bus 74 et 81 Notre Dame du Mont<br/>
									Tram T3 Place de Rome<br/>
									Parking Baret Saint Ferreol</p>
									
								</div>
								<div class="col-6 col-12-narrower imp-narrower">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.054345531798!2d5.3792930154860965!3d43.292183579135326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0bafcb8cfff%3A0xc733c40bdeb2af54!2s18%20Rue%20Balthazar-Dieud%C3%A9%2C%2013006%20Marseille!5e0!3m2!1sfr!2sfr!4v1608125281046!5m2!1sfr!2sfr" 
								width="450" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									
								</div>
							</div>
						</section>
				</article>
					
					<!-- Two -->
				<article id="main">
						<section class="wrapper style3 container special">
							<h2>louez notre espace</h2>
							<p>Vous êtes à la recherche d’un lieu exceptionnel et 
								fonctionnel pour recevoir vos clients, faire une formation
								 ou organiser un séminaire ?<br>
								Profitez de toutes les installations pratiques de notre espace 
								de coworking (wifi, imprimante, salle de réunion, coin salon 
								et cuisine , terrasses) et d’un cadre idéal en plein centre ville.</p><br>
							<div class="row">
								<figure class="image featured">
									<img src="<?php echo URLROOT; ?>/public/images/salle.jpg" alt="salle de réunion">
								</figure>
							</div>
						</section>

						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>Plus de 1000m2 entièrement rénové</h3>
										</header>
										<p>Espace lumineux et climatisé.<br/> Parking privatif et sécurisé</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>Espaces communs à votre disposition</h3>
										</header>
										<p>Cafeteria, salle de détente et <br/>patio végétalisé.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-check"></span>
										<header>
											<h3>Equipements modernes et performants</h3>
										</header>
										<p></p>
									</section>

								</div>
							</div>
						</section>
				</article>
					
			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Réserver <strong>My teamSpace</strong></h2>
						<p>Consulter le planning de réservation.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="<?php echo URLROOT; ?>/reservations/planning" class="button primary">Planning</a></li>
						</ul>
					</footer>

				</section>
<?php
require APPROOT . '/views/includes/footer.php';
?>