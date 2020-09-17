<?php
require 'database.php';
Client_table();
Feedback_table();


if (isset($_POST["send"])){
    if (!empty($_POST["txtName"]) && !empty($_POST["txtEmail"]) && !empty($_POST["txtSubject"]) && !empty($_POST["txtMessage"])){
       $_nom = htmlspecialchars($_POST["txtName"]) ;
       $_mail = htmlspecialchars($_POST["txtEmail"]);
       $_sujet = htmlspecialchars($_POST["txtSubject"]) ;
       $_message = htmlspecialchars($_POST["txtMessage"]);

       insertFeedback($_nom,$_mail,$_sujet,$_message);
       header('Location: message_envoye.php');
    }
} else {
    
}


?>



<!DOCTYPE html>


    <html>
        <head>
            <meta charset ="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Contact_AIServices</title>
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
                    <a class="nav-item nav-link" href="index.php">Accueil</a>
                    
                    <a class="nav-item nav-link" href="facturation.php">Facture</a>
                    <a class="nav-item nav-link active" href="contact.php"><b>Contact</b><span class="sr-only">(current)</span></a>
                    
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

        <br><br>
        <hr class="separator">
        <br><br>
        <div class="container contact-form">
            <div class="contact-image">
                <img src="Services-Contact-Solutions-contactez-nous.png" alt="conact"/>
            </div>
            <form method="POST">
                <h3>Une question ? Suggestion ? Un problème ? Laissez nous un message</h3>
                <br>
               <!--div class="row"--->
                <div class="row justify-content-center">   
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Votre mail ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtSubject" class="form-control" placeholder="Sujet ">
                        </div>
                        <div class="form-group">
                            <textarea name="txtMessage" class="form-control" placeholder="Votre message" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            
                            <!--button type="button" name="send" class="btn btn-primary" >Envoyer</button!-->
                            <input type="submit" id="send" name="send" value="Envoyer"> <br>
                        </div>
                    </div>
                    
                </div>
            </form>
    </div>
    <br> <br>
    <br> <br>

    

    <!--div class="foot" style="background-color:powderblue;"!-->
    <!--div class="foot" style="background-color:rgb(8, 8, 8);"!-->
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




    <!--/div!-->

    </body>
    </html>