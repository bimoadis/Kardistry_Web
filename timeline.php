<?php
// require_once("auth.php");
require_once("konekFB.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="style.css">


    <title>Final Project || Kardistry</title>
</head>

<body>
    <!----Header Mulai------>
    <!----Header Selesai------>
    <!--navbar-->
    <section id="navbar">
        <!--------------------------------------Gantiiii---------------------------------->
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: white;">
                    <div class="container justify-content-center">

                        <a class="navbar-brand" href="timeline.php" style="color:black;">
                            <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            Kardistry
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" style="color: teal;" href="timeline.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: teal ;" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: teal ;" href="view_class.php">Class</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: teal ;" href="view_tutor.php">Tutor</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li> -->


                            </ul>
                            <!-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->

                            <!-- <div class="button">

                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown"> -->

                            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <img class="img img-responsive rounded-circle " width="40" src="img/default.svg">


                            <a href="loguot.php" style="color: teal ;">Log out</a>

                            <!-- </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li> -->
                            <!-- </li> -->
                            <!-- <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="loguot.php">Log out</a></li> -->
                            <!-- </ul>
                                    </li>
                                </ul>

                            </div> -->
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <!--------------------------------------Gantiiii Selsaiiii---------------------------------->
    </section>

    <!--navbar selesai -->

    <!-----Hero Mulai------>
    <section id="home">
        <div class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <!--<img src="img/Home.jpg" class="float" alt="">-->
                    <h1 class="fw-bold ">WELCOME TO CARDISTRY</h1>
                    <h4>A Beginners' Guide to Card Flourrist</h4>
                    <button class="btn"><a href="#about">About me</a></button>

                </div>
            </div>
        </div>

    </section>
    <!-----Hero Selesai------>

    <!------About Mulai------>
    <section id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6 ">
                        <div class="judul">
                            <h1 class="fw-bold">What is Cardistry</h1>
                            <p>Cardistry is the beautiful art from of manipulation playing cards with skillful technique
                            </p>
                            <button class="btn btn-custom1" style="background-color: teal;
                            border-radius: 5px;"><a href="#about">Learn More</a></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="img/About1.jpg" class="float" alt="" style="border-radius: 5px;">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------About Selesai------>

    <!-----Kursus Mulai----->
    <section id="kursus">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h2 class="fw-bold text-center">Class of Cardistry</h2>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/Basic Moves.jfif" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold">Basic Moves</h4>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quiaconsequ untur magni dolores eos qui ratione voluptate.</p>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-custom1" style="background-color: teal;
                                border-radius: 5px;"><a class="text-center" href="#class">Start Learn</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/One Handed.jfif" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold">One-Handed Cuts</h4>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quiaconsequ untur magni dolores eos qui ratione voluptate.</p>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-custom1" style="background-color: teal;
                                    border-radius: 5px;"><a class="text-center" href="#class">Start Learn</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/Two Handed.jfif" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold">One-Handed Cuts</h4>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quiaconsequ untur magni dolores eos qui ratione voluptate.</p>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-custom1" style="background-color: teal;
                                    border-radius: 5px;"><a class="text-center" href="#class">Start Learn</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/Spreads.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold">Spreads Card</h4>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quiaconsequ untur magni dolores eos qui ratione voluptate.</p>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-custom1" style="background-color: teal;
                                    border-radius: 5px;"><a class="text-center" href="#class">Start Learn</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-----Kursus Selsai----->

    <!------Kabar Mulai------->
    <section id="kabar">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="judul">
                            <h1 class="fw-bold">Why is Cardisty so Populer?</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequ
                                untur magni dolores eos qui ratione voluptate Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia
                                consequ.</p>
                            <button class="btn btn-custom1" style="background-color: teal;
                            border-radius: 5px;"><a href="#about">Learn More</a></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="img/About2.webp" class="float" alt="" style="border-radius: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------Kabar Selesai------->

    <!------Mentor Muali------->
    <section id="tutor">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h2 class="fw-bold text-center">Let's get to know our Cardist</h2>
                    <h5 class="text-center">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia
                        consequ</h5>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Patrick Varbavas.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Patrick Varnavas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Patrick Varbavas.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Patrick Varnavas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="">
                                    <h4 class="fw-bold text-center">Lun-Zi</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Patrick Varbavas.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="">
                                    <h4 class="fw-bold text-center">Patrick Varnavas</h4>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!------Mentor Selesai------->

    <!-----Footer Mulai------>
    <section class="footer">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col-5">
                    <a class="navbar-brand" href="index.html" style="color:black;">
                        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kardistry
                    </a>
                    <p>Kardistry merupakan sebuah platform edukasi online
                        khusus di bidang seni pertunjukan kartu untuk pemula yang ingin belajar tentang cardisty.</p>
                    <p class="text-muted">&copy; 2022</p>
                </div>

                <div class="col-1">

                </div>

                <div class="col-2">
                    <h5>Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#home" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#about" class="nav-link p-0 text-muted">About</a></li>
                        <li class="nav-item mb-2"><a href="#kursus" class="nav-link p-0 text-muted">Class</a></li>
                        <li class="nav-item mb-2"><a href="#tutor" class="nav-link p-0 text-muted">Tutor</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            </footer>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="index.html" target="_blank" style="color: black;">Kardistry</a>
                                2022.
                                All Right
                                Reserved By Kardistry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----Footer Selesai------>


</body>

</html>