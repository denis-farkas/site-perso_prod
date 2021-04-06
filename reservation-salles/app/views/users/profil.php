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
		<h2><strong> My TeamSpace</strong></h2>
    </header>
    <div class="content">
        <div class="wrapper style3 container special">
           
            <div class="row">
                <div class="col-6 col-12-narrower">
                <h2>Modifier votre profil</h2>
                    <form method="POST" action="<?php echo URLROOT; ?>/users/profil">
                        <label for="login">Login </label> 
                        <input type="text"  value="<?php if(!empty($_SESSION['id'])){echo $_SESSION['login'];} ?>" name="login">
                        <label for="password">Password </label>
                        <input type="password" placeholder="Ancien ou nouveau password" name="password">
                        <label for="confirmPassword">Password </label>
                        <input type="password" placeholder="Confirmer Password *" name="confirmPassword"><br>
                        <span class="invalidFeedback">
                            <?php echo $data['confirmPasswordError']; ?>
                        </span>
                        <input type="hidden" value="<?php if(!empty($_SESSION['id'])){echo $_SESSION['id'];}?>" name="id">
                        <button id="submit" type="submit"  name="modifier">Modifier</button>

                       
                    </form>
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