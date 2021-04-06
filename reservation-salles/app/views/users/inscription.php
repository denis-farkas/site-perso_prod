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
            <header class="major">
                <h2>Inscrivez-vous pour<strong> accéder à nos services</strong></h2>
            </header>
            <div class="row">
                <div class="col-6 col-12-narrower">

                    <section>
                        <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                        
                        <form  id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/inscription">
                        <label for="login">Login </label> 
                        <input type="text" placeholder="Login *" name="login">                 
                        <label for="password">Password </label>
                        <input type="password" placeholder="Password *" name="password">                    
                        <label for="confirmPassword">Password </label>
                        <input type="password" placeholder="Confirmer Password *" name="confirmPassword"><br>
                        <span class="invalidFeedback">
                            <?php echo $data['confirmPasswordError']; ?>
                        </span>

                        <button id="submit" type="submit" value="submit" name="inscrire">S'inscrire</button>

                     
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
