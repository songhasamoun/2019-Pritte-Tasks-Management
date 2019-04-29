@extends('templates.template')
@section('template')

  <!-- Scripts -->
    <script src="http://localhost/Tasks-Management/public/js/app.js"></script>

    <!-- Styles -->
    <link href="http://localhost/Tasks-Management/public/css/app.css" rel="stylesheet">

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="http://localhost/Tasks-Management/public/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/icons/icons_reference.asp">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.3/css/autoFill.dataTables.min.css">

<div id="app">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h2>Line chart</h2>
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        $(function () {
            document.title = 'Skeleton / Example: Charts in JS';
        });
    </script>
    <script>
        $(function () {
            //Line Chart
            new Chart(document.getElementById("line-chart"), {
                type: 'line',
                data: {
                    labels: ["Current Week","Next Week","Week +2","Week+3","Week+4","Week+5","Week+6"],
                    datasets: [{
                        data: [0,15, 20, 15, 20, 25, 35],
                        label: "Homework",
                        borderColor: "#3e95cd",
                        fill: false
                    }, {
                        data: [0,20, 15, 11, 20,14, 28],
                        label: "Club",
                        borderColor: "#8e5ea2",
                        fill: false
                    }, {
                        data: [5,20, 30, 21, 23, 24, 20],
                        label: "Workshop",
                        borderColor: "#3cba9f",
                        fill: false
                    }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Workload per week'
                    }
                }
            });

        });
    </script>
    
@endsection