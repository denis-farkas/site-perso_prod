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
                        <h5>Stack Front</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudSF'] as $crud){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Stack_Front">
                                         <tr>
                                         <td>'.$crud->id_stack_front.'</td>
                                        <td><input type="text" class="form-control"  name="nom_stack_front" value="'.$crud->nom_stack_front.'" ></td>
                                        <td><input type="text" class="form-control"  name="image_stack_front" value="'.$crud->image_stack_front.'" ></td>
                                        <input type="hidden" name="id_stack_front" value="'.$crud->id_stack_front.'">
                                        <td> <input type="submit" class="btn btn-primary" name="update" value="Modifier"></td>
                                        </form>
 
                                        </tr>';                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Stack-Front</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addStack_Front">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
            
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
                            
                            <td><input type="text" class="form-control"  name="nom_stack_front"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_stack_front"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                      <h5>Stack Back</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudSB'] as $crudSB){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Stack_Back">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudSB->id_stack_back.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_stack_back" value="'.$crudSB->nom_stack_back.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_stack_back" value="'.$crudSB->image_stack_back.'" ></td>';
                                        echo '<input type=hidden name="id_stack_back" value="'.$crudSB->id_stack_back.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Stack-Back</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addStack_Back">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
                            
                            <td><input type="text" class="form-control"  name="nom_stack_back"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_stack_back"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                    <h5> Team</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudT'] as $crudT){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Team">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudT->id_team.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_team" value="'.$crudT->nom_team.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_team" value="'.$crudT->image_team.'" ></td>';
                                         echo '<input type=hidden name="id_team" value="'.$crudT->id_team.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Team</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addTeam">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
   
                            <td><input type="text" class="form-control"  name="nom_team"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_team"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                    <h5>Crud stack graphique</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudG'] as $crudG){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Graph">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudG->id_graph.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_graph" value="'.$crudG->nom_graph.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_graph" value="'.$crudG->image_graph.'" ></td>';
                                        echo '<input type="hidden" name="id_graph" value="'.$crudG->id_graph.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Graphic</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addGraph">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
                           
                            <td><input type="text" class="form-control"  name="nom_graph"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_graph"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                    <h5>Stack Versioning</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudV'] as $crudV){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Versionning">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudV->id_version.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_version" value="'.$crudV->nom_version.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_version" value="'.$crudV->image_version.'" ></td>';
                                        echo '<input type="hidden" name="id_version" value="'.$crudV->id_version.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout stack versioning</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addVersionning">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                               
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                                                                    
                            <tr>                            
                            <td><input type="text" class="form-control"  name="nom_version"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_version"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout"></td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                        <h5>Crud ide</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudId'] as $crudId){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Ide">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudId->id_ide.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_ide" value="'.$crudId->nom_ide.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_ide" value="'.$crudId->image_ide.'" ></td>';
                                        echo '<input type="hidden" name="id_ide" value="'.$crudId->id_ide.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Ide</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addIde">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                               
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
                            
                            <td><input type="text" class="form-control"  name="nom_ide"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_ide"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>    
                    <h5>Crud institution de formation</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Modifier</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                                   
                                foreach($data['crudI'] as $crudI){
                                        echo '<form method="post" action="'. WWW_ROOT .'admins/update_Institution">';
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo '<td>'.$crudI->id_instit.'</td>';
                                        echo '<td><input type="text" class="form-control"  name="nom_institution" value="'.$crudI->nom_institution.'" ></td>';
                                        echo '<td><input type="text" class="form-control"  name="image_institution" value="'.$crudI->image_institution.'" ></td>';
                                        echo '<input type="hidden" name="id_instit" value="'.$crudI->id_instit.'">';
                                        echo '<td> <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                                        </td>';
                                        echo '</form>';
                                                                           
                                        
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table> 
                        <br>
                        <hr>
                        <h5>Ajout Institution</h5>

                        <form method="post" action="<?= WWW_ROOT ?>admins/addInstitution">
                            <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                               
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Ajout</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               
                                                   
                              
                            <tr>
                            
                            <td><input type="text" class="form-control"  name="nom_institution"  placeholder="nom"></td>
                            <td><input type="text" class="form-control"  name="image_institution"  placeholder="image"></td>
                                       
                            <td> <input type="submit" class="btn btn-primary" name="ajout" value="Ajout">
                                        </td>
                            </form>           
                            </tr>                                                                 
                            
                         
                            </tbody>
                        </table>
                        <br>
                        <hr>
                        <br>
                   
                    </div> 
                </div>  
            </section>
                    
    </div>
    
        <?php
        require ROOT . '/views/includes/footer.php';
        ?>