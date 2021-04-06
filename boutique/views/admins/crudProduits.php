<?php
   require (ROOT.'views/includes/head.php');
?>
 <body>

    <div class="container-fluid">
        
        <div class="col-md-12">
            <?php
            require (ROOT.'views/includes/navigation.php');
            ?>
        </div>
        
        
        <div class="col-md-12 mt-5">
            <div class="row banner banner_image3 pt-3">                               
                <img class="ml-5 img-fluid mt-5" src="<?php echo WWW_ROOT; ?>public/images/logo.png" alt="Logo">                 
                <h2 id="cache" class="mt-5 pt-5 champain">PANAMA HATS<br /><small>Chapeaux de Légende</small></h2>                              
            </div>
        </div>                                    
        
       
        <div class="row">
            <section class="col-sm-12 col-md-3 my-5 text-center">
                
                    <aside class="col-md-12">
                        <?php
                        require (ROOT.'views/includes/asideCrud.php');
                        ?>  
                    </aside>         
                
            </section>
            <section class="col-sm-12 col-md-9 my-5">
                <div class="container">
                    
                    <div class="col-md-12">
                        <h5>PRODUITS</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Origine </th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['produits'] as $produit){
                                   
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$produit->id_produit."</td>";
                                        echo "<td>".$produit->origine_produit."</td>";
                                        echo "<td>".$produit->categorie_produit."</td>";
                                        echo "<td>".$produit->genre_produit."</td>";
                                        echo "<td>".$produit->nom_produit."</td>";
                                        echo "<td>".$produit->image_produit."</td>";
                                        echo "<td>".$produit->prix_produit."</td>";
                                    
                                        echo '<td><a  href="'.WWW_ROOT .'admins/formProduit/'.$produit->id_produit.'">
                                        Modifier</a></td>';
                                        echo "</tr>";
                                                                     
                                    } 
                                    ?>  
                            </tbody>
                        </table><br>

                        
                    </div> 
                </div>  
              
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
