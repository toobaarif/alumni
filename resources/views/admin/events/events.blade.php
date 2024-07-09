<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:27:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Alumni | Events</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url('theme/images/favi.png')}}">

    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">

    <!-- tagify-css -->
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

    <!-- datteeeeeee -->
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- end -->
    <!-- Style css -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">
    <div id="main-wrapper">
        <!--*******
        Preloader start
    ********-->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!--*******
    Preloader end
********-->


        @include('admin.layout.header')
        @include('admin.layout.sidebar')



        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects style-1">
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">Events</h4>

                                        <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas"
                                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+
                                            Add Events</a>
                                        <div>
                                        </div>
                                        <table id="empoloyees-tblwrapper" class="table">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Event Name</th>
                                                    <th>Event Type</th>
                                                    <th>Event Status</th>
                                                    <th>Event Location</th>
                                                    <th>Event Date</th>
                                                    <th>Picture</th>
                                                    <th>Event description</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sno = 1;
                                                @endphp
                                                @foreach ($events as $event)
                                                    <tr>
                                                        <td>{{ $sno++ }}</td>
                                                        <td>{{ $event->name}}</td>
                                                        <td>{{ $event->event_type}}</td>
                                                        <td>{{ $event->event_status}}</td>
                                                        <td>{{ $event->event_location}}</td>
                                                        <td>{{ $event->event_date}}</td>
                                                        <td>{{ $event->picture}}</td>
                                                        <td>{{ $event->description}}</td>


                                                        <td>
                                                            <div
                                                                style="display: flex; justify-content: flex-end; align-items: center; gap: 10px;">
                                                                <form action="{{ route('events.destroy', $event->id) }}"
                                                                    method="POST" style="display:inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Required vendors -->
            <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
            <script src="{{ url('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ url('assets/vendor/apexchart/apexchart.js') }}"></script>

            <!-- Dashboard 1 -->
            <script src="{{ url('assets/js/dashboard/dashboard-1.js') }}"></script>
            <script src="{{ url('assets/vendor/draggable/draggable.js') }}"></script>

            <!-- Vectormap -->
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
            <script src="{{ url('assets/js/custom.js') }}"></script>
            <script src="{{ url('assets/js/deznav-init.js') }}"></script>
            <script src="{{ url('assets/js/demo.js') }}"></script>
            <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>

            <!-- dateee -->
            <script src="vendor/global/global.min.js"></script>
            <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="vendor/chart.js/Chart.bundle.min.js"></script>
            <!-- Apex Chart -->
            <script src="vendor/apexchart/apexchart.js"></script>



            <!-- Daterangepicker -->
            <!-- momment js is must -->
            <script src="vendor/moment/moment.min.js"></script>
            <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- clockpicker -->
            <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
            <!-- asColorPicker -->
            <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
            <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
            <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
            <!-- Material color picker -->
            <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
            <!-- pickdate -->
            <script src="vendor/pickadate/picker.js"></script>
            <script src="vendor/pickadate/picker.time.js"></script>
            <script src="vendor/pickadate/picker.date.js"></script>



            <!-- Daterangepicker -->
            <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
            <!-- Clockpicker init -->
            <script src="js/plugins-init/clock-picker-init.js"></script>
            <!-- asColorPicker init -->
            <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
            <!-- Material color picker init -->
            <script src="js/plugins-init/material-date-picker-init.js"></script>
            <!-- Pickdate -->
            <script src="js/plugins-init/pickadate-init.js"></script>

            <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

            <script src="js/custom.js"></script>
            <script src="js/deznav-init.js"></script>
            <script src="js/demo.js"></script>
            <script src="js/styleSwitcher.js"></script>

        </div>
</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:29:04 GMT -->

</html>