<?php include 'php/utils.php' ?>

<!DOCTYPE html>
<html lang="it">
  <head>
    
    <title><?php echo $appName ?></title>
    
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
        />
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
        <style>
            body {
                background-color: #f7f7f7;
            }
        </style>        
  </head>
  <body>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Icons -->
            <ul class="navbar-nav d-flex flex-row ms-auto">
                <!-- Dropdown -->
                <li class="nav-item dropdown me-3 me-lg-0">
                <a class="nav-link dropdown-toggle px-3 me-2" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Grafici
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="me-2">
                    <a class="dropdown-item px-3 me-2" href="graph.php">Grafico Esplorabile</a>
                    </li>
                <!-- <li>
                    <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                    <hr class="dropdown-divider" />
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li> -->
                </ul>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link px-3 me-2" href="about_us.php"><i>Chi siamo?</i></a>
                </li>

                <li class="nav-item me-3 me-lg-0">
                    <button type="nav-link" class="btn btn-light text-black"  disabled>Accedi</button>
                </li>
                
            </ul>
        </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
   <script>
        /*$('*[data-mdb-toggle="tooltip"').each(() => {
            const tooltip = new mdb.Tooltip($(this))
        })
        const exampleEl = document.getElementById('test')
        const tooltip = new mdb.Tooltip(exampleEl) */
    </script>
  </body>
</html>