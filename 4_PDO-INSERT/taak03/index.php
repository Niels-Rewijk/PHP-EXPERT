<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action="" method="POST">
                Naam: <input type="text" name="form_naam">
                Koop prijs: <input type="text" name="form_pprice">
                Verkoop prijs: <input type="text" name="form_sprice">
                
            <?php
                $database_lokatie     = 'localhost';
                $database_naam        = 'toolsforever';
                $database_gebruiker   = 'root';
                $database_wachtwoord  = '';

                $db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

                //gegevens uit een formulier ophalen met de post method.
                
                $naam = $_POST['form_naam'];
                $koopPrijs = $_POST['form_pprice'];
                $verkoopPrijs = $_POST['form_sprice'];

                // !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
                $sql = 'INSERT INTO products (name, purchase_price, selling_price) VALUES (:ph_name , :ph_purchase_price , :ph_selling_price)'; //sql query
                //een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
                $stmt = $db_conn->prepare($sql); //stuur naar mysql.
                $stmt->bindParam(":ph_name", $naam ); //verbind de waardes
                $stmt->bindParam(":ph_purchase_price", $koopPrijs ); //verbind de waardes 
                $stmt->bindParam(":ph_selling_price", $verkoopPrijs );               
                $stmt->execute();
                $db_conn = $stmt->fetchAll(PDO::FETCH_ASSOC);  
            ?>
            <input type="submit">
            </form> 
        </body>
    </html>