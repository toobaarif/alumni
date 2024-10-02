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

                                        @if ($errors->any())
                                            <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                        <h3 class="card-title m-3">Campaign</h3>

                                        
                                        <div class="card-header flex-wrap">

                                            <div>
                                                <h4 class="card-title">Add Campaign</h4>
                                            </div>
                                           

                                        </div>
                                        {{-- form start --}}

                                        <div class="container mt-4">
                                            <form action="{{ url('campaign') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                    <!-- Name Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name"  class="form-control" id="name" placeholder="Enter campaign name" required>
                                                        </div>
                                                    </div>
                                                  

                                                      <!-- Timeline / Duration Field -->
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="timeline">Timeline / Duration</label>
                                                            <select class="form-control" name="timeline"  id="timeline">
                                                                <option value="year">Year</option>
                                                                <option value="month">Month</option>
                                                                <option value="week">Week</option>
                                                                <option value="3months">3 Months</option>
                                                                <option value="6months">6 Months</option>
                                                                <option value="continuous">Continuous</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                        
                                                <div class="row">
                                                   

                                                     <!-- Objectives Field -->
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="objectives">Objectives</label>
                                                            <textarea class="form-control" name="objectives"  id="objectives" placeholder="State the objectives of the campaign"></textarea>
                                                        </div>
                                                    </div>


                                                    <!-- Why Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="why">Why</label>
                                                            <textarea class="form-control" name="why"  id="why" placeholder="Explain why the donation is needed"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="row">

                                                      <!-- Max Collection Required Field -->
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="maxCollection">Max Collection Required</label>
                                                            <input type="number" name="maxCollection"  class="form-control" id="maxCollection" placeholder="Enter maximum collection required" required>
                                                        </div>
                                                    </div>

                                                    <!-- Minimum Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="minimum">Minimum</label>
                                                            <input type="number" name="minimum"  class="form-control" id="minimum" placeholder="Enter minimum amount">
                                                        </div>
                                                    </div>

                                                  

                                                </div>

                                                <div class="row">
                                                    <!-- Status Field (Boolean) -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <select class="form-control" name="status"  id="status">
                                                                <option value="1">Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Cover Photo Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="coverPhoto">Cover Photo (Optional)</label>
                                                            <input type="file" name="coverPhoto"  class="form-control-file" id="coverPhoto">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <!-- Pic One Main Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="picOneMain">Pic One Main (Optional)</label>
                                                            <input type="file" name="picOneMain"  class="form-control-file" id="picOneMain">
                                                        </div>
                                                    </div>
                                                    <!-- Pic Two Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="picTwo">Pic Two (Optional)</label>
                                                            <input type="file" class="form-control-file" name="picTwo"  id="picTwo">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <!-- Account Name Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="accountName">Account Name</label>
                                                            <input type="text" class="form-control" name="accountName"  id="accountName" placeholder="Enter account name" required>
                                                        </div>
                                                    </div>
                                                    <!-- Bank Name Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="bankName">Bank Name</label>
                                                            <input type="text" class="form-control" name="bankName"  id="bankName" placeholder="Enter bank name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <!-- Account Number Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="accountNumber">Account Number</label>
                                                            <input type="text" class="form-control" name="accountNumber"  id="accountNumber" placeholder="Enter account number" required>
                                                        </div>
                                                    </div>
                                                    <!-- Account Name 2 Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="accountName2">Account Name 2 (Optional)</label>
                                                            <input type="text" class="form-control" name="accountName2"  id="accountName2" placeholder="Enter second account name">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <!-- Bank Name 2 Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="bankName2">Bank Name 2 (Optional)</label>
                                                            <input type="text" class="form-control" name="bankName2" id="bankName2" placeholder="Enter second bank name">
                                                        </div>
                                                    </div>
                                                    <!-- Account Number 2 Field -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="accountNumber2">Account Number 2 (Optional)</label>
                                                            <input type="text" class="form-control" name="accountNumber2" id="accountNumber2" placeholder="Enter second account number">
                                                        </div>
                                                    </div>
                                                </div>
                                                



                                        
                                                <br>
                                                <!-- Submit Button -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                        

                                        {{-- form end --}}

                                        
                      
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
