<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')
@include('includes.functions.get_months');

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Pregled posjeta po mjesecima @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/admin/css/analytics/months.css">
@stop
@section('other_js_links')
    <script src="/admin/js/analytics/options.js"></script>


@stop

@section('header_icon') fa-chart-line @stop
@section('header_title') Pregled posjeta po mjesecima @stop
@section('header_short') Pregledajte sve posjete po mjesecima @stop
@section('path') Moj web / Analitika / Pregled posjeta po mjesecima @stop
<!-- main content of page -->
@section('content')
    <div class="get_another_month">
        <div class="row first_row">
            <div class="col huge_coll">
                <p>Pregledi po mjesecima</p>
            </div>
            <div class="col first_col" onclick="open_get_months();">
                <p id="months_value">{{get_month($m)}}</p>
                <i class="fas fa-angle-down"></i>
            </div>
            <div class="col first_col last_col" onclick="open_get_years();">
                <p>2019</p>
                <i class="fas fa-angle-down"></i>
            </div>

            <!-- choose month -->
            <div class="chose_options" id="choose_month">
                <div class="single_option" onclick="get_month('0', 'Svi mjeseci', '{{$y}}');">
                    <p>Svi mjeseci</p>
                </div>
                <div class="single_option" onclick="get_month('1', 'Januar', '{{$y}}');">
                    <p>Januar</p>
                </div>
                <div class="single_option" onclick="get_month('2', 'Februar', '{{$y}}');">
                    <p>Februar</p>
                </div>
                <div class="single_option" onclick="get_month('3', 'Mart', '{{$y}}');">
                    <p>Mart</p>
                </div>
                <div class="single_option" onclick="get_month('4', 'April', '{{$y}}');">
                    <p>April</p>
                </div>
                <div class="single_option" onclick="get_month('5', 'Maj', '{{$y}}');">
                    <p>Maj</p>
                </div>
                <div class="single_option" onclick="get_month('6', 'Juni', '{{$y}}');">
                    <p>Juni</p>
                </div>
                <div class="single_option" onclick="get_month('7', 'Juli', '{{$y}}');">
                    <p>Juli</p>
                </div>
                <div class="single_option" onclick="get_month('8', 'August', '{{$y}}');">
                    <p>August</p>
                </div>
                <div class="single_option" onclick="get_month('9', 'Septembar', '{{$y}}');">
                    <p>Septembar</p>
                </div>
                <div class="single_option" onclick="get_month('10', 'Oktobar', '{{$y}}');">
                    <p>Oktobar</p>
                </div>
                <div class="single_option" onclick="get_month('11', 'Novembar', '{{$y}}');">
                    <p>Novembar</p>
                </div>
                <div class="single_option" onclick="get_month('12', 'Decembar', '{{$y}}');">
                    <p>Decembar</p>
                </div>
            </div>

            <!-- choose month -->
            <div class="chose_options" id="choose_year">
                <div class="single_option" onclick="get_year('17', '{{$m}}');">
                    <p>2017</p>
                </div>
                <div class="single_option" onclick="get_year('18', '{{$m}}');">
                    <p>2018</p>
                </div>
                <div class="single_option" onclick="get_year('19', '{{$m}}');">
                    <p>2019</p>
                </div>
                <div class="single_option" onclick="get_year('20', '{{$m}}');">
                    <p>2020</p>
                </div>
                <div class="single_option" onclick="get_year('21', '{{$m}}');">
                    <p>2021</p>
                </div>
            </div>
        </div>
    </div>



    <div id="chartContainer"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        var arr = JSON.parse('<?php echo $views;?>');

        var header = 'Broj pregleda za ' + '<?php echo get_month($m); ?>';

        window.onload = function() {
            var dataPoints = [];
            console.log(dataPoints);

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light3",
                zoomEnabled: true,
                zoomType: "xy",
                title: {
                    text: header,
                    fontFamily: "apple_r",
                    padding: 20
                },

                axisY: {
                    title: "Pregledi",
                    titleFontSize: 24,
                    gridThickness: 0.2,
                    includeZero: false,
                    margin:30,
                },axisX:{
                    margin: 30,
                    interval: 1,
                    startValue:1,
                    endValue:31
                },
                data: [{
                    type: "line",
                    yValueFormatString: "0.## Pregleda",
                    dataPoints: dataPoints
                }]
            });

            function addData(data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    dataPoints.push({
                        x: parseInt(data[i]['x']),
                        y: parseInt(data[i]['y'])
                    });
                }
                chart.render();
            }

            addData(arr);

        }
    </script>
@stop