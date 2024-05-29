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
    <title>Alumni | Work experience</title>
    <!-- Favicon -->
   <link rel="shortcut icon" type="image/png" 
    href="{{url('theme/images/favi.png')}}">

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


        <div class="content-body">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <h1>Edit Your Profile</h1>
                </ol>
            </div>
            <div class="container-fluid">
               
            
                <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Edit Work Experience</h3>
                    </div>
                    <form action="{{ route('workExperience.update', $workExperience->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="job_title">Job Title:</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $workExperience->job_title }}">
                        </div>
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" id="company" name="company" value="{{ $workExperience->company }}">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $workExperience->start_date }}">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $workExperience->end_date }}">
                        </div>
                        <div class="form-group">
                            <label for="job_description">Job Description:</label>
                            <textarea class="form-control" id="job_description" name="job_description">{{ $workExperience->job_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
                


            
            </div></div></div>





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
