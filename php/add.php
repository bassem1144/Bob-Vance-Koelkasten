<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="../css/style_add.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();

    echo "<a href='admin.php'>Terug</a>";
    $host = "localhost";
    $databaseName = "bob_vance";
    $username = "bit_academy";
    $password = "bit_academy";

    $dsn = "mysql:host=$host;dbname=$databaseName";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo <<<END
    <h1>Koelkast toevoegen</h1>
    <form method="post" action="add.php">
    
    <label for="artikel_nummer">artikel_nummer</label>
    <input type="text" name="artikel_nummer"><br>
    
    <label for="prijs">prijs</label>
    <input type="text" name="prijs"><br>

    <label for="rating">rating</label>
    <input type="text" name="rating"><br>
    
    <label for="afmetingen">afmetingen</label>
    <input type="text" name="afmetingen"><br>

    <label for="image_url">image_url</label>
    <input type="text" name="image_url"><br> 
    
    <label for="energie_label">energie_label</label>
    <input type="text" name="energie_label"><br>   

    <label for="beschrijving">beschrijving</label>
    <input type="text" name="beschrijving"><br>   

    <label for="staat">staat</label>
    <input type="text" name="staat"><br> 

    <input name="submit" type="submit" value="Submit">
    </form>
    END;
        if (isset($_POST['submit'])) {
            $artikel = $_POST['artikel_nummer'];
            $prijs = $_POST['prijs'];
            $rating = $_POST['rating'];
            $afmetingen  = $_POST['afmetingen'];
            $image = $_POST['image_url'];
            $energie = $_POST['energie_label'];
            $beschrijving = $_POST['beschrijving'];
            $staat = $_POST['staat'];

            $sql = "INSERT INTO koelkasten (artikel_nummer,prijs,rating, afmetingen, image_url, energie_label, beschrijving, staat)
            VALUES (:artikel, :prijs, :rating, :afmetingen, :image_url,:energie_label ,:beschrijving, :staat)";


            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':artikel', $artikel);
            $stmt->bindParam(':prijs', $prijs);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':afmetingen', $afmetingen);
            $stmt->bindParam(':image_url', $image);
            $stmt->bindParam(':energie_label', $energie);
            $stmt->bindParam(':beschrijving', $beschrijving);
            $stmt->bindParam(':staat', $staat);

            $stmt->execute();

            echo "Bezig met opslaan...";
            header("Refresh:1");
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
    ?>
</body>

</html>