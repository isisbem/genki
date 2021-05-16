<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?></title> 
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
    </head>
    <body>
        <div class="container mb-5 mt-5">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card bg-light border border-light shadow-3">
                <div class="card-body bg-light">
                    <h1 class="card-title text-center mt-2"><?php echo $appName ?></h1>
                    <div class="container">
                        <div class="row">
                            <hr class="mt-3" />
                            <div class="col-lg text-center">
                             <!-- Carousel wrapper -->
                                <div
                                id="carouselBasicExample"
                                class="carousel slide carousel-fade mt-3"
                                data-mdb-ride="carousel"
                                >
                                <!-- Indicators -->
                                    <div class="carousel-indicators">
                                        <button
                                        type="button"
                                        data-mdb-target="#carouselBasicExample"
                                        data-mdb-slide-to="0"
                                        class="active"
                                        aria-current="true"
                                        aria-label="Slide 1"
                                        ></button>
                                        <button
                                        type="button"
                                        data-mdb-target="#carouselBasicExample"
                                        data-mdb-slide-to="1"
                                        aria-label="Slide 2"
                                        ></button>
                                    </div>

                                    <!-- Inner -->
                                    <div class="carousel-inner">
                                        <!-- Single item -->
                                        <div class="carousel-item active">
                                        <img
                                            src="http://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="d-block img-fluid" alt="..."
                                        />
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $appName ?></h5>
                                            <p class="text-light">Le centraline contro l'inquinamento atmosferico</p>
                                        </div>
                                        </div>

                                        <!-- Single item -->
                                        <div class="carousel-item">
                                        <img src="assets/images/genki_2.png" class="d-block img-fluid" alt="..."/>
                                            <div class="carousel-caption d-none d-md-block text-black-50">
                                            <h5>Centralina di monitoraggio</h5>
                                            <p>Qui si possono consultare le caratteristiche sommative della centralina</p>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- Inner -->

                                    <!-- Controls -->
                                    <button
                                        class="carousel-control-prev"
                                        type="button"
                                        data-mdb-target="#carouselBasicExample"
                                        data-mdb-slide="prev"
                                    >
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button
                                        class="carousel-control-next"
                                        type="button"
                                        data-mdb-target="#carouselBasicExample"
                                        data-mdb-slide="next"
                                    >
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                    <!-- Carousel wrapper -->
                                    <small class="text-muted float-end">Fonte: <a href="http://genkiproject.org" target="_blank">Genki Project</a></small> 
                            </div>
                            <div class="col mt-3">
                                <h5><b>Come funziona?</b></h5>
                                <p>La centralina è connessa al cloud. È dotata di sensori ad alta precisione per la misurazione <b>dell’inquinamento dell’aria</b>. Questo consente l'accesso ai dati in tempo reale.</p>
                                <h5><b>Che tecnologie utilizziamo?</b></h5>
                                <p><b>ReliaSENS 18-12</b> è un sistema robusto e compatto sviluppato per monitorare la temperatura ambiente e i livelli di gas inquinanti, particolato, campi elettromagnetici e radioattività (con un’opzione per l’inquinamento acustico) nelle aree di traffico, nelle zone urbane e industriali e in prossimità di cantieri.</p>  
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4" />                      
                    <div class="accordion mt-3 mb-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <h1 class="card-title text-center mt-2 mb-4">Domande Frequenti</h1>
                            <button
                                class="accordion-button"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                            <b>Come mai è stata creata questa applicazione?</b>
                            </button>
                            </h2>
                            <div
                            id="collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingOne"
                            data-mdb-parent="#accordionExample"
                            >
                            <div class="accordion-body">
                                <p>Questo applicativo serve a rendere la lettura dei dati rilevati dalle centraline, in maniera molto più semplice. Oltre alla lettura, questo applicativo, rende disponibili alcune funzionalità come:</p>
                                <h6><b>• Grafico Esplorabile</b></h6>
                                <p class="px-3">Permette di visualizzare determinati dati in determinati giorni tramite un menù che permette di selezionare data e ora di inizio e data e ora di fine. Questo rende i dati visibili anche <b>graficamente in modo da facilitarne la consultazione</b>.</p>
                                <h6><b>• Grafico in tempo reale</b></h6>
                                <p class="px-3">Permette di visualizzare i dati della centralina in <b>tempo reale</b> per confrontare eventi atmosferici con le misurazioni effettuate.</p>
                                <h6><b>• Download dei dati</b></h6>
                                <p class="px-3">Permette di <b>scaricare i dati rilevati precedentemente dalla centralina sul proprio dispositivo</b>, in questo modo diventano molto più maneggievoli e accessibili per l'utilizzo pratico o anche per una visualizzazione più comoda.</p>
                                <h6><b>• Inserimento Eventi</b></h6>
                                <p class="px-3">Permette di <b>inserire degli eventi</b> non rilevati dalla centralina in maniera totalmente manuale dopo aver effettuato <b>l'accesso tramite delle credenziali private</b></p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                            <b>Chi l'ha creata?</b>
                            </button>
                            </h2>
                            <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-mdb-parent="#accordionExample"
                            >
                            <div class="accordion-body">
                                <p>Siamo quattro ragazzi che frequentano la terza superiore, tutti e quattro abbiamo scelto di proseguire gli studi nella ramificazione informatica dell'istituto tecnico <b>I.T.I. Guglielmo Marconi di Staranzano</b>.</p>
                                <p>Abbiamo creato questo applicativo, mettendo insieme le nostre conoscenze, per permettere <b>una lettura e comprensione più semplice dei dati analizzati</b> dalla centralina e anche per sensibilizzare più persone possibili sull'argomento <b>dell'inquinamento atmosferico</b>. Questo sarà possibile tramite degli schermi sparsi per le città con qusta pagina consultabile da chiunque.</p>                    
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                            <b>Video presentazione</b>
                            </button>
                            </h2>
                            <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Inserire il video
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
    </body>
</html>


