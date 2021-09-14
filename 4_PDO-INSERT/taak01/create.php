<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>

            <form action="" method="POST">
                Voornaam: <input type="text" name="form_firstname">
                Achternaam: <input type="text" name="form_lastname">
                
            <?php
                $database_lokatie     = 'localhost';
                $database_naam        = 'toolsforever';
                $database_gebruiker   = 'root';
                $database_wachtwoord  = '';

                $db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

                //gegevens uit een formulier ophalen met de post method.
                
                $firstName = $_POST['form_firstname'];
                $lastName = $_POST['form_lastname'];

                // !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
                $sql = 'INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)'; //sql query
                //een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
                $stmt = $db_conn->prepare($sql); //stuur naar mysql.
                $stmt->bindParam(":ph_firstname", $firstName, ); //verbind de waardes
                $stmt->bindParam(":ph_lastname", $lastName ); //verbind de waardes                
                $stmt->execute();
                $db_conn = $stmt->fetchAll(PDO::FETCH_ASSOC);  
            ?>
            <input type="submit">
            </form>
        </body>
    </html>