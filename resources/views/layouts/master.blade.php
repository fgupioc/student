<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<meta http-equiv="refresh" content="3;url={{route('dashboard')}}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/icheck/flat/green.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.inc.sidebar')
        @include('layouts.inc.navigation')
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/chartjs/chart.min.js')}}"></script>
<script src="{{asset('/assets/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('/assets/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('/assets/js/icheck/icheck.min.js')}}"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>
<script src="{{asset('/assets/js/moris/raphael-min.js')}}"></script>
<script src="{{asset('/assets/js/moris/morris.js')}}"></script>
{{--<scripts src="{{asset('/assets/js/moris/example.js')}}"></scripts>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<script src="{{asset('/assets/js/moment.min2.js')}}"></script>
<script src="{{asset('/assets/js/datepicker/daterangepicker.js')}}"></script>

<script>
    const token = $('meta[name="csrf-token"]').attr('content');
</script> 
@yield('scripts')

</body>
</html>