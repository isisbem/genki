<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?></title> 
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center"><?php echo $appName ?></h2>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-center">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="http://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="fs-4 text-light"><?php echo $appName ?></h5>
                                            <p class="fs-6 text-light">Le centraline contro l'inquinamento atmosferico</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="http://genkiproject.org/wp-content/uploads/2019/03/image-2-768x404.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="fs-4 text-secondary">Centralina di monitoraggio</h5>
                                            <p class="fs-6 text-secondary">Qui si possono consultare le caratteristiche sommative della centralina</p>
                                        </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img src="https://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="img-fluid rounded-3 float-start shadow-sm"> -->
                                <small class="text-muted float-end">Fonte: <a href="http://genkiproject.org" target="_blank">Genki Project</a></small>
                            </div>
                            <div class="col">
                                <p>La centralina è connessa al cloud. È dotata di sensori ad alta precisione per la misurazione dell’inquinamento dell’aria. Questo consente l'accesso ai dati in tempo reale.</p>
                                <br>ReliaSENS 18-12 è un sistema robusto e compatto sviluppato per monitorare la temperatura ambiente e i livelli di gas inquinanti, particolato, campi elettromagnetici e radioattività (con un’opzione per l’inquinamento acustico) nelle aree di traffico, nelle zone urbane e industriali e in prossimità di cantieri.</br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
</html>


