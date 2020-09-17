<?php
session_start();

require 'database.php';

if ($_SESSION){
    if (isset($_POST["register"])){
        if (!empty($_POST["libelle"]) && !empty($_POST["quantite"]) && !empty($_POST["unitaire"]) && !empty($_POST["remise"]) && !empty($_POST["montant"])){

            $libelle = htmlspecialchars($_POST["libelle"]);
            $Quantite = htmlspecialchars($_POST["quantite"]);
            $Prix_Unitaire = htmlspecialchars($_POST["unitaire"]);
            $Montant_total = htmlspecialchars($_POST["montant"]);
            $Remise = htmlspecialchars($_POST["remise"]);
            
            insertFacture($_SESSION["Nom"],$_SESSION["Prenom"],$_SESSION["Adresse"],$_SESSION["Ville"],$_SESSION["Province"],$_SESSION["BP"],$libelle,$Quantite,$Prix_Unitaire,$Montant_total,$Remise);

            



        }
    }
} else {

    echo "<script type=\"text/javascript\">";
                        
        echo "var msg=\"Vous devez être connecte pour effectuer cette action, vous serez redirige vers la page de connexion\";";
        echo "console.log(msg);";
        echo "alert(msg);";
        echo "window.location.href = \"connexion.php\";";                       
        



    echo "</script>";

}

?>


<!DOCTYPE html>
 

    <html>
        <head>
            <meta charset ="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Facture_AIServices</title>
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
                    
                            <a class="nav-item nav-link active" href="#"><b>Facture</b><span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="contact.php">Contact</a>
                            
                        </div>
                    </div>
                    <form class="form-inline my-2 my-lg-0">

                        <a class="nav-item nav-link" href="connexion.php">Connexion</a>
                    </form>
        
        
                </nav>

                <br> <br>

            </header>


            <div class="container" >
                <div class="row">
                    <div class="col-6 col-md-4" id="ajouter">
                        <h2>Nouvelle Facture</h2><br>
                        <form method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Libelle de l'article" name="libelle" required>
                                </div>
                    
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="quantite" placeholder="Quantite" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="unitaire" placeholder="Prix Unitaire" required>
                                </div>
                            </div>

                            <br><br>
                            <div class="row">

                                <div class="col">
                                    <input type="text" class="form-control" name="remise" placeholder="Remise" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="montant" placeholder="Montant Total" required>
                                </div>
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary" name="register">Enregistrer</button>

                        </form>
                        <br><br>
                    </div>
                </div>
            </div>








            <br><br><br><br>

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
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                AI Services
            </div>
            <!-- Copyright -->
            




        </footer>

        
        </body>
    </html>
