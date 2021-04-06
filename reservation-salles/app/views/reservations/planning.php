<?php
   require APPROOT . '/views/includes/head.php';
?>
<body class="index">
<div class="navbar">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>
<article id="main">
    <header class="special container">
		<h2>Réserver<strong> My TeamSpace</strong></h2>
    </header>
    <div class="content">
        <section class="wrapper style2 container special-alt">
        
            <div class="col-10 col-12-narrower">									
                <h2>Planning des réservations</h2>
                    <p>Vous pouvez réserver <strong>My TeamSpace </strong>du lundi au vendredi 
                    et de 8h à 19h.<?php if(empty($_SESSION)){echo ' (seulement aprés avoir été inscrit et connecté.)';}?></p>	
                    
                    <?php
                    
                    $monday=$data['monday'];
                    $monday = str_replace('-', '/', $monday);
                   
                    if(!empty($_SESSION['error-sys'])){echo'<p>'.$_SESSION['error-sys'].'</p>';}
                    ?>     

                <div class="row gtr-0 aln-center">
                    <?php 
                    $i=0;
                    while($i<5)
                    { 
                        $jour_strt=strtotime($monday.'+'.$i.'days');
                        $array_jour=getdate($jour_strt);
                        $jour_year=$array_jour['yday'];
                        $jour = date('Y-m-d',strtotime($monday.'+'.$i.'days'));
                            
                        
                            echo '<div class="card">';
                            echo '<form method=POST action="'.URLROOT.'/pages/reservform">'; 
                                echo'<h1>Date: '.$jour.'</h1>';
                                echo'<ul>';
                                    
                                for($j=8; $j<19;$j++){ 
                                    echo '<li>'.$j.'H:00</li>';
                                     $reserved=false;
                                    foreach($data['results'] as $result):
                                        
                                       $array=getdate($result->strt_debut);
                                     
                                      $day_year=$array['yday'];
                                       $hours=$array['hours']; 

                                       
                                        if ($day_year==$jour_year && $hours==$j){
                                            $reserved=true;
                                          
                                            echo '<div class="little-card">';                                          
                                            echo '<li>'.$result->titre.'</li>';
                                            echo '<li>'.$result->login.'</li>';                                           
                                            if(!empty($_SESSION)){echo '<a class="button small" href="'.URLROOT.'/reservations/afficherReservation/'.$result->id.'">Voir</a>';}
                                            echo '</div>';
                                           
                                        }  endforeach; 
                                   
                                        if($jour>=date('Y-m-d')){
                                            if($reserved==false && !empty($_SESSION)) {echo '<li><input id="c'.$j.'" type="checkbox" name="debut'.$j.'" value="'.$j.'">
                                                <label>Réserver</label>
                                                </li>';}  }else{echo '<li>-</li>';} 
                                       
                                          
                                      
                                }
                                        
                                       
                                      
                                   
                    
                            echo '</ul>';
                            echo '<input type="hidden" name="jour" value="'.$jour.'">';
                            
                            if(isset($_SESSION['id'])){ echo '<input type="hidden" name="id_utilisateur" value="'.$_SESSION['id'].'" >';
                                if($jour>=date('Y-m-d')){echo'<input class="small" type="submit" name="reserver" value="Réserver" >';}
                            }
                            echo'</form> '; 
                            echo'</div>'; 
                                  
                            
                                  
                        $i++;
                    } ?>
                </div>				
                                        
            </div>								
      
        </section>
    </div>
</article>

                                
<div class="footer">
    <?php
       require APPROOT . '/views/includes/footer.php';
    ?>
</div>