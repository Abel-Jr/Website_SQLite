<!DOCTYPE html>
    <html>
        <head>
            <meta charset ="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel ="stylesheet" href="index.css">
            <title> Recherche </title>

        </head>
        <body>

        <?php
            require 'database.php';
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
                    //echo $v, " ";
                    
                
                }
                echo ("Email : ");
                echo $row['Email'];
                echo "   Password: ";
                echo $row['Password'];
                echo "<br>";
                exit();
            }
        
    



        ?>

</body>
</html>
