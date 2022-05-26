<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <nav class="navbar navbar-expand-lg bg-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kardistry
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                            <button class="btn btn-outline-success" href="login.php">Log in</button>
                            <button class="btn btn-outline-success" href="register.php">Register</button>
                        </div>
                    </div>

                </nav>
            </div>
        </div>

        <!--------------------------------------Gantiiii Selsaiiii---------------------------------->
    </section>
        <!--navbar selesai -->


    <section id="detail_tutor">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <h2 class="fw-bold text-center">Kenalan Dulu Sama Bimo</h2>
                    <div class="col-2">
                        <div class="card" style="background-color: #A1D6E2;
                                height: 400px;
                                width: 300px;
                                border-radius: 30px;
                                background: rgba(161, 214, 226, 0.3);
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <img src="img/Foto KTM.jfif" class="card-img-top" alt="" style="height: 130px;
                                    width: 130px;
                                    border-radius: 70px;
                                    display: block;
                                    margin: auto;
                                    margin-top: 35px;">
                            <div class="card-body">
                                <h4 class="fw-bold text-center">Bimo Ganteng</h4>
                                <p class="card-text text-center">Magician PENS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container" style="width: 800px; height: 300px; 
                                background: rgba(161, 214, 226, 0.3);
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                border-radius: 30px;
                                margin-top: 30px;
                                margin-left: 150px;">
                            <h3> Tentang Tutor </h3>
                            <p> Bimo adalah alumni SMANSA dan sekarang sedang kuliah tipis-tipis di PENS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
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