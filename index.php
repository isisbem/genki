<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?></title> 
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
    </head>
    <body background="assets/images/bg.png">
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="card shadow mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center"><?php echo $appName ?></h2>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-center">
                                <div id="carouselExampleCaptions" class="carousel slide shadow-sm" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner rounded-3">
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
                                        <span class="visually-hidden">Indietro</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Avanti</span>
                                    </button>
                                </div>
                                <!-- <img src="https://genkiproject.org/wp-content/uploads/2020/11/Genki_gorizia.jpg" class="img-fluid rounded-3 float-start shadow-sm"> -->
                                <small class="float-start"><span class="text-muted">Fonte:</span> <a href="http://genkiproject.org" target="_blank">Genki Project</a></small>
                            </div>
                            <div class="col">
                                <h5><b>Come funziona?</b></h5>
                                <p>La centralina è connessa al cloud. È dotata di sensori ad alta precisione per la misurazione <b>dell’inquinamento dell’aria</b>. Questo consente l'accesso ai dati in tempo reale.</p>
                                <h5><b>Che tecnologie utilizziamo?</b></h5>
                                <p><b>ReliaSENS 18-12</b> è un sistema robusto e compatto sviluppato per monitorare la temperatura ambiente e i livelli di gas inquinanti, particolato, campi elettromagnetici e radioattività (con un’opzione per l’inquinamento acustico) nelle aree di traffico, nelle zone urbane e industriali e in prossimità di cantieri.</p>
                            </div>
                        </div>
                        <hr>
                        <h2 class="card-title text-center mt-3">Domande Frequenti</h2>
                        <div class="accordion mt-3 mb-3 shadow-sm" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Come mai è stata creata questa applicazione?
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Questo applicativo serve a rendere la lettura dei dati rilevati dalle centraline, in maniera molto più semplice. Oltre alla lettura, questo applicativo, rende disponibili alcune funzionalità come:</p>
                                    
                                        <h5><b>• Grafico Esplorabile</b></h5>
                                        <p class="px-3">Permette di visualizzare determinati dati in determinati giorni tramite un menù che permette di selezionare data e ora di inizio e data e ora di fine. Questo rende i dati visibili anche <b>graficamente in modo da facilitarne la consultazione</b>.</p>

                                        <h5><b>• Grafico in tempo reale</b></h5>
                                        <p class="px-3">Permette di visualizzare i dati della centralina in <b>tempo reale</b> per confrontare eventi atmosferici con le misurazioni effettuate.</p>
                                        
                                        <h5><b>• Download dei dati</b></h5>
                                        <p class="px-3">Permette di <b>scaricare i dati rilevati precedentemente dalla centralina sul proprio dispositivo</b>, in questo modo diventano molto più maneggievoli e accessibili per l'utilizzo pratico o anche per una visualizzazione più comoda.</p>
                                        
                                        <h5><b>• Inserimento Eventi</b></h5>
                                        <p class="px-3">Permette di <b>inserire degli eventi</b> non rilevati dalla centralina in maniera totalmente manuale dopo aver effettuato <b>l'accesso tramite delle credenziali private</b></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Chi l'ha creata?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Siamo quattro ragazzi che frequentano la terza superiore, tutti e quattro abbiamo scelto di proseguire gli studi nella ramificazione informatica dell'istituto tecnico <b>I.T.I. Guglielmo Marconi di Staranzano</b>.</p>
                                        <p>Abbiamo creato questo applicativo, mettendo insieme le nostre conoscenze, per permettere <b>una lettura e comprensione più semplice dei dati analizzati</b> dalla centralina e anche per sensibilizzare più persone possibili sull'argomento <b>dell'inquinamento atmosferico</b>. Questo sarà possibile tramite degli schermi sparsi per le città con qusta pagina consultabile da chiunque.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


