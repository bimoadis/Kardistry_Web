<?php require_once("auth.php"); ?>
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
    <section id="navbar bg-light">
        <!--------------------------------------Gantiiii---------------------------------->
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kardistry
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view_class.php">Class</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view_tutor.php">Tutor</a>
                            </li>

                        </ul>
                        <div class="button">
                            <img class="img img-responsive rounded-circle " width="40" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
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
                            <button class="btn btn-custom1><a href=" #about">Learn More</a></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="img/About1.jpg" class="float" alt="">
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
                        <div class="card style=" style="width: 18rem;">
                            <img src="img/Basic Moves.jfif" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold">Basic Moves</h4>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quiaconsequ untur magni dolores eos qui ratione voluptate.</p>
                                <button class="btn btn-custom1"><a href="#class">Start Learn</a></button>
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
                                <button class="btn btn-custom1"><a href="#class">Start Learn</a></button>
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
                                <button class="btn btn-custom1"><a href="#class">Start Learn</a></button>
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
                                <button class="btn btn-custom1"><a href="#class">Start Learn</a></button>
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
                    <div class="col-6  ">
                        <div class="judul">
                            <h1 class="fw-bold">Why is Cardisty so Populer?</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequ
                                untur magni dolores eos qui ratione voluptate.</p>
                            <button class="btn btn-custom1"><a href="#about">Learn More</a></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="img/About2.webp" class="float" alt="">
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
                    <h2 class="fw-bold text-center">Class of Cardistry</h2>
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
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
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

    <section class="aboutUs">
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="row">
                        <div class="navbar-nav">
                            <p class="nav-item nav-link" href="">About Us</p>
                        </div>
                        <p> Kardistry adalah website belajar sulap punya Bimo</p>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-----Footer Mulai------>
    <section class="footer">
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kardistry
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#">Home</a>
                            <a class="nav-item nav-link" href="#">About</a>
                            <a class="nav-item nav-link" href="#">Class</a>
                            <a class="nav-item nav-link" href="#">Mentor</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-----Footer Selesai------>

</body>

</html>