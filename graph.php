<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?> - Grafico</title>
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="col-10 card shadow-sm">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="text-center">Grafico rilevamenti</h4>
                            <hr>
                            <div class="float-right">
                                <div class="input-group">
                                    <span class="input-group-text input-group-sm">Dal</span>
                                    <input type="text" aria-label="Data inizio" class="form-control" placeholder="Data inizio" id="startDate">
                                    <span class="input-group-text input-group-sm">fino al</span>
                                    <input type="text" aria-label="Data fine" class="form-control" placeholder="Data fine" id="endDate">
                                </div>
                                <form class="mt-3" id="labels">
                                    <h5 class="me-2">Dati da visualizzare:</h5>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <canvas id="graph"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.bundle.min.js"></script>
        <script src="https://use.fontawesome.com/b1676211a8.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/it.min.js" integrity="sha512-abyAPza1Q/3PRl2L54rOvygrx/XIkupvWrs7sNm+jD6gfNf3+MEvPJzdSG4LyYWSTA8NY7AnTCnRz5NNyvsg0w==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
        <script>
            var ctx = document.getElementById('graph');
            var graph = new Chart(ctx, {
                type: 'line'
            });

            function getGraphData() {
                var startDate = $('#startDate').data("DateTimePicker").date()
                var endDate = $('#endDate').data("DateTimePicker").date()
                var formData = $('#labels').serializeArray()
                if (!(startDate == undefined && endDate == undefined) && !(startDate == null && endDate == null) && formData.length > 0) { 
                    var finalFormData = []
                    for (var item in formData) {
                        finalFormData.push(formData[item]['name'])
                    }
                    var dataString = '"' + finalFormData.join('",%20"') + '"'

                    $.get(`php/get_data.php?fields=${dataString}&start=${encodeURI(startDate._i)}&end=${encodeURI(endDate._i)}`, function (data) {
                        graph.destroy()
                        graph = new Chart(ctx, {
                            type: 'line',
                            options: {
                                tooltips: {
                                    intersect: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        graph.data.datasets = []
                        for (var item in data['values']) {
                            graph.data.datasets.push({
                                'label': item,
                                'data': data['values'][item],
                                fill: false
                            })
                        }
                        graph.data.labels = data['dates']
                        graph.update()
                    }, 'json')
                }
            }

            $(document).ready(function() {
                $('#startDate').datetimepicker();
                $('#endDate').datetimepicker();

                $.get('php/get_labels.php', function (data) {
                    for (var item in data) {
                        $('#labels').append(`
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="${data[item]}" name="${data[item]}" onchange="$(document).trigger('formItemsUpdated');">
                                <label class="form-check-label" for="${data[item]}">${data[item]}</label>
                            </div>
                        `)
                    }
                }, 'json')
            });

            $(document).on('formItemsUpdated', function(event) {
                getGraphData();
            })

            $('#startDate').datetimepicker()
            .on("dp.change",function() {
                getGraphData()
            })

            $('#endDate').datetimepicker()
            .on("dp.change",function() {
                getGraphData()
            })
            </script>
    </body>
</html>
