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
    <title>Alumni Portal</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">

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

    <!-- Style css -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

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

            <!-- container starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0">
                            <div class="card-header flex-wrap">
                                    <div>
                                        <h4 class="card-title">Students</h4>
                                    </div>
                                    <div>


                                    </div>

                                </div>
                                <div class="table-responsive active-projects style-1">
                                   
                                    <table id="empoloyees-tblwrapper" class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Graduation Year</th>
                                                <th>Transcript No</th>
                                                <th>Department</th>
                                                <th>Program</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $sno = 1;
                                            @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $sno++ }}</td> <!-- Serial number column -->
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->graduation_year }}</td>
                                                    <td>{{ $user->transcript_no }}</td>
                                                    <td>
                                                        @if ($user->department)
                                                            {{ $user->department->department_name }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ optional($user->department)->department_name }}
                                                    </td>
                                                    <td><a style="color:blue" href="{{url('/view-profile')}}">View
                                                            Profile</a></td>
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

            <!-- Required vendors -->
            <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
            <script src="{{ url('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
            <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ url('assets/vendor/apexchart/apexchart.js') }}"></script>

            <!-- Dashboard 1 -->
            <script src="{{ url('assets/js/dashboard/dashboard-1.js') }}"></script>
            <script src="{{ url('assets/vendor/draggable/draggable.js') }}"></script>


            <!-- tagify -->
            <script src="{{ url('assets/vendor/tagify/dist/tagify.js') }}"></script>

            <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ url('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ url('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
            <script src="{{ url('assets/vendor/datatables/js/jszip.min.js') }}"></script>
            <script src="{{ url('assets/js/plugins-init/datatables.init.js') }}"></script>

            <!-- Apex Chart -->

            <script src="{{ url('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
            <script
                src="{{ url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


            <!-- Vectormap -->
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
            <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
            <script src="{{ url('assets/js/custom.js') }}"></script>
            <script src="{{ url('assets/js/deznav-init.js') }}"></script>
            <script src="{{ url('assets/js/demo.js') }}"></script>
            <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>


            <!-- Datatable -->
            <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ url('assets/js/plugins-init/datatables.init.js') }}"></script>








</body>


</html>