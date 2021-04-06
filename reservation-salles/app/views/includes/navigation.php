<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo URLROOT; ?>/pages/index">My TeamSpace</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="<?php echo URLROOT; ?>/pages/index">Accueil</a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									
									<li><?php if(isset($_SESSION['id'])) : ?>
										<a href="<?php echo URLROOT; ?>/reservations/planning" >Planning</a>
									</li>
									
										<?php else : ?>
									<li>		
											<a href="<?php echo URLROOT; ?>/reservations/planning" >Planning</a>
									</li>
									<?php endif; ?>
									
									
									
									
								</ul>
							</li>
							<li class="btn-login">
							<?php if(isset($_SESSION['id'])) : ?>
								<a href="<?php echo URLROOT; ?>/users/logout" class="button warning">Déconnexion</a>
							<?php else : ?>
								<a href="<?php echo URLROOT; ?>/users/connexion" class="button primary">Connexion</a>
							<?php endif; ?>
							</li>
							<li>
								<?php if(!isset($_SESSION['id'])) : ?>
									<a href="<?php echo URLROOT; ?>/users/inscription" class="button danger" >Inscription</a>
								<?php else : ?>
									<a href="<?php echo URLROOT; ?>/users/profil" class="button warning">Modifier</a>
								<?php endif; ?>
								</li>
						</ul>
					</nav>
				</header>
		
