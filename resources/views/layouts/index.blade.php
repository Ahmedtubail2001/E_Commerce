<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kode.bragherstudio.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 16:35:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>Kode - Premium Bootstrap Admin Template</title>

    <!-- ========== Css Files ========== -->
    <link href="{{ asset('cms/css/root.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <!-- Start Page Loading -->

    <!-- START TOP -->
    <div id="top" class="clearfix">

        <!-- Start App Logo -->
        <div class="applogo">
            <a href="#" class="logo">Store Project</a>
        </div>
        <!-- End App Logo -->

        <!-- Start Sidebar Show Hide Button -->
        <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
        <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
        <!-- End Sidebar Show Hide Button -->

        <!-- Start Searchbox -->
        <form class="searchform">
            <input type="text" class="searchbox" id="searchbox" placeholder="Search">
            <span class="searchbutton"><i class="fa fa-search"></i></span>
        </form>
        <!-- End Searchbox -->


        <!-- Start Sidepanel Show-Hide Button -->
        <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
        <!-- End Sidepanel Show-Hide Button -->

        <!-- Start Top Right -->
        <ul class="top-right">
            <li class="dropdown link">
        </ul>
        <!-- End Top Right -->

    </div>
    <!-- END TOP -->

    <!-- START SIDEBAR -->

    <div class="sidebar clearfix">
        <ul class="sidebar-panel nav">
            <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>Stores<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="{{ route('store.index') }}">Index</a></li>
                    <li><a href="{{ route('store.create') }}">Create</a></li>
                </ul>
            </li>
        </ul>

        <ul class="sidebar-panel nav">
            <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Products<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="{{ route('product.index') }}">Index</a></li>
                    <li><a href="{{ route('product.create') }}">Create</a></li>
                </ul>
            </li>
        </ul>

        <ul class="sidebar-panel nav" style="margin-bottom: 885px;">
            <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Transaction<span
                        class="caret"></span></a>
                <ul>
                    <li><a href="{{ url('transactions/index') }}">Index</a></li>
                    <li><a href="{{ route('productDetail') }}">Details</a></li>

                </ul>
            </li>
        </ul>

    </div>
    <!-- END SIDEBAR -->

    <!-- START CONTENT -->
    <div class="content">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">@yield('titelPage')</h1>
            <ol class="breadcrumb">
            </ol>
        </div>
        <!-- End Page Header -->
        <!-- END CONTAINER -->
        @yield('content')

        <!-- Start Footer -->
        <div class="row footer">
            <div class="col-md-6 text-left">
                Ahmed Tubail © 2022 <a href="#" target="_blank"></a>
                All rights reserved.
            </div>
            <div class="col-md-6 text-right">
                Design and Developed by <a href="#" target="_blank">Ahmed A Tubail</a>
            </div>
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Content -->

    <!-- jQuery Library -->
    <script src="{{ asset('cms/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript File-->
    <script src="{{ asset('cms/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugin.js - Some Specific JS codes for Plugin Settings -->
    <script src="{{ asset('cms/js/plugins.js') }}"></script>

    <!-- Bootstrap Select -->
    <script src="{{ asset('cms/js/bootstrap-select/bootstrap-select.js') }}"></script>

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('cms/js/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <!-- main file -->
    <script src="{{ asset('cms/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js') }}"></script>

    <!-- bootstrap file -->
    <script src="{{ asset('cms/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('cms/js/summernote/summernote.min.js') }}"></script>

    <!-- Flot Chart -->
    <!-- main file -->
    <script src="{{ asset('cms/js/flot-chart/flot-chart.js') }}"></script>

    <!-- time.js -->
    <script src="{{ asset('cms/js/flot-chart/flot-chart-time.js') }}"></script>

    <!-- stack.js -->
    <script src="{{ asset('cms/js/flot-chart/flot-chart-stack.js') }}"></script>

    <!-- pie.js -->
    <script src="{{ asset('cms/js/flot-chart/flot-chart-pie.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ asset('cms/js/flot-chart/flot-chart-plugin.js') }}"></script>

    <!-- Chartist -->
    <!-- main file -->
    <script src="{{ asset('cms/js/chartist/chartist.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ asset('cms/js/chartist/chartist-plugin.js') }}"></script>

    <!-- Easy Pie Chart -->
    <!-- main file -->
    <script src="{{ asset('cms/js/easypiechart/easypiechart.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ asset('cms/js/easypiechart/easypiechart-plugin.js') }}"></script>

    <!-- Rickshaw -->
    <!-- d3 -->
    <script src="{{ asset('cms/js/rickshaw/d3.v3.js') }}"></script>

    <!-- main file -->
    <script src="{{ asset('cms/js/rickshaw/rickshaw.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ asset('cms/js/rickshaw/rickshaw-plugin.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('cms/js/datatables/datatables.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('cms/js/sweet-alert/sweet-alert.min.js') }}"></script>

    <!-- Kode Alert -->
    <script src="{{ asset('cms/js/kode-alert/main.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('cms/js/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Moment.js -->
    <script src="{{ asset('cms/js/moment/moment.min.js') }}"></script>

    <!-- Full Calendar -->
    <script src="{{ asset('cms/js/full-calendar/fullcalendar.js') }}"></script>

    <!-- Bootstrap Date Range Picker -->
    <script src="{{ asset('cms/js/date-range-picker/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/crud.js') }}"></script>

    @yield('scripts')

    <!-- Today Sales -->
    <script>
        // set up our data series with 50 random data points

        var seriesData = [
            [],
            [],
            []
        ];
        var random = new Rickshaw.Fixtures.RandomData(20);

        for (var i = 0; i < 110; i++) {
            random.addData(seriesData);
        }

        // instantiate our graph!

        var graph = new Rickshaw.Graph({
            element: document.getElementById("todaysales"),
            renderer: 'bar',
            series: [{
                color: "#33577B",
                data: seriesData[0],
                name: 'Photodune'
            }, {
                color: "#77BBFF",
                data: seriesData[1],
                name: 'Themeforest'
            }, {
                color: "#C1E0FF",
                data: seriesData[2],
                name: 'Codecanyon'
            }]
        });

        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
                var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                var swatch = '<span class="detail_swatch" style="background-color: ' + series.color +
                    '"></span>';
                var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                return content;
            }
        });
    </script>
    <!-- Today Activity -->

    <script>
        // set up our data series with 50 random data points

        var seriesData = [
            [],
            [],
            []
        ];
        var random = new Rickshaw.Fixtures.RandomData(20);

        for (var i = 0; i < 50; i++) {
            random.addData(seriesData);
        }

        // instantiate our graph!

        var graph = new Rickshaw.Graph({
            element: document.getElementById("todayactivity"),
            renderer: 'area',
            series: [{
                color: "#9A80B9",
                data: seriesData[0],
                name: 'London'
            }, {
                color: "#CDC0DC",
                data: seriesData[1],
                name: 'Tokyo'
            }]
        });

        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
                var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
                var swatch = '<span class="detail_swatch" style="background-color: ' + series.color +
                    '"></span>';
                var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
                return content;
            }
        });
    </script>

</body>

<!-- Mirrored from kode.bragherstudio.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 16:35:48 GMT -->

</html>
