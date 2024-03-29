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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand mx-3" href="admin.php">Bob Vance Admin</a>
        <div>
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="admin.php">Home</a>
                <a class="nav-item nav-link" href="add.php">Toevoegen</a>
                <a href="../index.php" class="btn btn-outline-danger" type="button">Uitloggen</a>
            </div>
        </div>
    </nav>
    <div class="row d-flex justify-content-center">
        <?php
        include 'connection.php';
        try {
            $sql = "SELECT * FROM koelkasten";
            $koelkasten = $pdo->query($sql);
            foreach ($koelkasten as $koelkast) { ?>
                <div class="card m-2 " style="width: 18rem;">
                    <img class="card-img-top p-1" src="<?= $koelkast['image_url'] ?>" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $koelkast['artikel_nummer'] ?> </h5>
                        <p class="card-text" style="font-size: 0.75em;"><?= $koelkast['beschrijving'] ?> </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prijs: &euro; <?= $koelkast['prijs'] ?></li>
                        <li class="list-group-item">Energie label: <?= $koelkast['energie_label'] ?></li>
                        <li class="list-group-item">Afmetingen (B x H x D): <?= $koelkast['afmetingen'] ?></li>
                        <li class="list-group-item">Rating: <?= $koelkast['rating'] ?></li>
                        <li class="list-group-item">Staat: <?= $koelkast['staat'] ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="edit.php?id=<?= $koelkast['id'] ?>" class="card-link">Wijzigen</a>
                        <a href="delete.php?id=<?= $koelkast['id'] ?>" class="card-link">Verwijderen</a>
                    </div>
                </div>
        <?php
            }
        } catch (PDOException $error) {
            echo $error->getMessage();
        } ?>
    </div>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>