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
        <section class="wrapper style2 special container medium">
            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
            
                <h2>Pour votre évènement du <?= $_POST['jour'] ?></h2>
           
            <form action="<?php echo URLROOT; ?>/reservations/reserver" method ="POST"> <!--/reservations/reserver/pages/resultat-->
            <p>les heures suivantes ont été enregistrées: </p>
            <ul><li>
                <?php 
                $count=0;
                for($i=8;$i<19;$i++){
                    if(isset($_POST['debut'.$i])){
                        
                        echo '<input type="hidden" name="jour" value="'.$_POST['jour'].'" />'; 
                        echo'<input type="hidden" name="debut'.$i.'" value="'.$i.':00:00" />';
                        $fin=$i+1;
                        echo'<input type="hidden" name="fin'.$i.'" value="'.$fin.':00:00" />';
                        echo '<p>début: '.$i.':00:00 - fin: '.$fin.':00:00</p>';
                        
                        $count=$count+$_POST["debut".$i];

                    }
               
                
                }
                echo"</li></ul>"; 
                
                if($count==0){echo "<p><b>Vous devez cocher au moins une plage horaire si vous voulez réserver notre salle</b></p>"; 
                    echo'<a href="'.URLROOT.'/reservations/planning" ><h2><b>Revenir à planning</b></h2></a>';} ?>
               
               
                <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id']; ?>" >          
                <label for="titre">Titre de l'évènement</label> 
                <input type="text" name="titre" required><br/>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" required><br/> 
                <br/>
                
                 <?php if($count!=0){echo '<button class="special" id="submit" type="submit" value="submit" name="submit">Reserver</button> ';}?>   
                
            </form>
        </section>
    </div>
      
</article>

<div class="footer">
    <?php
       require APPROOT . '/views/includes/footer.php';
    ?>
</div>