<?php require_once("../auth.php");
require_once("../admin/function.php");
$class = query("SELECT * FROM class WHERE Id = 3");
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
                <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: white;">
                    <div class="container justify-content-center">

                        <a class="navbar-brand" href="../timeline.php" style="color:black;">
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
                                    <a class="nav-link" style="color: teal ;" href="../view_class.php">Class</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: teal ;" href="../view_tutor.php">Tutor</a>
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
    <!--navbar selesai -->

    <!---------------------------------class Mulai------------------------------------------->
    <section id="class" style="height:1000px;">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 300px;">
                            <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                                <svg class="bi me-2" width="30" height="24">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                                <span class="fs-5 fw-semibold">Basic Moves</span>
                            </a>
                            <div class="list-group list-group-flush border-bottom scrollarea">
                                <a href="class_basic-move.php" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Swing Cut</strong>
                                    </div>
                                </a>
                                <a href="class_basic-move-1.php" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Revolution Cut </strong>
                                    </div>
                                </a>
                                <a href="class_basic-move-2.php" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Grips</strong>
                                    </div>
                                </a>


                            </div>
                        </div>


                    </div>
                    <div class="col-9">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Video Pembelajaran</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($class as $row) : ?>
                                    <tr>
                                        <td><?= $row["Link"]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
    </section>

    <!---------------------------------class Selesai------------------------------------------->


    <!-----Footer Mulai------>
    <section class="footer">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col-5">
                    <a class="navbar-brand" href="../timeline.php" style="color:black;">
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
                            <p>Copyright © <a href="../index.php" target="_blank" style="color: black;">Kardistry</a>
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