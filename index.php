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
        <div class="container">
            <div class="row d-flex flex-column min-vh-5 justify-content-center align-items-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center">Domande frequenti</h2>
                        <hr>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Perchè questo applicativo?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                    <strong>Questo applicativo serve a rendere la lettura dei dati rilevati dalle centraline, in maniera molto più semplice. Oltre alla lettura, questo applicativo, rende disponibili alcune funzionalità come:<br><br>- Grafico Esplorabile:</br></br></strong>
                                        <p class="px-3">Permette di visualizzare determinati dati in determinati giorni tramite un menù che permette di selezionare data e ora di inizio e data e ora di fine. Questo rende i dati visibili anche graficamente in modo da facilitarne la consultazione</p>
                                        <p><strong>- Grafico in tempo reale</strong></p>
                                        <p class="px-3">Permette di visualizzare i dati della centralina in tempo reale per confrontare eventi atmosferici con le misurazioni effettuate</p>
                                        <p><strong>- Download dei dati</strong></p>
                                        <p class="px-3">Permette di scaricare i dati rilevati precedentemente dalla centralina sul proprio dispositivo, in questo modo diventano molto più manegievoli e accessibili per l'utilizzo pratico o anche per una visualizzazione più comoda</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Chi siamo?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Siamo quattro ragazzi che frequentano la terza superiore, tutti e quattro abbiamo scelto di proseguire gli studi nella ramificazione informatica dell'istituto tecnico I.T.I. Guglielmo Marconi di Staranzano. <p>Seguiti dal professor Pierdomenico abbiamo creato quest'applicativo, mettendo insieme le nostre conoscenze, per rendere più leggibili i dati analizzati dalla centralina e anche per sensibilizzare più persone possibili sull'argomento dell'inquinamento atmosferico. Questo sarà possibile tramite degli schermi sparsi per le città con qusta pagina consultabile da chiunque.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> aria-expanded true se deve essere aperto già all'apertura della pagina-->
                             <!--          
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Questo applicativo serve a rendere la lettura dei dati rilevati dalle centraline, in maniera molto più semplice. Oltre alla lettura, questo applicativo, rende disponibili alcune funzionalità come:<br><br>- Grafico Esplorabile:</br></br></strong>
                                        <p class="px-3">Permette di visualizzare determinati dati in determinati giorni tramite un menù che permette di selezionare data e ora di inizio e data e ora di fine. Questo rende i dati visibili anche graficamente in modo da facilitarne la consultazione</p>
                                        <p><strong>- Grafico in tempo reale</strong></p>
                                        <p class="px-3">Permette di visualizzare i dati della centralina in tempo reale per confrontare eventi atmosferici con le misurazioni effettuate</p>
                                        <p><strong>- Download dei dati</strong></p>
                                        <p class="px-3">Permette di scaricare i dati rilevati precedentemente dalla centralina sul proprio dispositivo, in questo modo diventano molto più manegievoli e accessibili per l'utilizzo pratico o anche per una visualizzazione più comoda</p>
                                        
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Chi siamo?
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       Siamo quattro ragazzi che frequentano la terza superiore, tutti e quattro abbiamo scelto di proseguire gli studi nella ramificazione informatica dell'istituto tecnico I.T.I. Guglielmo Marconi di Staranzano. <p>Seguiti dal professor Pierdomenico abbiamo creato quest'applicativo, mettendo insieme le nostre conoscenze, per rendere più leggibili i dati analizzati dalla centralina e anche per sensibilizzare più persone possibili sull'argomento dell'inquinamento atmosferico. Questo sarà possibile tramite degli schermi sparsi per le città con qusta pagina consultabile da chiunque.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                    </div>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>


