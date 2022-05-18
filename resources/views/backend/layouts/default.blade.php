<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('backend') }}" type="image/ico" />
    <title>VRP</title>
    <!-- Bootstrap -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset(env('FOLDER_PUBLIC').'backend/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/jquery/dist/jquery.min.js') }}"></script>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
            @include('backend.layouts.partials.header')
            @include('backend.layouts.partials.navigation')
            <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Xem frontend" href="{{ config()->get('constants.FRONTEND_URL') }}" target="_blank">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
    @include('backend.layouts.partials.profile')
    <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        @include('backend.layouts.partials.footer')
    </div>
</div>
<!-- Bootstrap -->
<script src="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset(env('FOLDER_PUBLIC').'backend/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
<script>
    $('.myDatepicker').datetimepicker({
        //format: 'DD/MM/YYYY hh:mm:ss A',
        defaultDate: new Date()
    });
</script>
<!-- Custom Theme Scripts -->
<script src="{{ asset(env('FOLDER_PUBLIC').'backend/build/js/custom.js') }}"></script>
</body>
</html>
