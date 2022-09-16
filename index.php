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
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Bob Vance Koelkasten</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koelkasten">Koelkasten</a></li>
                    <li class="nav-item"><a class="nav-link" href="#verzekeringen">Verzekeringen</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reparaties">Reparaties</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-succes" href="./php/admin.php" style="color: #20c997;">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">De beste plek om je nieuwe koelkast te halen</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Naast het verkopen van koelkasten bieden we ook verzekeringen aan voor
                        je koelkast. Ook bieden we reparaties aan</p>
                    <a class="btn btn-primary btn-xl" href="#about">Meer weten</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We hebben alles wat je nodig hebt</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eum
                        sunt dolores delectus. Minima nisi magni omnis sint animi, modi explicabo, vero totam
                        repudiandae esse nam ratione. Sunt, cupiditate vitae! </p>
                    <a class="btn btn-light btn-xl" href="#koelkasten">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- koelkasten-->
    <section class="page-section" id="koelkasten" style="background-color: #eee;">
        <div class="card-deck">
            <div class="container py-5">
                <h2 class="text-center mt-0">Koelkasten</h2>
                <hr class="divider" />
                <div class="row">
                    <?php
                    include './php/connection.php';
                    try {
                        $sql = "SELECT * FROM koelkasten";
                        $koelkasten = $pdo->query($sql);
                        foreach ($koelkasten as $koelkast) { ?>
                            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 my-4">
                                <div class="card">
                                    <div class="d-flex justify-content-between p-3">
                                        <!-- <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong" style="width: 35px; height: 35px;">
                                            <p class="text-white mb-0 small"><?= $koelkast['staat'] ?></p>
                                        </div> -->
                                    </div>
                                    <img src="<?= $koelkast['image_url'] ?>" class="card-img-top" alt="koelkast-foto" />
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="small"><a href="#koelkasten" class="text-muted">Koelkasten</a></p>
                                            <p class="small text-danger"><s>$1099</s></p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"><?= $koelkast['artikel_nummer'] ?></h5>
                                            <h5 class="text-dark mb-0">&euro; <?= $koelkast['prijs'] ?></h5>
                                        </div>

                                        <div class="d-flex justify-content-between mb-2 flex-column ">
                                            <p class="text-muted fw-bold"><?= $koelkast['beschrijving'] ?></p>
                                            <p class="text-muted mb-2">Staat: <span class="fw-bold"><?= $koelkast['staat'] ?></span></p>
                                            <p class="text-muted mb-2">Energie label: <span class="fw-bold"><?= $koelkast['energie_label'] ?></span></p>
                                            <p class="text-muted mb-2">Afmetingen: <span class="fw-bold"><?= $koelkast['afmetingen'] ?></span></p>


                                            <div class="ms-auto text-info">
                                                <i>Rating: <?= $koelkast['rating'] ?></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } catch (PDOException $error) {
                        echo $error->getMessage();
                    } ?>
                </div>
            </div>
    </section>
    <!-- Verzekeringen-->
    <section class="page-section" id="verzekeringen">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Verzekeringen</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">All-inclusive</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                            illum cumque nobis expedita repellendus. Facilis nihil possimus nemo deserunt. Qui saepe
                            architecto nulla praesentium obcaecati dolores hic at, expedita ut!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">motor-only</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                            temporibus voluptate molestiae fugit culpa, eveniet eligendi perspiciatis vitae
                            voluptatum nihil officiis alias blanditiis vel autem omnis laboriosam ipsum corporis
                            obcaecati.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">3e soort</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Aperiam, consequuntur pariatur iure aut dolores quibusdam aliquid nesciunt, tempora
                            maxime magnam, voluptatem neque. Quidem vero fugiat nisi totam assumenda molestias
                            accusantium.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">4e soort</h3>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                            necessitatibus velit quia possimus autem. Fugiat suscipit assumenda beatae rerum,
                            excepturi iusto rem fuga commodi quisquam culpa quod aut hic ut!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="reparaties">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Neem contact met ons op!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Heeft u een vraag? Wij helpen u graag verder!
                    </p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Naam</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@voorbeeld.com" data-sb-validations="required,email" />
                            <label for="email">Email adres</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="0612345678" data-sb-validations="required" />
                            <label for="phone">Telefoon nummer</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Bericht</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <br />
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <p>020 1234567</p>
                    <i class="bi bi-envelope  fs-2 mb-3 text-muted"></i>
                    <p>info@bobvance.nl</p>

                </div>
            </div>
        </div>
    </section>
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