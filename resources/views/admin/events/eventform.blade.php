<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... other meta tags ... -->
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

    <!-- Include your CSS files here -->
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">
    <div id="main-wrapper">
        <!-- Preloader start -->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader end -->

        @include('admin.layout.header')
        @include('admin.layout.sidebar')

        <div class="content-body ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Create Event</h2>
                            </div>
                            @if (session('success'))
                                <div class="alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="card-body">

                                <div class="basic-form">

                                <form action="{{ url('eventStore') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Name:</label>
                                                <input type="text" class="form-control" name="event_name"
                                                    placeholder="Event Name:" >
                                                    @error('event_name')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Type:</label>
                                                <select class="form-control" name="event_type" >
                                                    <option value="Conference">Conference</option>
                                                    <option value="Workshop">Workshop</option>
                                                    <option value="Meetup">Meetup</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                @error('event_type')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Status:</label>
                                                <select class="form-control" name="event_status" >
                                                    <option value="planned">Planned</option>
                                                    <option value="ongoing">Ongoing</option>
                                                    <option value="completed">Completed</option>
                                                </select>
                                                @error('event_status')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Location:</label>
                                                <input type="text" class="form-control" name="event_location"
                                                    placeholder="Event Location:" >
                                            </div>
                                            @error('event_location')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Date:</label>
                                                <input type="date" class="form-control" name="event_date" >
                                            </div>
                                            @error('event_date')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Picture:</label>
                                                <input class="form-control" type="file" name="picture" >
                                            </div>
                                            @error('picture')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Event Description:</label>
                                                <textarea class="form-control" rows="5" name="event_description"
                                                    placeholder="Type your message..." ></textarea>
                                            </div>
                                            @error('event_description')
                                    <span style="color: red">{{ $message }}</span>
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

        <!-- Required vendors -->
        <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
        <script src="{{ url('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
        <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ url('assets/vendor/apexchart/apexchart.js') }}"></script>
        <script src="{{ url('assets/js/dashboard/dashboard-1.js') }}"></script>
        <script src="{{ url('assets/vendor/draggable/draggable.js') }}"></script>
        <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
        <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
        <script src="{{ url('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
        <script src="{{ url('assets/js/custom.js') }}"></script>
        <script src="{{ url('assets/js/deznav-init.js') }}"></script>
        <script src="{{ url('assets/js/demo.js') }}"></script>
        <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>

        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="vendor/apexchart/apexchart.js"></script>
        <script src="vendor/moment/moment.min.js"></script>
        <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
        <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
        <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
        <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <script src="vendor/pickadate/picker.js"></script>
        <script src="vendor/pickadate/picker.time.js"></script>
        <script src="vendor/pickadate/picker.date.js"></script>
        <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
        <script src="js/plugins-init/clock-picker-init.js"></script>
        <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
        <script src="js/plugins-init/material-date-picker-init.js"></script>
        <script src="js/plugins-init/pickadate-init.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/deznav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>
    </div>
</body>

</html>