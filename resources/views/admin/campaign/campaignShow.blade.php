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
                                        <h3 class="card-title m-3">Campaign</h3>

                                      

                                        <a class="btn btn-primary" style="white-space: nowrap;"
                                         href="{{ url('campaign') }}">Add Campaign</a>

                                        <div class="card-header flex-wrap">

                                            <div>
                                                <h4 class="card-title">Campaign Table</h4>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Timeline</th>
                                                            <th>Objectives</th>
                                                            <th>Why</th>
                                                            <th>Max Collection</th>
                                                            <th>Minimum</th>
                                                            <th>Status</th>
                                                            <th>Cover Photo</th>
                                                            <th>Pic One Main</th>
                                                            <th>Pic Two</th>
                                                            <th>Account Name</th>
                                                            <th>Bank Name</th>
                                                            <th>Account Number</th>
                                                            <th>Account Name 2</th>
                                                            <th>Bank Name 2</th>
                                                            <th>Account Number 2</th>
                                                            <th>Approved</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $campaign)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $campaign->name }}</td>
                                                            <td>{{ $campaign->timeline }}</td>
                                                            <td>{{ $campaign->objectives }}</td>
                                                            <td>{{ $campaign->why }}</td>
                                                            <td>{{ $campaign->maxCollection }}</td>
                                                            <td>{{ $campaign->minimum }}</td>
                                                            <td>{{ $campaign->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                            <td>
                                                                @if($campaign->coverPhoto)
                                                                    <img src="{{ asset('storage/' . $campaign->coverPhoto) }}" alt="Cover Photo" width="100">
                                                                @else
                                                                    N/A
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($campaign->picOneMain)
                                                                    <img src="{{ asset('storage/' . $campaign->picOneMain) }}" alt="Pic One Main" width="100">
                                                                @else
                                                                    N/A
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($campaign->picTwo)
                                                                    <img src="{{ asset('storage/' . $campaign->picTwo) }}" alt="Pic Two" width="100">
                                                                @else
                                                                    N/A
                                                                @endif
                                                            </td>
                                                            <td>{{ $campaign->accountName }}</td>
                                                            <td>{{ $campaign->bankName }}</td>
                                                            <td>{{ $campaign->accountNumber }}</td>
                                                            <td>{{ $campaign->accountName2 ?? 'N/A' }}</td>
                                                            <td>{{ $campaign->bankName2 ?? 'N/A' }}</td>
                                                            <td>{{ $campaign->accountNumber2 ?? 'N/A' }}</td>
                                                            <td>{{ $campaign->approve == 1 ? 'Yes' : 'No' }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                   

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
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>


    <!-- Datatable -->
    <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins-init/datatables.init.js') }}"></script>



 







</body>


</html>
