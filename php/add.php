<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bob Vance</title>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand mx-3" href="admin.php">Bob Vance Admin</a>
        <div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="admin.php">Home</a>
                <a class="nav-item nav-link active" href="add.php">Toevoegen</a>
                <a href="../index.php" class="btn btn-outline-danger" type="button">Uitloggen</a>
            </div>
        </div>
    </nav>
    <h1>Koelkast toevoegen</h1>
    <form class="mx-auto d-flex justify-content-center flex-column" method="post" action="add.php">

        <div class="">
            <label class="form-label" for="artikel_nummer">artikel_nummer</label>
            <input class="form-control" type="text" name="artikel_nummer"><br>
        </div>
        <label class="form-label" for="prijs">prijs</label>
        <input class="form-control" type="text" name="prijs"><br>

        <label class="form-label" for="rating">rating</label>
        <input class="form-control" type="text" name="rating"><br>

        <label class="form-label" for="afmetingen">afmetingen</label>
        <input class="form-control" type="text" name="afmetingen"><br>

        <label class="form-label" for="image_url">image_url</label>
        <input class="form-control" type="text" name="image_url"><br>

        <label class="form-label" for="energie_label">energie_label</label>
        <input class="form-control" type="text" name="energie_label"><br>

        <label class="form-label" for="beschrijving">beschrijving</label>
        <textarea class="form-control" name="beschrijving" rows="3" cols="20"></textarea><br>

        <label class="form-label" for="staat">staat</label>
        <input class="form-control" type="text" name="staat"><br>

        <input class="btn btn-primary" name="submit" type="submit" value="Submit">

    </form>
    <?php
    include 'connection.php';
    try {
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
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Bob Vance Koelkasten</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>