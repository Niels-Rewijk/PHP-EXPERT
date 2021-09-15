<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action="" method="POST">
                Naam: <input type="text" name="form_naam">
                Adres: <input type="text" name="form_adres">
                Stad: <input type="text" name="form_stad">
                
            <?php
                $database_lokatie     = 'localhost';
                $database_naam        = 'toolsforever';
                $database_gebruiker   = 'root';
                $database_wachtwoord  = '';

                $db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

                //gegevens uit een formulier ophalen met de post method.
                
                $naam = $_POST['form_naam'];
                $adres = $_POST['form_adres'];
                $stad = $_POST['form_stad'];

                // !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
                $sql = 'INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address , :ph_city)'; //sql query
                //een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
                $stmt = $db_conn->prepare($sql); //stuur naar mysql.
                $stmt->bindParam(":ph_name", $naam ); //verbind de waardes
                $stmt->bindParam(":ph_address", $adres ); //verbind de waardes 
                $stmt->bindParam(":ph_city", $stad );               
                $stmt->execute();
                $db_conn = $stmt->fetchAll(PDO::FETCH_ASSOC);  
            ?>
            <input type="submit">
            </form> 
        </body>
    </html>