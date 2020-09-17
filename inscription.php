<?php
require 'database.php';
Client_table();
Feedback_table();
$test=false;

if (isset($_POST["register"])){

    if (!empty($_POST["Last_name"]) && !empty($_POST["First_name"]) && !empty($_POST["Address"]) && !empty($_POST["Email"]) && !empty($_POST["Password"]) && !empty($_POST["Password_bis"]) && !empty($_POST["City"]) && !empty($_POST["State"]) && !empty($_POST["Zip"])){

        $_Last_name = htmlspecialchars($_POST["Last_name"]);
        $_First_name= htmlspecialchars($_POST["First_name"]);
        $_Address = htmlspecialchars($_POST["Address"]);
        $_Email= htmlspecialchars($_POST["Email"]);
        $_Password = htmlspecialchars($_POST["Password"]);
        $_Password_bis = htmlspecialchars($_POST["Password_bis"]);
        $_City =htmlspecialchars($_POST["City"]);
        $_State = htmlspecialchars($_POST["State"]);
        $_Zip = htmlspecialchars($_POST["Zip"]);

        if ($_Password==$_Password_bis){
            $test=true;
            insertClient($_Last_name,$_First_name,$_Address,$_Email,$_Password,$_City,$_State,$_Zip);
            header('Location: redirect.php');

        } else{
            
            echo "<label id=\"error\"><b style=\"background-color:red;color:aliceblue;\"> Les mots de passe ne correspondent pas </b></label>";
        }
    }

}


?>



<!DOCTYPE html>


    <html>
        <head>
            <meta charset ="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Inscription_AIServices</title>
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
                    <a class="nav-item nav-link " href="facturation.php">Facture</a>
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

        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4"></div>
                <div class="col-6 col-md-4">
                    <h2> Inscription a AI Services </h2>
                    <form method="POST">



                        <div class="form-group">
                            <label for="Last_name">Nom</label>
                            <input type="text" class="form-control" id="Last_name" name="Last_name">
                        </div>
                        <div class="form-group">
                            <label for="First_name">Prénom</label>
                            <input type="text" class="form-control" id="First_name" name="First_name">
                        </div>

                    
                        <div class="form-group">
                            <label for="Address">Adresse</label>
                            <input type="text" class="form-control" id="Address" name="Address">
                        </div>


                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email">
                        </div>

                    
                        <div class="form-group">
                            <label for="Password">Mot de passe</label>
                            <input type="password" class="form-control" id="Password" name="Password">
                        </div>
                

                        <div class="form-group ">
                            <label for="Password_bis">Retapez le mot de passe</label>
                            <input type="password" class="form-control" id="Password_bis" name="Password_bis">
                        </div>
                
                
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="City">Ville</label>
                                <input type="text" class="form-control" id="City" name="City">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="State">Province</label>
                                <input type="text" class="form-control" id="State" name="State">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Zip">B.P</label>
                                <input type="text" class="form-control" id="Zip" name="Zip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary" name="register">Enregistrer</button>
                        <!--input type="submit" name="register" value="Enregister"!-->




                    </form>

                    
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