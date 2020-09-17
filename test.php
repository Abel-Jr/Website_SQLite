<?php
session_start();

if (isset($_SESSION)){

} else{
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
            <title>Facturation_AIServices</title>
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
                        <a class="nav-item nav-link active" href="index.php">Accueil</a>
                    
                        <a class="nav-item nav-link" href="facturation.php"><b>Facture</b><span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="contact.php">Contact</a>
                    
                    </div>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <!--input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button!-->
                    <a class="nav-item nav-link" href="connexion.php">Connexion</a>
                </form>
        
        
            </nav>

        <br> <br>

        


        </header>
        <br>
    
        <div class="container">
        <h2>Facture cree</h2>
            <div class="row">
            <!--h2>Facture cree</h2!-->
                    
                <div class="col">
                    <br>
                   <label><b>Id</b></label>&emsp;&emsp;<label value=""></label><br><br>
                   <label><b>Libelle</b></label>&emsp;&emsp;&emsp;&emsp; <?php echo $_SESSION["Libelle"]; ?><br><br>
                   <label><b>Quantite</b></label>&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION["Quantite"]; ?></label><br><br>
                   <label><b>Prix Unitaire</b></label>&emsp;&emsp;<?php echo $_SESSION["Prix_Unitaire"]; ?><br><br>
                   <label><b>Remise</b></label>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION["Remise"]; ?><br><br>
                   <label><b>Montant total</b></label>&emsp;&emsp;<?php echo $_SESSION["Montant_Total"]; ?><br><br>
                </div>
                <div class="col">

                    
                    <a href="generate_pdf.php"><button type="button" class="btn btn-success">Voir le format pdf</button></a>
                    <br><br>
                    <a href="index.php"><button type="button" class="btn btn-info">Retour a la page d'accueil</button></a>
                </div>

            </div>


        </div>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br>
        
        
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