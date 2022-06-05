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
    <section id="navbar">
        <!--------------------------------------Gantiiii---------------------------------->
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: white;">
                    <div class="container justify-content-center">

                        <a class="navbar-brand" href="index.html" style="color:black;">
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
                            <div class="button">
                                <img class="img img-responsive rounded-circle " width="40" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <!--------------------------------------Gantiiii Selsaiiii---------------------------------->
    </section>
    <!---------Navbar Selsai--------->

    <section id="tutor">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h2 class="fw-bold text-center">Class of Cardistry</h2>
                    <div class="col-2">
                        <div class="card">
                            <img src="img/Foto KTM.jfif" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="detail_tutor.php">
                                    <h4 class="fw-bold text-center">Bimo Adi Sakti</h4>
                                </a>
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
                                <a>
                                    <h4 class="fw-bold text-center">Patrick Varnavas</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:20px;">
                        <div class="card">
                            <img src="img/Lun-Zi.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Lun-Zi</h4>
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