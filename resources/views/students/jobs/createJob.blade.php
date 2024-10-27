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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Alumni | Departments</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">

    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ url('assets//buttons/1.6.4/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">

    <!-- tagify-css -->
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

    <!-- Style css -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
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

                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="card dz-card" id="accordion-one">
                                        {{-- success alert --}}
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-hidden="true"></button>
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <h3 class="card-title m-3">Post a Job</h3>
                                                        <!-- Hidden User ID -->
                                                        <input type="hidden" name="user_id" value="{{ $userId }}">
                                            
                                        
                                        <div class="card-header flex-wrap">

                                            {{-- <div>
                                                <h4 class="card-title">Department Table</h4>
                                            </div> --}}
                                            <div class="container">
                                                <form action="{{ url('jobs/store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">
                                                        <!-- Job Title Field -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="job_title">Job Title:</label>
                                                                <input type="text" name="job_title" id="job_title" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Company Name Field -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="company_name">Company Name:</label>
                                                                <input type="text" name="company_name" id="company_name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Job Location Field -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="job_location">Job Location:</label>
                                                                <input type="text" name="job_location" id="job_location" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Zip Code Field -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code:</label>
                                                                <input type="text" name="zip_code" id="zip_code" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Job Description Field -->
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="job_description">Job Description:</label>
                                                                <textarea name="job_description" id="job_description" class="form-control" rows="4" required></textarea>
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Job Picture Field -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="job_picture">Job Picture:</label>
                                                                <input type="file" name="job_picture" id="job_picture" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        <!-- Submit Button -->
                                                        <div class="col-md-12">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Submit Job</button>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                </form>
                                            </div>
                                            
                                            <!-- jQuery Script for Showing Account Details Based on Campaign -->
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                  
                                            




                                        </div>
                      
                                    </div>
                                    <!-- /Default accordion -->


                                </div>







                         
                                <!--/tab-content-->
                            </div>


                        </div>
                    </div>
                    <!-- Column ends -->

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
    <script src="{{ url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>


    <!-- Datatable -->
    <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins-init/datatables.init.js') }}"></script>



 







</body>


</html>
