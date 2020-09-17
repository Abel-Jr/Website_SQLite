<?php
session_start();
//require 'connexion.php';
//var_dump($_POST);
/*
require 'database.php';*/
$data=false;

try{
    $pdo = new PDO('sqlite:database.db');

    $mail = htmlspecialchars($_POST["InputEmail"]);
    $hash = htmlspecialchars(sha1($_POST["InputPassword"]));
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT DISTINCT * FROM Client WHERE Email=\"$mail\" AND Password=\"$hash\";");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e){
    $e->getMessage();
}
if ($data){
    foreach($data as $row) { 
        // iterate over values in each row
        foreach($row as $v) { 
            //echo $v, " ";
            //exit();
        }
        if ($row["Email"]==$mail && $row["Password"]==$hash){
            echo ("Votre nom est ".$row["Nom"]) ; 
            $_SESSION["Nom"] = $row["Nom"];
            $_SESSION["Prenom"] = $row["Prenom"];
            $_SESSION["Adresse"] = $row["Adresse"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Password"] = $row["Password"];
            $_SESSION["Ville"] = $row["Ville"];
            $_SESSION["Province"] = $row["Province"];
            $_SESSION["BP"] = $row["BP"];

            echo "<script type=\"text/javascript\">";
            echo "window.location.href = \"connected.php\";";
            echo "</script>";
            exit();
        } 
    }
} else {
    

    echo "<script type=\"text/javascript\">";
                        
    echo "var msg=\"Cet utilisateur n'existe pas\";";
    echo "console.log(msg);";
    echo "alert(msg);";
    echo "window.location.href = \"connexion.php\";";                       
        
    echo "</script>";

}





?>