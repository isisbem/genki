<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Genki Management Panel</title>
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    </head>
    
    <body>
        <div class="container">
            <div class="row d-flex min-vh-100 justify-content-center align-items-center">
                <div class="col-3">
                    <div class="card shadow-sm animate__animated animate__fadeInUp animate__faster">
                        <div class="card-body text-center">
                            <img src="assets/placeholder.png" class="rounded-circle img-fluid">
                            <h2 class="mt-3">Matteo Diblas</h2>
                            <p class="text-muted">Idraulico senza frontiere</p>
                            <hr>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="GitHub">
                                        <i class="bi bi-github"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                                        <i class="bi bi-instagram"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Website">
                                        <i class="bi bi-globe"></i></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow-sm animate__animated animate__fadeInDown animate__faster">
                        <div class="card-body text-center">
                            <img src="assets/placeholder.png" class="rounded-circle img-fluid">
                            <h2 class="mt-3">Antonio Iorio</h2>
                            <p class="text-muted">Idraulico senza frontiere</p>
                            <hr>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="GitHub">
                                        <i class="bi bi-github"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                                        <i class="bi bi-instagram"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Website">
                                        <i class="bi bi-globe"></i></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow-sm animate__animated animate__fadeInUp animate__faster">
                        <div class="card-body text-center">
                            <img src="assets/placeholder.png" class="rounded-circle img-fluid">
                            <h2 class="mt-3">Milos Kovacevic</h2>
                            <p class="text-muted">Idraulico senza frontiere</p>
                            <hr>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="GitHub">
                                        <i class="bi bi-github"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                                        <i class="bi bi-instagram"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Website">
                                        <i class="bi bi-globe"></i></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow-sm animate__animated animate__fadeInDown animate__faster">
                        <div class="card-body text-center">
                            <img src="assets/placeholder.png" class="rounded-circle img-fluid">
                            <h2 class="mt-3">Antonino Fardella</h2>
                            <p class="text-muted">Idraulico senza frontiere</p>
                            <hr>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="GitHub">
                                        <i class="bi bi-github"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                                        <i class="bi bi-instagram"></i></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a style="font-size: 32px" href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Website">
                                        <i class="bi bi-globe"></i></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    </body>
</html>
