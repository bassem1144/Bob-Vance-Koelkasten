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
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    $host = "localhost";
    $databaseName = "bob_vance";
    $username = "bit_academy";
    $password = "bit_academy";
    $dsn = "mysql:host=$host;dbname=$databaseName";
    try {
        $databaseConnection = new PDO($dsn, $username, $password);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM koelkasten";
        $koelkasten = $databaseConnection->query($sql);
        echo '<h3>Alle koelkasten</h3>';
        foreach ($koelkasten as $koelkast) { ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $koelkast['image_url'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $koelkast['artikel_nummer'] ?> </h5>
                    <p class="card-text" style="font-size: 0.75em;"><?= $koelkast['beschrijving'] ?> </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prijs: &euro; <?= $koelkast['prijs'] ?></li>
                    <li class="list-group-item">Energie label: <?= $koelkast['energie_label'] ?></li>
                    <li class="list-group-item">Afmetingen: <?= $koelkast['afmetingen'] ?></li>
                    <li class="list-group-item">Rating: <?= $koelkast['rating'] ?></li>
                </ul>
                <div class="card-body">
                    <a href="edit.php?id=<?= $koelkast['id'] ?>" class="card-link">Wijzigen</a>
                    <a href="#" class="card-link">Verwijderen</a>
                </div>
            </div>
    <?php
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    } ?>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Bob Vance koelkasten</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>