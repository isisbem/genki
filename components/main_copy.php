<?php include 'php/utils.php' ?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="description" content=""> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet">

        <!-- <title><?php echo $appName ?></title> -->
    </head>
    <body>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo_SEMP.png" height="50" width="50" class="me-2">PROVA height & width
                    <?php echo $appCompleteName ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-1" id="navbarNav">
                    <ul class="navbar-nav ms-auto flex-nowrap">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo basename($_SERVER['PHP_SELF']) == 'graph.php' ? 'active' : '' ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Grafici
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="graph.php">Grafico esplorabile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'active' : '' ?>" aria-current="page" href="about_us.php">Chi siamo?</a>
                        </li>
                        <li class="nav-item ms-lg-2 mt-1" style="cursor: no-drop;">
                            <a href="#" class="btn btn-secondary btn-sm disabled" tabindex="-1" role="button" aria-disabled="true">
                                Accedi
                                <i class="bi bi-box-arrow-in-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <nav class="navbar navbar-expand-lg bg-light navbar-light" style="box-shadow: none !important;">
            <!-- Container wrapper -->
            <div class="container-fluid">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo_SEMP.png" height="48" width="48" class="me-2">
                    <?php echo $appCompleteName ?>
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> -->
                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Grafici
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page" href="graph.php">Grafico esplorabile</a>
                                </li>
                                <!-- <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn btn-primary disabled text-white" href="#" tabindex="-1">ACCEDI</a>
                        </li> -->
                    </ul>
                    <!-- Left links -->
                </div>
                    

                <!-- Icons -->
                <!-- <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul> -->

                <!-- Search -->
                <!-- <form class="w-auto">
                    <input type="search" class="form-control" placeholder="Type query" aria-label="Search">
                </form> -->

                </div>
            </div>
            <!-- Container wrapper -->
            </nav>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>
