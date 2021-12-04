<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Banking Information</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/bdbank.png'); ?>" />
    <!-- Bootstrap icons-->
    <link type="text/css" href="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'); ?>" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link type="text/css" href="<?= base_url('tool/css/styles.css'); ?>" rel="stylesheet" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <style>
        nav .navbar-nav li a {
            color: white !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .txt1 {
            color: white !important;
        }

        .card {
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);

            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0 ">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url() ?>Home"><img src="<?= base_url('tool/img/bdbank.png'); ?>" width="40" alt=""> <span class="fw-bolder">Banking Information</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link btn btn-dark" href="<?= base_url() ?>Home"><i class="fas fa-chevron-circle-left"></i> Go Back</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        if ($this->session->flashdata('login_success')) {
            print '<br>';
            print '<div class= "success-msg">';
            print '<div class = "container alert alert-success">' . $this->session->flashdata('login_success') . '</div>';
            //print '<div class="cross"><a href="" class="text-success"><i class="fas fa-times"></i></a></div>';
            print '</div>';
        }
        ?>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container ">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder animate__animated animate__bounceInLeft">Select one from below</h2>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row gx-5 animate__animated animate__zoomIn animate__delay-1s">
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <img class="rounded mx-auto d-block" src="<?= base_url('tool/img/favicon1.png'); ?>" alt="..." />
                                <br>
                                <br>
                                <div class="badge bg-dark bg-gradient rounded-pill mb-2 mx-auto d-block" style="width: 200px; height: 35px;">
                                    <h5>Branch Location</h5>
                                </div>
                                <br>
                                <br>
                                <!--<a class="text-decoration-none link-dark stretched-link" href="< ?= base_url() ?>Users/devdetails/< ?= $dev->id ?>">-->
                                <a class="text-decoration-none link-dark stretched-link" href="<?= base_url() ?>Users/branchfinder/"></a>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="small">
                                                    <div class="text-muted"><small><i class="fas fa-info-circle"></i>&nbsp;Click here to find your preferred branch locations of banks</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <img class="rounded mx-auto d-block" src="<?= base_url('tool/img/favicon2.png'); ?>" alt="..." />
                                <br>
                                <br>
                                <div class="badge bg-dark bg-gradient rounded-pill mb-2 mx-auto d-block" style="width: 200px; height: 35px;">
                                    <h5>ATM Location</h5>
                                </div>
                                <br>
                                <br>
                                <!--<a class="text-decoration-none link-dark stretched-link" href="< ?= base_url() ?>Users/devdetails/< ?= $dev->id ?>">-->
                                <a class="text-decoration-none link-dark stretched-link" href="<?= base_url() ?>Users/atmfinder/"></a>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="small">
                                                    <div class="text-muted"><small><i class="fas fa-info-circle"></i>&nbsp;Click here to find your preferred ATM locations of banks</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                </div>
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Banking Information 2021</div>
                </div>
                <!--
                        <div class="col-auto">
                            <a class="link-light small" href="<?= base_url() ?>Users/about">About</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small" href="users/terms">Terms</a>
                        </div>-->
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>