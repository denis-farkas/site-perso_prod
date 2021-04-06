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
            <div class="row banner banner_image1  pt-3">                               
                <img class="ml-5 img-fluid mt-5" src="<?php echo WWW_ROOT; ?>public/images/logo2.png" alt="Logo">                 
                <h2 id="cache" class="mt-5 pt-5 gold">PANAMA HATS<br /><small class="text-muted">Chapeaux de Légende</small></h2>                              
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
            <section class="col-sm-12 col-md-9 my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="<?php echo WWW_ROOT;?>achats/payer" method="post">
                            <fieldset>
                            <legend>MODALITES DE PAIEMENT</legend>

                            <table class="table table-hover">
                            <thead>
                            <tr class="table-active">
                                <th scope="col"> </th>
                                <th scope="col">Compagnie</th>
                                <th scope="col">modalites</th>
                                <th scope="col">Choisir</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['paiements'] as $paiement){
                                   
                                        echo '<td><img class="img-fluid" src="'.WWW_ROOT.'public/images/livraison/'.$paiement->logo.'" alt="Logo" ></td>';
                                        echo "<td>".$paiement->nom_paiement."</td>";
                                        echo "<td>".$paiement->mode_paiement."</td>";                                     
                                        echo '  <td><div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio'.$paiement->id_paiement.'" name="id_paiement" class="custom-control-input" 
                                                    value="'.$paiement->id_paiement.'">
                                                    <label class="custom-control-label" for="customRadio'.$paiement->id_paiement.'">Choisir</label>
                                                    </div>
                                                </div></td>';
                                        echo "</tr>";
                                                                     
                                    } 
                                    ?>  
                            </tbody>
                        </table>

                          
                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>" >
                            <input type="submit" class="btn btn-warning m-5" name="ajoutPaiement" value="Payer">
                            </fieldset>
                            </form>
                        </div> 
                                      
                        <div class="col-md-6 text-center">
                            <img class="img-fluid w-75 mt-5" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">    
                        </div> 
                    </div>  


               
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
