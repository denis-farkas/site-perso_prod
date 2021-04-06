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

       
    <div class="row">
        <section class="col-sm-12 col-md-3 col-lg-2 text-center">
            <aside class="col-md-12">
                <?php
                require (ROOT.'views/includes/asideCrud.php');
                ?>  
            </aside>
        </section>  
        <section class=" col-sm-12 col-md-9 col-lg-10 text-center">
            <div class="col-md-12">
                <br>
        
                <div class="jumbotron">
                    <h1>Upload Image</h1>
                    
                    <br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                        
                            <p class="invalidFeedback"><?= $data['error'] ?></p>
                            <?php if(!empty($data['filename'])){echo '<img class="img-responsive center" src="'.WWW_ROOT.'public/img/img_proj/'.$data['filename'].'" alt="upload"> ';} ?>    
                            <br>
                            <div class="form-group">
                                <label for="fileSelect">Image:</label>
                                <input type="file" name="photo" id="fileSelect">
                                <input type="submit" class="btn btn-primary" name="submit" value="Upload">
                                <p><strong>Note:</strong> Seulement .jpg, .jpeg, .gif, .png formats sont permis avec une taille max  de 5 MB.</p>
                            </div>
                        </fieldset>
                    </form>        
                </div>                   
            </div>
        </section>
    </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>