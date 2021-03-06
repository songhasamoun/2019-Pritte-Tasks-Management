@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">

            <h1>Charts with ChartJS</h1>
            <p>Good looking charts canbe generated with ChartJS. Please visit their website for more information:
                <a target="_blank" href="http://www.chartjs.org/">http://www.chartjs.org/</a></p>
            
            <h2>Bar chart</h2>
            
            <canvas id="bar-chart" width="800" height="450"></canvas>
            
            <h2>Line chart</h2>
            
            <canvas id="line-chart" width="800" height="450"></canvas>
                            
            <h2>Pie chart</h2>
            
            <canvas id="pie-chart" width="800" height="450"></canvas>
                
        </div>

        @include('examples.sidebar-examples', ['currentExample' => $currentExample])

    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    // Bar Chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [
            {
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [2478,5267,734,784,433]
            }
            ]
        },
        options: {
            legend: { display: false },
            title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    //Line Chart
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
        labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
        datasets: [{
            data: [86,114,106,106,107,111,133,221,783,2478],
            label: "Africa",
            borderColor: "#3e95cd",
            fill: false
            }, {
            data: [282,350,411,502,635,809,947,1402,3700,5267],
            label: "Asia",
            borderColor: "#8e5ea2",
            fill: false
            }, {
            data: [168,170,178,190,203,276,408,547,675,734],
            label: "Europe",
            borderColor: "#3cba9f",
            fill: false
            }, {
            data: [40,20,10,16,24,38,74,167,508,784],
            label: "Latin America",
            borderColor: "#e8c3b9",
            fill: false
            }, {
            data: [6,3,2,2,7,26,82,172,312,433],
            label: "North America",
            borderColor: "#c45850",
            fill: false
            }
        ]
        },
        options: {
        title: {
            display: true,
            text: 'World population per region (in millions)'
        }
        }
    });

    //Pie Chart
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: [2478,5267,734,784,433]
            }]
        },
        options: {
            title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
            }
        }
    });

});
</script>
@endpush
