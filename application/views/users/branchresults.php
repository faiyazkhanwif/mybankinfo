<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Banking Information</title>
    <script src="https://kit.fontawesome.com/714da8de62.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('tool/img/favicon1.png'); ?>" />
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
                <a class="navbar-brand" href="<?= base_url() ?>Home"><i class="fas fa-dollar-sign"></i> <span class="fw-bolder">Banking Information</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link btn btn-dark" href="javascript:window.history.go(-1);"><i class="fas fa-chevron-circle-left"></i> Go Back</a></li>
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
            print '<br>';
            print '</div>';
        }
        ?>
        <section class="py-4">
            <div class="container ">
                <div class="text-center animate__animated animate__bounceInLeft">
                    <h3 class="fw-bolder"><i class="fas fa-university"></i> Branch Results</h3>
                </div>
                <?php if (!$branches) : ?>
                    <div class="text-center animate__animated animate__zoomIn animate__delay-1s">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h1><i class="fas fa-search-location fa-5x"></i></h1>
                        <br>
                        <br>
                        <br>
                        <h6 class="text-danger">Your selected bank does not have any branches in your selected area.</h6>
                        <br>
                        <br>
                        <a class="btn btn-dark btn-lg px-4 me-sm-3" href="<?= base_url() ?>Users/finder">Search Again</a>
                    </div>
                <?php else : ?>
                    <!--workinprogress  Use Jumbotron-->
                    <table class="table table-hover table-responsive borderless">
                        <?php foreach ($branches as $data) : ?>
                            <tr>
                                <?php print '<td>' . htmlentities($data->branchID) . '</td>'; ?>
                                <?php print '<td>' . htmlentities($data->bankname) . '</td>'; ?>
                                <?php print '<td>' . htmlentities($data->areaname) . '</td>'; ?>
                                <?php print '<td>' . htmlentities($data->address) . '</td>'; ?>
                                <br>
                                <hr>
                                <?php print  $data->map; ?>

                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
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