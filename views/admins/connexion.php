<?php


   require (ROOT.'views/includes/head.php');
?>
 <body>
 <nav class="navbar">
		<div class="container">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo WWW_ROOT; ?>pages/index"><img src="<?php echo WWW_ROOT; ?>public/img/logo.png" data-active-url="<?php echo WWW_ROOT; ?>public/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav  navbar-right main-nav">
					<li><a href="<?php echo WWW_ROOT; ?>pages/index">Intro</a></li>
                    <li><a href="<?php echo WWW_ROOT; ?>pages/index#projets">Projets</a></li>
                    <li><a href="<?php echo WWW_ROOT; ?>pages/index#contacts">Contacts</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

    <div class="header-proj">

    </div>

	

   
    <div class="container">
        <section id="contacts" >
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Connexion Administrateur</h2>	
			</div>
           
            <!-- Form Started -->
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
								<form action="<?php echo WWW_ROOT;?>admins/connectAdmin" method="post">
									   
									<div class="form-group">
										<label><i class="fa fa-user" aria-hidden="true"></i> Login</label>
										<input type="text" name="login" class="form-control" placeholder="Entrer Login" required>
									</div>
									<div class="form-group">
										<label><i class="fa fa-envelope" aria-hidden="true"></i> Password</label>
										<input type="text" name="password" class="form-control" placeholder="Entrer Password" required>
									</div>
									<div class="form-group">
										<button type="submit" name="connect" class="btn-red btn-block btn-danger">Connexion &rarr;</button>
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
        <section id="services" class="section section-padded">
            <div class="cut cut-bottom"></div>
        </section>
    </div>
   
	

        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
