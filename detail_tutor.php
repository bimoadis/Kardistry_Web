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
                                    <a class="nav-link active" aria-current="page" style="color: teal;" href="#home">Home</a>
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

                            </ul>
                            <img class="img img-responsive rounded-circle " width="40" src="img/default.svg">
                            <a href="loguot.php" style="color: teal ;">Log out</a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <!--------------------------------------Gantiiii Selsaiiii---------------------------------->
    </section>


    <section id="detail_tutor">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h2 class="fw-bold text-center" style="margin:30px 0px 30px 0px;">Kenalan Dulu Yuk</h2>
                    <div class="col-2">
                        <div class="card" style="background-color: #A1D6E2;
                                height: 400px;
                                width: 300px;
                                border-radius: 30px;
                                background: rgba(161, 214, 226, 0.3);
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <img src="img/Patrick Varbavas.jpg" class="card-img-top" alt="" style="height: 180px;
                                    width: 180px;
                                    border-radius: 90px;
                                    display: block;
                                    margin: auto;
                                    margin-top: 35px;">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Patrick Varnavas</h4>
                                <p class="card-text text-center">Cardistry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container" style="width: 800px; height:auto;  
                                background: rgba(161, 214, 226, 0.3);
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                border-radius: 30px;
                                margin-left: 150px;">
                            <div class="card-text">
                                <h3 style="padding-top:30px;"> Tentang Tutor </h3>
                                <p>Patrick Varnavas is a 20 year old packet cutter hailing from the East coast of the USA and the founder of of the popular Instagram channel: BestCardistAlive. BCA has brought cardists together in an amazing way and guides the next generation of cardists.</p>
                                <hr>
                                <div class="sosmed" style="padding-bottom:30px;">
                                    <a href="https://www.instagram.com/patch.god" style="color:black;padding-bottom: 30px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                                            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                                        </svg> Instagram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----Footer Mulai------>
    <section class="footer">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col-5">
                    <a class="navbar-brand" href="timeline.php" style="color:black;">
                        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kardistry
                    </a>
                    <p>Kardistry merupakan sebuah platform edukasi online
                        khusus di bidang seni pertunjukan kartu untuk pemula yang ingin belajar tentang cardisty.</p>
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
                            <p>Copyright © <a href="index.php" target="_blank" style="color: black;">Kardistry</a>
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