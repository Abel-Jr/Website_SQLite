<?php
session_start();
require('fpdf.php');

if ($_SESSION){
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Image('logo.png',15,6,40);
    $pdf->Cell(80);

    $pdf->Cell(30,10,'Facture',1,0,'C');
    $pdf->Ln(20);

    //$pdf->SetFont('Arial','',11); $pdf->SetXY( 122, 30 );
    //$pdf->Cell( 60, 8, "MA VILLE, le " . $$_SESSION["Date"], 0, 0, '');
    $pdf->SetFont('Arial','',11);
    $pdf->SetXY( 122, 30 );
    $pdf->Cell(30,10,$_SESSION["Date"],0,0,'');
    $pdf->SetFont('Arial','B',11); $x = 110 ; $y = 50;

    // observations
    $pdf->SetFont( "Arial", "BU", 10 ); $pdf->SetXY( 5, 75 ) ; $pdf->Cell($pdf->GetStringWidth("AI Services"), 0, "Observations", 0, "L");
    $pdf->SetFont( "Arial", "", 10 ); $pdf->SetXY( 5, 78 ) ; $pdf->MultiCell(190, 4, "Toujours la pour vous servir", 0, "L");

    // adr fact du client
    $pdf->SetXY( $x, $y ); 
    $pdf->Cell( 150, 8, $_SESSION["Nom"], 0, 0, ''); $y += 4;
    $pdf->SetXY( $x, $y ); $pdf->Cell( 100, 8, $_SESSION["Prenom"], 0, 0, ''); $y += 4;
    $pdf->SetXY( $x, $y ); $pdf->Cell( 100, 8, $_SESSION["Adresse"], 0, 0, ''); $y += 4;
    $pdf->SetXY( $x, $y ); $pdf->Cell( 100, 8, $_SESSION["Email"], 0, 0, ''); $y += 4;
    $pdf->SetXY( $x, $y ); $pdf->Cell( 100, 8, $_SESSION["Ville"] . ' ' .$_SESSION["BP"] , 0, 0, ''); $y += 4;



    // ***********************
    // le cadre des articles
    // ***********************
    // cadre avec 18 lignes max ! et 118 de hauteur --> 95 + 118 = 213 pour les traits verticaux

    $pdf->SetLineWidth(0.1); $pdf->Rect(5, 95, 200, 118, "D");
    // cadre titre des colonnes
    $pdf->Line(5, 105, 205, 105);
    // les traits verticaux colonnes
    $pdf->Line(145, 95, 145, 213); $pdf->Line(158, 95, 158, 213); $pdf->Line(176, 95, 176, 213); $pdf->Line(187, 95, 187, 213);

     // titre colonne
     $pdf->SetXY( 1, 96 ); $pdf->SetFont('Arial','B',8); $pdf->Cell( 140, 8, "Libelle", 0, 0, 'C');
     $pdf->SetXY( 145, 96 ); $pdf->SetFont('Arial','B',8); $pdf->Cell( 13, 8, "Quantite", 0, 0, 'C');
     $pdf->SetXY( 156, 96 ); $pdf->SetFont('Arial','B',8); $pdf->Cell( 22, 8, "Prix Unitaire", 0, 0, 'C');
     $pdf->SetXY( 177, 96 ); $pdf->SetFont('Arial','B',8); $pdf->Cell( 10, 8, "Remise", 0, 0, 'C');
     $pdf->SetXY( 185, 96 ); $pdf->SetFont('Arial','B',8); $pdf->Cell( 22, 8, "Total", 0, 0, 'C');

     $pdf->SetFont('Arial','',8);
     $y = 97;

     // libelle
     $pdf->SetXY( 7, $y+9 ); 
     $pdf->Cell( 140, 5, $_SESSION["Libelle"], 0, 0, 'L');

     // Quantité
     $pdf->SetXY( 145, $y+9 ); 
     $pdf->Cell( 13, 5, strrev(wordwrap(strrev($_SESSION["Quantite"]), 3, ' ', true)), 0, 0, 'R');


    // Prix Unitaire
    $nombre_format_francais = number_format($_SESSION["Prix_Unitaire"], 2, ',', ' ');
    $pdf->SetXY( 158, $y+9 ); $pdf->Cell( 18, 5, $nombre_format_francais, 0, 0, 'R');

    // Remise
    $nombre_format_francais = number_format($_SESSION["Remise"], 2, ',', ' ');
    $pdf->SetXY( 177, $y+9 ); $pdf->Cell( 10, 5, $nombre_format_francais, 0, 0, 'R');

/*
    // total
    $nombre_format_francais = number_format($_SESSION["Prix_Unitaire"]*$_SESSION["Quantite"], 2, ',', ' ');
    $pdf->SetXY( 187, $y+9 ); $pdf->Cell( 18, 5, $nombre_format_francais, 0, 0, 'R');
    
    $pdf->Line(5, $y+14, 205, $y+14);


*/

    // total
    $nombre_format_francais = number_format($_SESSION["Montant_Total"], 2, ',', ' ');
    $pdf->SetXY( 187, $y+9 ); $pdf->Cell( 18, 5, $nombre_format_francais, 0, 0, 'R');
    
    $pdf->Line(5, $y+14, 205, $y+14);


    
     //nom du fichier 
    $nom_file = "Facture " . $_SESSION["Date"] .'-' .".pdf";


    //$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
    $pdf->SetY(-15);
    $pdf->Output();


} else {

    
        echo "<script type=\"text/javascript\">";
                            
        echo "var msg=\"Vous devez être connecte pour effectuer cette action, vous serez redirige vers la page de connexion\";";
        echo "console.log(msg);";
        echo "alert(msg);";
        echo "window.location.href = \"connexion.php\";";                       
        echo "</script>";
    


}

?>