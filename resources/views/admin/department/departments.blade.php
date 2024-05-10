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
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/favicon.png') }}">

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
                <div class="element-area">
                    <div class="demo-view">
                        <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                            <div class="row">
                                <!-- Column starts -->
                                <div class="col-xl-12">
                                    <div class="card dz-card" id="accordion-one">
                                             {{-- success alert --}}
                                             @if (session()->has('message'))
                                             <div class="alert alert-success">
                                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                 {{ session()->get('message') }}
                                             </div>
                                         @endif
                                    <h3 class="card-title">Departments</h3>
                                        <form action="{{ route('add.department') }}" method="post" class="d-flex align-items-center">
                                            @csrf
                                            <input type="text" name="department_name" class="form-control me-2" placeholder="Enter department name">
                                            <button type="submit" class="btn btn-primary">Add Department</button>
                                        </form>
                                        <div class="card-header flex-wrap">
                                        
                                            <div>
                                                <h4 class="card-title">Department Table</h4>
                                            </div>
                                            <div>
                                            
                                            </div>
                                       
                                        </div>
                                        

                                        <!--tab-content-->
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="card-body pt-0">
                                                    <div class="table-responsive">

                                                        <table id="example" class="display table"
                                                            style="min-width: 845px">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No</th>
                                                                    <th>Department Name</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $sno = 1;
                                                                @endphp
                                                                @foreach ($departments as $department)
                                                                    <tr>
                                                                        <td>{{ $sno++ }}</td>
                                                                        <td>{{ $department->department_name }}</td>
                                                                        <td>

                                                                            <button type="button"
                                                                                class="btn btn-primary edit-btn"
                                                                                data-department-id="{{ $department->id }}"
                                                                                data-department-name="{{ $department->department_name }}">Edit</button>



                                                                            <form
                                                                                action="{{ url('delete', $department->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('POST')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger"
                                                                                    onclick="alert('Are you sure?')">Delete</button>
                                                                            </form>
                                                                        </td>




                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>



                                                    </div>
                                                </div>
                                                <!-- /Default accordion -->

                                                <div class="modal fade" id="editModal" tabindex="-1"
                                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit
                                                                    Department</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your form for editing department -->
                                                                <form id="editForm">
                                                                    <!-- Department name input -->
                                                                    <div class="mb-3">
                                                                        <label for="departmentName"
                                                                            class="form-label">Department Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="departmentName" name="departmentName"
                                                                            required>
                                                                    </div>
                                                                    <!-- Add more fields as needed -->
                                                                    <!-- Hidden input for department ID -->
                                                                    <input type="hidden" id="departmentId"
                                                                        name="departmentId">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade " id="html" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="card-body pt-0 p-0 code-area">

                                                </div>
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



                <!-- Your existing JavaScript code -->
                <!-- Your existing JavaScript code -->
                <script>
                    // Add CSRF token to all AJAX requests
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $(document).ready(function() {
                        // Add event listener to form submission
                        $('#editForm').submit(function(event) {
                            // Prevent default form submission behavior
                            event.preventDefault();

                            // Serialize form data
                            var formData = $(this).serialize();

                            // Send AJAX request to update data
                            $.ajax({
                                url: '{{ route('update.department') }}', // Use named route instead of URL
                                type: 'POST',
                                data: formData,
                                success: function(response) {
                                    // Log response for debugging
                                    console.log('AJAX request successful');
                                    console.log('Response:', response);

                                    // Hide the modal after successful update
                                    $('#editModal').modal('hide');

                                    // Find the row that corresponds to the updated department
                                    var updatedRow = $('#example tbody').find(
                                            'button[data-department-id="' + response.departmentId + '"]')
                                        .closest('tr');

                                    // Update the department name in the row
                                    updatedRow.find('td:nth-child(2)').text(response.departmentName);
                                },
                                error: function(xhr, status, error) {
                                    // Handle error response
                                    console.error(xhr.responseText); // Log detailed error message
                                    alert(
                                        'An error occurred while updating the department. Please try again.'); // Show generic error message
                                }
                            });
                        });

                        $('.edit-btn').click(function() {
                            // Get department ID and name from data attributes
                            var departmentId = $(this).data('department-id');
                            var departmentName = $(this).data('department-name');

                            // Populate the modal with department details
                            $('#departmentName').val(departmentName);
                            $('#departmentId').val(departmentId);

                            // Show the modal
                            $('#editModal').modal('show');
                        });
                    });
                </script>







</body>


</html>
