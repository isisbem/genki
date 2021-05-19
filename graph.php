<?php include 'components/main.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $appName ?> - Grafico</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center" style="margin-top: 8rem;">
                <div class="col-12 card shadow-sm mb-5">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Grafico rilevamenti</h3>
                            <hr>
                            <div class="float-right">
                                <div class="d-flex">
                                    <div class="input-group me-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-calendar4-event"></i>
                                        </span>
                                        <input type="text" class="form-control datepicker" placeholder="Clicca per selezionare la data d'inizio..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-calendar4-event"></i>
                                        </span>
                                        <input type="text" class="form-control datepicker" placeholder="Clicca per selezionare la data di fine..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/it.js"></script>
        <script>
            const options = {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                altInput: true,
                altFormat: "j F Y, H:i",
                dateFormat: "Y-m-d",
                locale: "it",
            }

            const picker = flatpickr(".datepicker", {
                onChange: (selectedDates, dateStr, instance) => {
                    getGraphData()
                }, ...options,
            });

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
                },
                legend: {
                    showForSingleSeries: false,
                    showForNullSeries: false,
                    showForZeroSeries: false,
                    onItemClick: {
                        toggleDataSeries: false
                    },
                    onItemHover: {
                        highlightDataSeries: true
                    },
                }
            }

            var graph = new ApexCharts(document.querySelector("#graph"), baseOptions);
            graph.render();

            function getGraphData() {
                startDate = picker[0].selectedDates[0];
                endDate = picker[1].selectedDates[0];
                var formData = $('#labels').serializeArray()
                if (!(startDate == undefined && endDate == undefined) && !(startDate == null && endDate == null) && formData.length > 0) { 
                    var finalFormData = []
                    for (var item in formData) {
                        finalFormData.push(formData[item]['name'].replace(' ', '_'))
                    }
                    var dataString = '"' + finalFormData.join('",%20"') + '"'

                    $.get(`php/get_data.php?fields=${dataString}&start=${encodeURI(`${startDate.toLocaleDateString()} ${startDate.toLocaleTimeString()}`)}&end=${encodeURI(`${endDate.toLocaleDateString()} ${endDate.toLocaleTimeString()}`)}`, function (data) {

                        var graphData = []
                        for (var item in data['values']) {
                            graphData.push({
                                name: item.replace('_', ' '),
                                'data': data['values'][item]
                            })
                        }

                        graph.updateOptions({...baseOptions, labels: data['dates']})
                        graph.updateSeries(graphData)
                    }, 'json')
                }
            }

            $(document).ready(function() {
                $.get('php/get_labels.php', function (data) {
                    for (var item in data) {
                        $('#labels').append(`
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="${data[item]}" name="${data[item]}" onchange="$(document).trigger('formItemsUpdated');">
                                <label class="form-check-label" for="${data[item]}">${data[item].replace('_', ' ')}</label>
                            </div>
                        `)
                    }
                }, 'json')
            });

            $(document).on('formItemsUpdated', function(event) {
                getGraphData();
            })
            </script>
    </body>
</html>
