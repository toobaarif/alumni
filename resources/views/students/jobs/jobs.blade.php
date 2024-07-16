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
    <title>Alumni|jobs</title>
    <!-- Favicon -->
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


        <!-- form -->
        <div class="content-body ">

            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <div class="col-xl-9 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>CREATE JOB</h2>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        @csrf
                                    
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Job Title:</label>
                                            <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" placeholder="Job Title">
                                            @error('job_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Company Name:</label>
                                            <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" placeholder="Company Name">
                                            @error('company_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="row">
                                            <div class="mb-3 col-md-9">
                                                <label class="form-label">Job Location:</label>
                                                <input type="text" name="job_location" class="form-control @error('job_location') is-invalid @enderror" placeholder="Job Location">
                                                @error('job_location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label class="form-label">Zip</label>
                                                <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror">
                                                @error('zip_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="mb-3 col-md-">
                                            <label for="formFile" class="form-label">Job Picture</label>
                                            <input name="job_picture" class="form-control @error('job_picture') is-invalid @enderror" type="file" id="formFile">
                                            @error('job_picture')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Job description:</label>
                                            <textarea name="job_description" class="form-control @error('job_description') is-invalid @enderror" rows="5" placeholder="Type your message..."></textarea>
                                            @error('job_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- form ends -->


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




    </div>
</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:29:04 GMT -->

</html>
