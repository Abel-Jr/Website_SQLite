<?php
require 'database.php';
Facture_table();
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

            <div class="container">
                <div class="row">
                    <div class="col">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                    </div>
                    <div class="col-md-auto">
                    
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </div>
                </div>
            </div>
            <br> <br>

            
           
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="blue-welcome-church-video-poster-template-df977a81710d4201a1a2a6546958ea54_screen.jpg" class="d-block w-100" alt="..." width="1000" height="250">
                    </div>
                    <div class="carousel-item">
                        <img src="179000-775d91cdf52647cfb6bff5d53ac7eb6c.jpg" class="d-block w-100" alt="..." width="1000" height="250">
                    </div>
                    <div class="carousel-item">
                        <img src="20966363-24205341.png" class="d-block w-100" alt="..." width="1000" height="200">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br> <br>
        <hr class="separator">


        <div class="container">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary"><a href="ajouter_facture.php" style="color:aliceblue;">Ajouter</a></button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary"><a href="#" style="color:aliceblue;">Modifier</a></button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger"><a href="#" style="color:aliceblue;">Supprimer</a></button>
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