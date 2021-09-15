<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="" method="POST">
            Voornaam: <input type="text" name="form_firstname">
            Id: <input type="text" name="form_id">
            <?php
                $database_lokatie     = 'localhost';
                $database_naam        = 'toolsforever';
                $database_gebruiker   = 'root';
                $database_wachtwoord  = '';

                $form_firstname = $_POST['form_firstname'];
                $form_id = $_POST['form_id'];

                $db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
                            
                //UPDATE EEN WAARDE IN EEN DATABASE TABEL
                $sql = "UPDATE users SET firstname = :ph_firstname WHERE id = :id";
                $stmt = $db_conn->prepare($sql); //stuur naar mysql.
                $stmt->bindParam(":ph_firstname", $form_firstname );
                $stmt->bindParam(":id", $form_id );
                $stmt->execute();
            ?>
            <input type="submit">
        </form>
        <script src="" async defer></script>
    </body>
</html>