<?php


   require (ROOT.'views/includes/head.php');
?>
 <body>
	<div class="preloader">
		<img src="<?php echo WWW_ROOT; ?>public/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<a class="navbar-brand" href="<?php echo WWW_ROOT; ?>admins/connectAdmin"><img src="<?php echo WWW_ROOT; ?>public/img/logo.png" data-active-url="<?php echo WWW_ROOT; ?>public/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Intro</a></li>
                    <li><a href="#projets">Projets</a></li>
					<li><a href="#contacts">Contacts</a></li>
					<li><a href="<?php echo WWW_ROOT; ?>admins/connectAdmin">Administration</a></li>


					<?php if(isset($_SESSION['envoi']) && $_SESSION['envoi']=="ok"){echo '<li><a>(Message envoyé)</a></li>';}
					elseif(isset($_SESSION['envoi']) && $_SESSION['envoi']=="no"){echo '<li><a>(Erreur d\'envoi)</a></li>';}
				
					 ?>
					
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row mb-5">
						<div class="col-md-12 text-center">
							<h1 class="white">Denis Farkas</h3>
                            
							<h2 class="white typed">dev web junior</h2>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Technologies maitrisées</h5>
						<div class="owl-carousel owl-schedule bottom">
							
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="white">PHP</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class=" white">MVC POO</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class=" white">Codeigniter 3</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
							</div>
                            <div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="white">HTML5 / CSS4</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="white">Javascript / ES6</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="white">React.js / JSX</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">En cours</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class=" white">GITHUB</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">&#x2714;</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class=" white">DOCKER</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">En cours</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class=" white">AWS/Google cloud</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">En cours</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">CONTACTEZ-NOUS</h4>
							<h4 class="white heading small-pt">(projets, maintenances,..)</h4>
							<div class="row">
							<a href="#contacts" class="btn btn-white-fill expand">Contact</a>
							<a href="www.linkedin.com/in/denis-farkas-0b8461124" class="navbar-brand"><img src="<?php echo WWW_ROOT; ?>public/img/linked.jpg" data-active-url="<?php echo WWW_ROOT; ?>public/img/linked.jpg" alt="linkedin"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Qui-suis je?</h5>
						<div class="owl-testimonials bottom">
							<div class="item mt-1 text-center">
								<h5 class="white heading content"><i>En reconversion Dev-Web en France, aprés avoir été anthropologue social et culturel, en Equateur, pendant 20 ans.</i></h5>
								<a href="<?php echo WWW_ROOT; ?>pages/moncv" class="btn btn-white-fill expand mb-1">Mon CV</a>
								
							</div>
							<div class="item mt-3">
								<h5 class="white heading content"><i>J'ai développé une passion pour l’apprentissage des TIC depuis de nombreuses années. Cela oriente aujourd'hui ma reconversion professionnelle vers le code et le développement web</i></h5>
								
							</div>
							<div class="item mt-3">
								<h5 class="white heading content"><i>En recherche d'un contrat de professionalisation, en apportant le bénéfice de l'exemption des charges sociales du fait de mon âge (55 ans)</i></h5>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<section id="projets" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Projets</h2>
				<h4 class="light muted">Quelques exemples détaillés!</h4>
			</div>
			<div class="row">
				<?php
				foreach($data['projets'] as $projet){
				
				echo '<div class="col-md-4">
					<div class="team text-center">'; ?>
					<div class="cover" style="background:url('<?php echo WWW_ROOT; ?>public/img/team/team-cover<?= $projet->id_projet ?>.jpg'); background-size:cover;">
					<?php
							echo '<div class="overlay text-center">
								<h3 class="white">'.$projet->nom_stack_front.'</h3>
								<h5 class="light light-white">'.$projet->nom_stack_back.'</h5>
							</div>
						</div>
						<img src="'.WWW_ROOT.'public/img/team/team'.$projet->id_projet.'.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>'.$projet->titre.'</h4>
							<h5 class="muted regular">'.$projet->titre_resume.'</h5>
						</div>
						<a href="'.WWW_ROOT.'projets/ficheProjet/'.$projet->
						id_projet.'" class="btn btn-blue-fill ripple">Voir</a>
					</div>
				</div>';
					
				}
				?>	
			</div>
		</div>
	</section>
    <section id="contacts" >
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Contacts</h2>
				<h4 class="light muted">Remplissez notre formulaire</h4>
				
			</div>
           
            <!-- Form Started -->
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
								<form action="<?php echo WWW_ROOT;?>contacts/ajoutContact" method="post">
									<div class="form-group margin-left">	
										<label for="genre">Civilité</label>
										<div class="row ">
											<div class="form-check " id="genre">
												<label class="form-check-label ">
												<input type="radio" class="radio-inline" name="civilite" id="optionsRadios1" value="Monsieur" checked="">
												Monsieur
												</label>
											</div>
											<div class="form-check ml-1">
												<label class="form-check-label ml-1">
												<input type="radio" class="radio-inline" name="civilite" id="optionsRadios2" value="Madame" >
												Madame
												</label>
											</div>
										</div>
									</div>      
									<div class="form-group">
										<label><i class="fa fa-user" aria-hidden="true"></i> Nom</label>
										<input type="text" name="nom" class="form-control" placeholder="Entrer Nom" required>
									</div>
									<div class="form-group">
										<label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
										<input type="email" name="email" class="form-control" placeholder="Entrer Email" required>
									</div>
									<div class="form-group">
										<label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
										<textarea rows="3" name="message" class="form-control" placeholder="Votre message" required></textarea>
									</div>
									<div class="form-group">
										<button type="submit"  class="btn-red btn-block btn-danger">Post &rarr;</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Ended -->
        </div>
    </section>
	

        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
