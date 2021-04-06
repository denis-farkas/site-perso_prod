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
            <div class="row">                               
                <img class="ml-5 img-fluid" src="<?php echo WWW_ROOT; ?>public/images/logo.png" alt="Logo">                 
                <h2 class="mt-5">PANAMA HATS<br /><small class="text-muted">Chapeaux de Légende</small></h2>                              
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ml-5 mx-auto">                        
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/montecristi">MONTECRISTI</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/fedora">FEDORA</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/mode">MODE</a></h3>
                    </li>
                
                </ul>
            </nav>
                                     
          
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/palme.jpg" alt="Palme">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/fibre.jpg" alt="Toquilla">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/process.jpg" alt="Process">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        
            <div class="jumbotron">
                <ol class="breadcrumb ml-5">
                    <li class="breadcrumb-item"><a href="<?= WWW_ROOT ?>pages/index">Boutique</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo WWW_ROOT .'produits/'.$data['produit']->categorie_produit; ?>"><?=$data['produit']->categorie_produit ?></a></li>
                    <li class="breadcrumb-item active"><?= $data['produit']->nom_produit ?></li>
                </ol>
                <div class="container backy">                           

                    <div class="row">
                        <div class="col-md-6 w-100 mt-5">
                        <img class="img-fluid w-75 m-5" src="<?php echo WWW_ROOT.'public/images/hats_big/'.$data['produit']->image_produit; ?>" alt="">   
                        </div>
                        <div class="col-md-6 mt-5 w-100">
                       
                        <h4 mt-5><?php echo $data['produit']->categorie_produit.' '.$data['produit']->nom_produit; ?></h4>
                        <span class="badge badge-pill badge-success">Disponible</span>
                        <p class="mt-4"><?= $data['detail']->description ?></p>
                        <img class="img-thumbnail ml-5 " src="<?php echo WWW_ROOT.'public/images/palme/'.$data['detail']->img_palme; ?>" alt="">
                        <span class="ml-2">Calibre de palme de: <?= $data['detail']->calibre ?> mm.</span>
                        <h2 class="gold mt-4 text-center"><?= $data['produit']->prix_produit ?> €</h2>
                        <br />
                        <form action="<?php echo WWW_ROOT;?>commandes/commande" method="post">
                            <fieldset>
                            <div class="row">
                                <div class="form-group">  
                                    <?php 
                                    echo ' <label for="article">Article</label>
                                    <select class="form-control" id="article" name="id_article">';
                                    foreach($data['articles'] as $articles){
                                        if($articles->quantite >= 1){
                                            echo '<option value="'.$articles->id_article.'" >';
                                            echo 'Couleur : '.$articles->nom_couleur. ', ';
                                            echo ' Taille : '.$articles->nom_taille.', soit : '.$articles->cm_taille.'</option>';
                                        }
                                    }
                                    echo '</select>';
                                    ?>  
                                </div>   
                                    <div class="form-group  ml-3">
                                    <label for="quantite">Quantité</label>
                                    <input type="number" class="form-control" id="quantite" name="quantite" value="1">
                                    </div>
                                
                            </div>
                            <div class="form-group m-4">
                                <p>Couleur(s) disponible(s) : </p>
                                <?php
                                $color= 'Neutre';
                                foreach($data['articles'] as $article){
                                        $j = $article->nom_couleur;
                                        if($color != $j){echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/'.$article->image_couleur.'" alt="">';}
                                        $color=$j;
                                    }                                               
                                ?>
                            </div>                                                       

                            <input type="submit" class="btn btn-primary" name="ajout" value="Ajouter au panier">
                            </fieldset>
                            </form>                        
                       
                        </div>
                    </div>
                    <div class="row mt-5 text-center">
                        <div class="col-md-2 w-100"></div>

                        <div class="col-md-8 w-100">
                            <?php
                            require (ROOT.'views/includes/nav_tab.php');
                            ?>
                        </div>
                        
                        <div class="col-md-2 w-100"></div>
                    </div>
                </div>    
               
            </div>                
            
       


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
