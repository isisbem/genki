<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Genki Management Panel</title> -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-center">Grafico in Tempo Reale</h4>
                        <hr>
                        <canvas id="graph"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.bundle.min.js"></script>
        <script>
            var ctx = document.getElementById('graph');
            var graph = new Chart(ctx, {
                type: 'line',
                data: {
                    // datasets: [{
                    //     label: '# of Votes',
                    //     data: [12, 19, 3, 5, 2, 3],
                    //     backgroundColor: [
                    //         'rgba(255, 99, 132, 0.2)',
                    //         'rgba(54, 162, 235, 0.2)',
                    //         'rgba(255, 206, 86, 0.2)',
                    //         'rgba(75, 192, 192, 0.2)',
                    //         'rgba(153, 102, 255, 0.2)',
                    //         'rgba(255, 159, 64, 0.2)'
                    //     ],
                    //     borderColor: [
                    //         'rgba(255, 99, 132, 1)',
                    //         'rgba(54, 162, 235, 1)',
                    //         'rgba(255, 206, 86, 1)',
                    //         'rgba(75, 192, 192, 1)',
                    //         'rgba(153, 102, 255, 1)',
                    //         'rgba(255, 159, 64, 1)'
                    //     ],
                    //     borderWidth: 1
                    // }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            $.get('php/get_data.php', function (data) {
                data.forEach(function (v, i) {
                    // graph.data.labels = []
                    graph.data.datasets.push({
                        label: v
                    })
                })
                graph.update()
            }, 'json')
            </script>
    </body>
</html>
