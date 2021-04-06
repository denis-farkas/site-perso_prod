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
        <header class="page-header" id="top">
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
                    <a class="nav-link" href="#">TodoList
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                </ul>  
            </div>
        </nav>
        <main class="jumbotron">
        <div class="col-lg-6 col-sm-12 text-center">
            <h5 id="addError"></h5>
            <h3>Ajouter tâche</h3>
       
            <form id="addNewTache">
                    <input type="text" name="text" class="todo-input" />
                    <input type="hidden" name="date" value=" <?php echo date('Y-m-d'); ?>" />
                    <input type="hidden" name="statut" value="1" />
                    <button class="addButton" id="addButton" type="submit">
                        <i class="fa fa-plus-circle"></i>
                    </button>
            </form>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <h3>Tâches à effectuer</h3><br>
                <ul id="toDo" class="list-group todo-list">
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <h3>Tâches complétées</h3><br>
                <ul id="done" class="list-group todo-list">
                </ul>
            </div>
        </div>

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
    <script src="todo.js"></script>   
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>