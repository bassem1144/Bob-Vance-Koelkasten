<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit</title>
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
                <a class="nav-item nav-link" href="add.php">Toevoegen</a>
                <a id="uitloggen" href="../index.php" class="btn btn-outline-danger" type="button">Uitloggen</a>
            </div>
        </div>
    </nav>
    <?php
    include 'connection.php';
    session_start();
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $artikel = $_POST['artikel_nummer'];
        $prijs = $_POST['prijs'];
        $rating = $_POST['rating'];
        $afmetingen  = $_POST['afmetingen'];
        $image = $_POST['image_url'];
        $energie = $_POST['energie_label'];
        $beschrijving = $_POST['beschrijving'];
        $staat = $_POST['staat'];

        $sql = "UPDATE koelkasten   
            SET artikel_nummer = :artikel ,
            prijs =  :prijs ,
            rating =  :rating ,
            afmetingen =  :afmetingen , 
            image_url =  :image_url , 
            energie_label =  :energie_label , 
            beschrijving =  :beschrijving  ,
            staat = :staat
            WHERE id = $id ";



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
    try {
        $sql = "SELECT * FROM koelkasten WHERE id = $id";
        $koelkast = $pdo->query($sql)->fetch(); ?>

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Koelkast wijzigen</h2>
                    <hr class="divider" />
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">

                    <form class="mx-auto d-flex justify-content-center flex-column" method="post" action="edit.php?id=<?= $id ?>">



                        <div class="form-floating mb-3">
                            <input class="form-control" name="artikel_nummer" id="artikel_nummer" type="text" value="<?= $koelkast['artikel_nummer'] ?>" />
                            <label class="form-label" for="artikel_nummer">Artikel nummer</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="prijs" id="prijs" type="text" value="<?= $koelkast['prijs'] ?>" />
                            <label class="form-label" for="prijs">Prijs</label>

                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="rating" id="rating" type="text" value="<?= $koelkast['rating'] ?>" />
                            <label class="form-label" for="rating">Rating</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="afmetingen" id="afmetingen" type="text" value="<?= $koelkast['afmetingen'] ?>" />
                            <label class="form-label" for="afmetingen">Afmetingen (B x H x D)</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="image_url" id="image_url" type="text" value="<?= $koelkast['image_url'] ?>" />
                            <label class="form-label" for="image_url">Image URL</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="energie_label" id="energie_label" type="text" value="<?= $koelkast['energie_label'] ?>" />
                            <label class="form-label" for="energie_label">Energie label</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="beschrijving" id="beschrijving" type="text" style="height: 10rem"><?= $koelkast['beschrijving'] ?></textarea>
                            <label class="form-label" for="beschrijving">Beschrijving</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-control" name="staat" id="staat">
                                <option value="nieuw">Nieuw</option>
                                <option value="tweedehands">Tweedehands</option>
                            </select>
                        </div>
                        <input class="btn btn-primary" name="submit" type="submit" value="Toevoegen">
                    </form>
                </div>
            </div>
        </div><?php
            } catch (PDOException $error) {
                echo $error->getMessage();
            } ?>
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