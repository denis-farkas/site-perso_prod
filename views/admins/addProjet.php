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
            <section class=" col-sm-12 col-md-9 col-lg-10 ">
                <div class="col-md-12">
                    <br>
                    <h2>Projet</h2>
                    <br>
                    <hr>
                    <br>
                    <h4>Ajout Projet</h4>
                             
                    <form method="post" action="<?php echo WWW_ROOT; ?>admins/addProjet">
                        
                            <label for="pr"><h4>Projet:</h4></label>
                            <input type="text" id="pr" class="form-control"  name="titre" required>
                            
                            <br>
                            <label for="sr"><h4>Sous-titre:</h4></label>
                            <input type="text" id="sr" class="form-control"  name="titre_resume" required>

                            <label for="presu">Résumé</label>
                            <textarea id="presu" class="form-control"  name="resume"></textarea>
                            <br>
                            <label for="presen">Présentation</label>
                            <textarea class="form-control" id="presen" name="description"></textarea>
                        <br>
                        <?php 
                        echo '<div class="form-group">
                        <label for="sf">Stack Front:</label>
                        <select class="form-control" id="sf" name="id_stack_front">';
                            foreach($data['crudSF'] as $crudSF){
                                echo '<option value="'.$crudSF->id_stack_front.'">'.$crudSF->nom_stack_front.'</option>';
                            }   
                        echo'</select>
                        </div></tr><br>
                        <tr><div class="form-group">
                        <label for="sb">Stack Back:</label>
                        <select class="form-control" id="sb" name="id_stack_back">';
                            foreach($data['crudSB'] as $crudSB){
                                echo '<option value="'.$crudSB->id_stack_back.'">'.$crudSB->nom_stack_back.'</option>';
                            }   
                        echo'</select>
                        </div></tr><br>
                        <div class="form-group">
                        <label for="t">Team:</label>
                        <select class="form-control" id="t" name="id_team">';
                            foreach($data['crudT'] as $crudT){
                                echo '<option value="'.$crudT->id_team.'">'.$crudT->nom_team.'</option>';
                            }   
                        echo'</select>
                        </div><br>
                        <tr><div class="form-group">
                        <label for="g">Stack graphique:</label>
                        <select class="form-control" id="g" name="id_graph">';
                            foreach($data['crudG'] as $crudG){
                                echo '<option value="'.$crudG->id_graph.'">'.$crudG->nom_graph.'</option>';
                            }   
                        echo'</select>
                        </div><br>
                        <tr><div class="form-group">
                        <label for="v">Stack versioning: </label>
                        <select class="form-control" id="v" name="id_version">';
                            foreach($data['crudV'] as $crudV){
                                echo '<option value="'.$crudV->id_version.'">'.$crudV->nom_version.'</option>';
                            }   
                        echo'</select>
                        </div><br>
                        
                        <div class="form-group">
                        <label for="id">Ide: </label>
                        <select class="form-control" id="id" name="id_ide">';
                            foreach($data['crudId'] as $crudId){
                                echo '<option value="'.$crudId->id_ide.'">'.$crudId->nom_ide.'</option>';
                            }   
                        echo'</select>
                        </div><br>

                        <div class="form-group">
                        <label for="i">Institution: </label>
                        <select class="form-control" id="i" name="id_instit">';
                            foreach($data['crudI'] as $crudI){
                                echo '<option value="'.$crudI->id_instit.'">'.$crudI->nom_institution.'</option>';
                            }   
                        echo'</select>';
                        ?>
                        </div><br>

                        <label for="link"><h4>Link:</h4></label>
                            <input type="text" id="link" class="form-control"  name="link" required>


                            <tr> <input type="submit" class="btn btn-primary" name="ajout" value="Ajouter"></tr>
                    </form>
                        
                        <br>                                                                  
     
                </div>      
            </section>
                    
        </div>
    
        <?php
        require ROOT . '/views/includes/footer.php';
        ?>