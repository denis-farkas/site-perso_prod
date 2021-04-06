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
      <div class="container">
          
      </div>  
    </div>

	

    <section id="services" class="section section-padded">
    <div class="container">
        <div class="row text-center title">
            <h2>Projet : <?= $data['projet']->titre ?></h2><br>
            <h4 class="light"><?= $data['projet']->resume ?></h4><br>
        </div>
        <br>
            <div class="col-md-12  text-center">  
               <div class="col-md-6 col-lg-6">
               <p><?= nl2br($data['projet']->description) ?></p>
               <br>
               <a href="<?= $data['projet']->link ?>" class="btn-red btn-block  btn-warning center" target="_blank">Version Live</a>
               </div>
                <div class="col-md-6 col-lg-6 ">
                <img class="img-responsive center" src="<?php echo WWW_ROOT.'public/img/img_proj/'.$data['images'][0]->nom_image; ?>" alt=""> <br>  
                   
                </div>
               
            </div>

      
        <div class="col-md-12 pricings text-center">
            <div class="row">
                <div class="col-md-6">
                <img class="img-responsive center" src="<?php echo WWW_ROOT.'public/img/img_proj/'.$data['images'][1]->nom_image; ?>" alt="">      
                </div>
                <div class="col-md-6">
                <img class="img-responsive center" src="<?php echo WWW_ROOT.'public/img/img_proj/'.$data['images'][2]->nom_image; ?>" alt="">  
                </div>
            </div>    
        </div>
        <div class="row services">
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_institution; ?>" alt="" >
                    </div>
                    <h4 class="heading"><?=$data['projet']->nom_institution ?></h4>
                    <p class="description"><?=$data['projet']->description_institution ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_stack_front; ?>" alt="" >
                    </div>
                    <h4 class="heading">Technologies Frontend </h4>
                    <p class="description"><?=$data['projet']->nom_stack_front ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                <div class="icon-holder">
                        <img  src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_stack_back; ?>" alt="" >
                    </div>
                    <h4 class="heading">Technologies Backend </h4>
                    <p class="description"><?=$data['projet']->nom_stack_back ?></p>
                </div>
            </div>
        </div>
        
    
        <div class="row services">
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_version; ?>" alt="" >
                    </div>
                    <h4 class="heading">Outils versioning</h4>
                    <p class="description"><?=$data['projet']->nom_version ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_team; ?>" alt="" >
                    </div>
                    <h4 class="heading">Collaboration </h4>
                    <p class="description"><?=$data['projet']->nom_team ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                <div class="icon-holder">
                        <img src="<?php echo WWW_ROOT.'public/img/logo_proj/'.$data['projet']->image_ide; ?>" alt="" >
                    </div>
                    <h4 class="heading">Technologie IDE </h4>
                    <p class="description"><?=$data['projet']->nom_ide ?></p>
                </div>
            </div>
        </div>
        
        
        
    </div>
		<div class="cut cut-bottom"></div>
	</section>
   
	

        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
