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
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    </div>
                                    <div class="carousel-inner rounded-3 shadow-sm">
                                        <div class="carousel-item active">
                                            <img src="http://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <!-- <div class="carousel-item">
                                            <img src="http://genkiproject.org/wp-content/uploads/2019/03/image-2-768x404.png" class="d-block w-100" alt="...">
                                        </div> -->
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img src="https://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="img-fluid rounded-3 float-start shadow-sm"> -->
                                <small class="text-muted float-end">Fonte: <a href="http://genkiproject.org" target="_blank">Genki Project</a></small>
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatibus natus dolorum sed tempore nesciunt, quasi rerum quas aliquid ad ut quis vitae. Mollitia illo dolore adipisci nulla animi! Dolorem!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
