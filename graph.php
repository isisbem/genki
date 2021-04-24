<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?> - Grafico</title>
        <!-- <link rel="shortcut icon" type="image/x-icon" href="media/icon.png" /> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="col-10 card shadow-sm mt-5 mb-5">
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
                        <div id="graph"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://use.fontawesome.com/b1676211a8.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/it.min.js" integrity="sha512-abyAPza1Q/3PRl2L54rOvygrx/XIkupvWrs7sNm+jD6gfNf3+MEvPJzdSG4LyYWSTA8NY7AnTCnRz5NNyvsg0w==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
        <script>
            var baseOptions = {
                chart: {
                    type: 'line'
                },
                dataLabels: {
                    enabled: false
                },
                series: [],
                xaxis: {
                    tooltip: {
                        enabled: false
                    }
                }
            }

            var graph = new ApexCharts(document.querySelector("#graph"), baseOptions);

            graph.render();

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

                        var graphData = []
                        for (var item in data['values']) {
                            graphData.push({
                                name: item,
                                'data': data['values'][item]
                            })
                        }

                        graph.updateOptions({...baseOptions, labels: data['dates']})
                        graph.updateSeries(graphData)
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
