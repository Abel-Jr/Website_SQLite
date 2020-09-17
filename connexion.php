<?php
session_start();

if (isset($_POST["connexion"])){
    if (!empty($_POST["InputEmail"]) && !empty($_POST["InputPassword"])){


    }
}


?>


<!DOCTYPE html>


    <html>
        <head>
            <meta charset ="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Connexion_AIServices</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel ="stylesheet" href="index.css">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            



    </head>
    <body>
        <header>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="logo1.png" alt="" height="50" weight="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="index.php">Accueil</a>
                    <!--a class="nav-item nav-link active" href="#">Connexion</a><span class="sr-only">(current)</span!-->
                    <a class="nav-item nav-link" href="facturation.php">Facture</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                    
                </div>
            </div>
            
        
        
        </nav>

        <br> <br>

        </header>
        
        <div class="container">
            <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <h2> Connexion a AI Services </h2>
               
                <form action="traitement.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons vos données avec personne d'autre</small>
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" name="InputPassword" id="InputPassword" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                </div>
                <button type="submit" class="btn btn-success" name="connexion">Connexion</button>
                <h2> Nouveau à AI ? </h2>
                
                </form>

                <button type="submit" class="btn btn-info"><a href="inscription.php">S'inscrire</a></button>

            </div>
  
        </div>
        </div>
        <br> <br><br><br><br><br><br><br><br><br><br><br>

        <footer class="page-footer font-small teal pt-4" style="background-color:rgb(8, 8, 8); color:aliceblue;">
            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">

                            <!-- Content -->
                            <h5 class="text-uppercase font-weight-bold">Prestations de services</h5>
                            <p>Nous poroposons nos services aux petites PME et aux particuliers voulant archivés et reformés leurs process de facturation</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none pb-3">

                        <!-- Grid column -->
                        <div class="col-md-6 mb-md-0 mb-3">

                            <!-- Content -->
                            <h5 class="text-uppercase font-weight-bold">Merci de nous accorder votre confiance</h5>
                            <p>Nous protégeons vos données et avons améliorés en ce sens notre politique de confidentialité</p>

                        </div>
                        <!-- Grid column -->

                </div>
            <!-- Grid row -->

            </div>
            <!-- Footer Text -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3"><b>© 2020 Copyright:
                AI Services</b>
            </div>
            <!-- Copyright -->
            




        </footer>



    </body>



    </html>