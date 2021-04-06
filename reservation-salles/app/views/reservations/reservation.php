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
            
            <h2>Evènement</h2>
                <table>
                    <tr>
                        <th>Login</th>
                        <td><?= $data->login ?> </td>
                    </tr>
                    <tr>
                        <th>Titre de l'évènement</th>
                        <td> <?= $data->titre ?></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><?= $data->description ?></td>
                    </tr>
                    <tr>
                        <th>Début de l'évènement</th>
                        <td><?= $data->debut ?></td>
                    </tr>
                    <tr>
                        <th>Fin de l'évènement</th>
                        <td><?= $data->fin ?></td>
                    </tr>
                </table>            
        </section>
    </div>
      
</article>
<div class="footer">
    <?php
       require APPROOT . '/views/includes/footer.php';
    ?>
</div>