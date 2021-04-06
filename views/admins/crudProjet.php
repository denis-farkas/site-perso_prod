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
                        <h4>Modifier Projet</h4>
                        
                        
                                <?php   
                                                   
                                foreach($data['crudP'] as $crudP){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Projet">
                                        <table class="table table-hover">
                                       
                                        <tbody>
                                        
                                         <tr> ID :'.$crudP->id_projet.'</tr>
                                         <br>
                                         <label for="pr"><h4>Titre: '.$crudP->titre.'</h4></label>
                                         <tr><input type="text" id="pr" class="form-control"  name="titre" value="'.$crudP->titre.'"></tr>
                                         
                                         <br>
                                         <label for="sr"><h4>Sous-titre: '.$crudP->titre_resume.'</h4></label>
                                         <tr><input type="text" id="sr" class="form-control"  name="titre_resume" value="'.$crudP->titre_resume.'"></tr>
                                         <br>

                                         <label for="presu">Résumé</label>
                                         <tr><textarea id="presu" class="form-control"  name="resume">'. $crudP->resume.'</textarea></tr>
                                         <br>
                                         <label for="presen">Présentation</label>
                                         <tr><textarea class="form-control" id="presen" name="description"> '.$crudP->description.'</textarea></tr>
                                       <br>
                                        <tr><div class="form-group">
                                        <label for="sf">Stack Front: '.$crudP->nom_stack_front.'</label>
                                        <select class="form-control" id="sf" name="id_stack_front">';
                                            foreach($data['crudSF'] as $crudSF){
                                                echo '<option value="'.$crudSF->id_stack_front.'"';
                                                if($crudSF->id_stack_front==$crudP->id_stack_front){echo "selected";}
                                                
                                               echo' >'.$crudSF->nom_stack_front.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>
                                        <tr><div class="form-group">
                                        <label for="sb">Stack Back: '.$crudP->nom_stack_back.'</label>
                                        <select class="form-control" id="sb" name="id_stack_back">';
                                            foreach($data['crudSB'] as $crudSB){
                                                echo '<option value="'.$crudSB->id_stack_back.'"';
                                                if($crudSB->id_stack_back==$crudP->id_stack_back){echo "selected";}
                                                echo'>'.$crudSB->nom_stack_back.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>
                                        <tr><div class="form-group">
                                        <label for="t">Team: '.$crudP->nom_team.'</label>
                                        <select class="form-control" id="t" name="id_team">';
                                            foreach($data['crudT'] as $crudT){
                                                echo '<option value="'.$crudT->id_team.'"';
                                                if($crudT->id_team==$crudP->id_team){echo "selected";}
                                                echo'>'.$crudT->nom_team.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>
                                        <tr><div class="form-group">
                                        <label for="g">Stack graphique: '.$crudP->nom_graph.'</label>
                                        <select class="form-control" id="g" name="id_graph">';
                                            foreach($data['crudG'] as $crudG){
                                                echo '<option value="'.$crudG->id_graph.'"';
                                                if($crudG->id_graph==$crudP->id_graph){echo "selected";}
                                                echo'>'.$crudG->nom_graph.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>
                                        <tr><div class="form-group">
                                        <label for="v">Stack versioning: '.$crudP->nom_version.'</label>
                                        <select class="form-control" id="v" name="id_version">';
                                            foreach($data['crudV'] as $crudV){
                                                echo '<option value="'.$crudV->id_version.'"';
                                                if($crudV->id_version==$crudP->id_version){echo "selected";}
                                                echo'>'.$crudV->nom_version.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>
                                        
                                        <tr><div class="form-group">
                                        <label for="id">Ide: '.$crudP->nom_ide.'</label>
                                        <select class="form-control" id="id" name="id_ide">';
                                            foreach($data['crudId'] as $crudId){
                                                echo '<option value="'.$crudId->id_ide.'"';
                                                if($crudId->id_ide==$crudP->id_ide){echo "selected";}
                                                echo'>'.$crudId->nom_ide.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>

                                        <tr><div class="form-group">
                                        <label for="i">Institution: '.$crudP->nom_institution.'</label>
                                        <select class="form-control" id="i" name="id_instit">';
                                            foreach($data['crudI'] as $crudI){
                                                echo '<option value="'.$crudI->id_instit.'"';
                                                if($crudI->id_instit==$crudP->id_instit){echo "selected";}
                                                echo'>'.$crudI->nom_institution.'</option>';
                                            }   
                                        echo'</select>
                                        </div></tr><br>

                                        <input type="hidden" name="id_projet" value="'.$crudP->id_projet.'">
                                        <input type="hidden" name="date" value="'.$crudP->date.'">
                                        <input type="hidden" name="link" value="'.$crudP->link.'">


                                         <tr> <input type="submit" class="btn btn-primary" name="update" value="Modifier"></tr>
                                        </form>
                                        </tbody>
                                        </table> 
                                        <br>';                                                                  
                                    } 
                                    ?>  
                          
                    </div>      
                </section>
                    
            </div>
    
        <?php
        require ROOT . '/views/includes/footer.php';
        ?>