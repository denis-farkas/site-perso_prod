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
        
        <div class="row">
            <div class="col-sm-12 col-md-3 my-5 text-center">
                <div class="row">
                    <aside class="col-md-12">
                        <?php
                        require (ROOT.'views/includes/aside.php');
                        ?>  
                    </aside>             
                    
                </div>
            </div>
            <section class="col-sm-12 col-md-9 my-5 text-center">
                <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="jumbotron text-left">
                        <h1 class="display-5">Le Montecristi</h1>
                        <p class="lead">Le Montecristi est le Panama le plus réputé et recherché pour son extrême finesse.</p>
                        <hr class="my-4">
                        <p>Les artisans de cette petite bourgade située dans la province de Manabi,
                         possèdent un tel savoir-faire dans le domaine technique de la fabrication
                          artisanale du chapeau qu'ils parviennent à obtenir un degré de perfection, rarement égalé.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <img class="img-fluid w-100 mt-2" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">
                    </div>

                </div>
               
                <div class="jumbotron">
                    <h1 class="audrey display-5 mb-5">Catalogue</h1>
                  
               
              
                    <?php foreach($data['produits'] as $montecristi){
                        echo '
                        <div class="row back">
                            <div class="col-md-4 w-100">
                                <img class="img-fluid w-75 mt-1" src="'.WWW_ROOT.'public/images/hats_big/'.$montecristi->image_produit.'" alt="montecristi">   
                            </div>
                            <div class="col-md-4 mt-3 w-100>
                                <p class="lead mt-5">Exclusivité Web!</p>
                                <h4 mt-5>'.$montecristi->origine_produit.' '.$montecristi->nom_produit.'</h4><br>
                                <span class="badge badge-pill badge-success">Disponible</span>
                            </div>
                            <div class="col-md-4  w-100">
                                <h4 class="gold mt-5">'.$montecristi->prix_produit.' €</h4>
                                <br />
                                <a class="btn btn-outline-warning"  href="'.WWW_ROOT.'produits/ficheArticle/'.$montecristi->id_produit.'">Voir</a> 
                            </div>
                        </div>';
                    }
                    ?>
                </div>
                
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
