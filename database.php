<?php
// Create Personne Table
try{
    function Client_table(){

        $pdo = new PDO('sqlite:database.db');
        $pdo->query(" CREATE TABLE IF NOT EXISTS Client (
            Nom	TEXT NOT NULL,
            Prenom	TEXT NOT NULL,
            Adresse TEXT NOT NULL,
            Email	TEXT NOT NULL PRIMARY KEY,
            Password	TEXT NOT NULL,
            Ville TEXT NOT NULL,
            Province TEXT NOT NULL,
            BP TEXT NOT NULL
        );");
 

    }
} catch(Exception $e){
 $e->getMessage();
}

// Create Feedback table

try{
    function Feedback_table(){
    
        $pdo = new PDO('sqlite:database.db');
        $pdo->query("   
        CREATE TABLE IF NOT EXISTS Feedback (
            id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE ,
            Nom	TEXT NOT NULL,
            Mail	TEXT NOT NULL,
            Sujet	TEXT NOT NULL,
            Comment	TEXT NOT NULL
            
            
        );");
     
    
    }
} catch(Exception $e){
    $e->getMessage();
}





// Create Facture Table
try{
    function Facture_table(){

        $pdo = new PDO('sqlite:database.db');
        $pdo->query(" CREATE TABLE IF NOT EXISTS Facture (
            id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	    	client_nom TEXT NOT NULL,
	    	client_prenom TEXT NOT NULL,
	  	    client_adresse TEXT NOT NULL,
            client_ville TEXT NOT NULL,
		    client_province TEXT NOT NULL,
		    client_bp TEXT NOT NULL,
	        Libelle TEXT NOT NULL,
	        Quantite INTEGER NOT NULL,
	        Prix_Unitaire INTEGER NOT NULL,
	        Montant_total INTEGER NOT NULL,
	        Remise INTEGER NOT NULL,
	        datetime date NOT NULL
        );");
 

    }
} catch(Exception $e){
 $e->getMessage();
}

// Fonction pour insérer des données dans la table Facture


try{


    function insertFacture($Lname,$Fname,$Address,$city,$Etat,$boîte,$libelle,$quantite,$prix_unitaire,$montant_total,$remise){

        $today = date("Y-m-d H:i:s");
        $pdo = new PDO('sqlite:database.db');
        $pdo->query(" INSERT INTO Facture (client_nom,client_prenom,client_adresse,client_ville,client_province,client_bp,Libelle,Quantite,Prix_Unitaire ,Montant_total ,Remise , datetime)
            VALUES ('$Lname','$Fname','$Address','$city','$Etat','$boîte','$libelle','$quantite','$prix_unitaire','$montant_total','$remise','$today')
        ;");
        $_SESSION["Libelle"] = $libelle ;
        $_SESSION["Quantite"] = $quantite ;
        $_SESSION["Prix_Unitaire"] = $prix_unitaire ;
        $_SESSION["Montant_Total"] = $montant_total ;
        $_SESSION["Remise"] = $remise ;
        $_SESSION["Date"] = $today ;
        
        echo "<script type=\"text/javascript\">";
                        
        echo "var msg=\"Operation realise avec succes\";";
        echo "console.log(msg);";
        echo "alert(msg);";
        echo "window.location.href = \"test.php\";";                       
        



        echo "</script>";
        
    }

} catch(Exception $e){
    $e->getMessage();
} catch (mysqli_sql_exception $e){
    echo "<script type=\"text/javascript\">";
                        
        echo "var msg=\"Operation non reussit, Veuillez recommencer\";";
        echo "console.log(msg);";
        echo "alert(msg);";
        echo "window.location.href = \"ajouter_facture.php\";";                       
        



        echo "</script>";
} catch(PDOException $e){
    echo "<script type=\"text/javascript\">";
                        
        echo "var msg=\"Operation non reussit, Veuillez recommencer\";";
        echo "console.log(msg);";
        echo "alert(msg);";
        echo "window.location.href = \"ajouter_facture.php\";";                       
        



        echo "</script>";
}






// Fonction pour insérer des données dans la table Feedback


try{


    function insertFeedback($nom,$mail,$sujet,$message){

    
        $pdo = new PDO('sqlite:database.db');
        $pdo->query(" INSERT INTO Feedback (Nom,Mail,Sujet,Comment) 
            VALUES ('$nom','$mail','$sujet','$message')
        ;");
       
    }

} catch(Exception $e){
    $e->getMessage();
}







// fonction pour insérer des données dans la table Personne

try{


    function insertClient($nom,$prenom,$adresse,$mail,$pass,$ville,$province,$bp){

        $hash_pass=sha1($pass);
        $pdo = new PDO('sqlite:database.db');
        $stmt = $pdo->prepare(" INSERT INTO Client (Nom,Prenom,Adresse,Email,Password,Ville,Province,BP) 
            VALUES ('$nom','$prenom','$adresse','$mail','$hash_pass','$ville','$province','$bp')
        ;");
        $stmt->execute();
    }

} catch(Exception $e){
    $e->getMessage();
}

// fonction pour afficher des données dans la table Personne

try{
    function read(){

        $pdo = new PDO('sqlite:database.db');
           
            

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM Client;");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $row) { 
            // iterate over values in each row
            foreach($row as $v) { 
                echo $v, " ";
            }
            echo "<br>";
        }



    }
} catch(Exception $e){
    $e->getMessage();
}


?>



