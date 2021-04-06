<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <script src="assets/js/jquery.min.js"></script>
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <header class="page-header" >
            <div id="banner">
            </div>    
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                
               
                </ul>  
            </div>
        </nav>
        <main id="jumbo" class="jumbotron">
            <section id="start" class="visible">
                <div class="row">
                    <section class="col-lg-6 col-sm-12">
                        <img class="img-small" src="assets/images/job.png" alt="bol">
                    </section>
                    <section class="col-lg-6 col-sm-12"><br/>
                        <h2 class="white mt-5">Bonjour la Team!</h2>
                        <p class="white mt-3">Connectez-vous (après inscription) pour accéder à la liste des tâches.</p>
                        <button type="button" onclick="inscrire()" class="btn btn-success btn-lg m-5">Inscription</button>
                        <button type="button" onclick="connect()" class="btn btn-warning btn-lg m-5">Connexion</button>
                    </section>
                </div>
            </section>

            <section id="signup" class="d-none">
                <div class="row">
                    <section class="col-lg-6 col-sm-12"><br/>
                        <p class="h4 text-center">Remplissez notre formulaire d'inscription</p>
                        <form  class="form" id="formSignup">
                            <div class="form-control">
                            <label for="login">login</label>
                                <input type="text"  name="login" placeholder="Login" required/>
                            </div>
            
                            <div class="form-control">
                            <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="aaa@bbb.com" required/>
                                
                                <i class="fa fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
            
                            <div class="form-control">
                            <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password"/>
                            </div>
                                
                            <div id="control" class="form-control">
                            <label for="rePassword">Confirmer</label>
                                <input type="password" id="rePassword" placeholder="Confirmer Password"/>
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <button>Submit</button>
                        </form>
                    </section>
                    
                    <section class="col-lg-6 col-sm-12 mt-5">
                        <img class="img-small" src="assets/images/note.png" alt="note">
                    </section>
                    
                </div>
            </section>
            <section id="connex" class="d-none">
                <div class="row">
                    
                    <section class="col-lg-6 col-sm-12">
                    <p class="h4 text-center">Connexion</p><br/>

                    <form class="form" id="formLogin" class="form">
                    
                        <div class="form-control">
                                <label for="login">Login</label>
                                <input type="txt"   name="login" placeholder="Entrer Login" required>
                            </div>

                        <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" id="emailCo" name="email" placeholder="email" required/>
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                            
                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" id="passwordCo" name="password" placeholder="Password" required/>
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                
        
                        <button>Submit</button>
                    
                    </form>
                                
                        
                    </section>
                    <section class="col-lg-6 col-sm-12 mt-5">
                        <img class="img-small" src="assets/images/ordi.png" alt="ordi">
                    </section>

                </div>
            </section>

        </main>
        <footer id="footer">
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled">
              <li class="float-lg-right"><a href="#top">Back to top</a></li>   
            </ul>
            
          </div>
        </div>
      </footer>
    </div>
    <script src="app.js"></script>   
    <script src="assets/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>