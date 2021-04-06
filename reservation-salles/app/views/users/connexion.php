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
        <div class="wrapper style3 container special">    
		    <h2>Connectez-vous pour<strong> réserver votre espace</strong></h2>
    
            <div class="row">
                <div class="col-6 col-12-narrower"> 
                    <section>
              

                    <form action="<?php echo URLROOT; ?>/users/connexion" method ="POST">
                    <label for="login">Login </label> 
                    <input type="text" placeholder="Login *" name="login"><br/>
                    <label for="password">Password </label> 
                    <input type="password" placeholder="Password *" name="password"><br/>
                    <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                    </span>

                    <button id="submit" type="submit" value="submit" name="submit">Se connecter</button>

                    <p class="options">Pas encore inscrit? <a href="<?php echo URLROOT; ?>/users/inscription">Créez un compte!</a></p>
                    </form>
                    </section>
                </div>
            
                <div class="col-6 col-12-narrower">
                    <figure class="image featured">
                        <img src="<?php echo URLROOT; ?>/public/images/marseille.png" alt="ville de Marseille">
                    </figure>
                </div>
            </div>    
        </div>       
    </div>
    
</article>
<div class="footer">
    <?php
       require APPROOT . '/views/includes/footer.php';
    ?>
</div>