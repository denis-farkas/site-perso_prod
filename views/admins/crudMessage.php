<?php


require(ROOT . 'views/includes/head.php');
?>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo WWW_ROOT; ?>pages/index"><img src="<?php echo WWW_ROOT; ?>public/img/logo.png" data-active-url="<?php echo WWW_ROOT; ?>public/img/logo-active.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav  navbar-right main-nav">
                    <li><a href="<?php echo WWW_ROOT; ?>pages/index">Intro</a></li>
                    <li><a href="<?php echo WWW_ROOT; ?>pages/index#projets">Projets</a></li>
                    <li><a href="<?php echo WWW_ROOT; ?>pages/index#contacts">Contacts</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="header-proj">
        <div class="container">

        </div>
    </div>


    <div class="row">
        <section class="col-sm-12 col-md-3 col-lg-2 text-center">
            <aside class="col-md-12">
                <?php
                require(ROOT . 'views/includes/asideCrud.php');
                ?>
            </aside>
        </section>
        <section class=" col-sm-12 col-md-9 col-lg-10 ">
            <div class="col-md-12">
                <br>
                <h2>Message</h2>
                <br>
                <hr>
                <br>
                <h4>Lire messages</h4>


                <?php

                foreach ($data['Message'] as $message) {
                    echo '
                        <table class="table table-hover">
                        <tbody>
                        <tr> ID :' . $message->id_contact . '</tr>
                        <br>
                        <label for="pr"><h4>Date: </h4></label>
                        <tr id="pr">' . $message->date_registre . '</tr>                        
                        <br>
                        <label for="sr"><h4>Civilité: </h4></label>
                        <tr id="sr">' . $message->civilite . '</tr>
                        <br>
                        <label for="presu">Nom: </label>
                        <tr id="presu">' . $message->nom . '</tr>
                        <br>
                        <label for="presen">Email: </label>
                        <tr id="presen">' . $message->email . '</tr>
                        <br>
                        <label for="message">Message: </label>
                        <tr id="message">' . $message->message . '</tr>
                        </tbody>
                        </table> 
                        <br>';
                }
                ?>

            </div>
        </section>

    </div>

    <?php
    require ROOT . '/views/includes/footer.php';
    ?>