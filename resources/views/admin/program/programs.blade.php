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
    <title>Alumni | Programs</title>
<!-- Favicon -->
<link rel="shortcut icon" type="image/png" 
    href="{{url('theme/images/favi.png')}}">

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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                {{-- success alert --}}
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true"></button>
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div>
                                    <h3 class="card-title m-3">Program</h3>
                                </div>
                                <form action="{{ route('add.program') }}" method="post"
                                    class="d-flex align-items-center">
                                    @csrf
                                    <input type="text" name="program_name" class="form-control mx-3"
                                        placeholder="Enter program name" style="width: 500px; height: 38px;">
                                    <span style="color: red; margin-right: 10px;">@error('program_name') {{$message}}
                                        @enderror</span>
                                    <select name="department_id" class="form-select me-1"
                                        style="width: 500px; height: 38px;">
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span style="color: red; margin-right: 5px;">@error('department_id') {{$message}}
                                        @enderror</span>
                                    <button type="submit" class="btn btn-primary" style="white-space: nowrap;">Add
                                        Program</button>
                                </form>

                                <div class="card-header flex-wrap">
                                    <div>
                                        <h4 class="card-title">Programs Table</h4>
                                    </div>
                                    <div>


                                    </div>

                                </div>
                                <div class="table-responsive active-projects style-1">

                                    <table id="empoloyees-tblwrapper" class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Program Name</th>
                                                <th>Department Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $sno = 1;
                                            @endphp
                                            @foreach ($programs as $program)
                                                <tr>
                                                    <td>{{ $sno++ }}</td>
                                                    <td>{{ $program->program_name }}</td>
                                                    <td>{{ $program->department->department_name }}
                                                    </td>
                                                    <!-- Access the department name through the relationship -->
                                                    <td>
                                                        <!-- ye btn hai edit wala  -->
                                                        <div
                                                            style="display: flex; justify-content: flex-end; align-items: center; gap: 10px;">
                                                            <button type="button" class="btn btn-primary edit-btn"
                                                                data-program-id="{{ $program->id }}"
                                                                data-program-name="{{ $program->program_name }}"
                                                                style="border-radius: 5px;">Edit</button>

                                                            <form action="{{ route('programs.delete', $program->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger"
                                                                    style="border-radius: 5px;"
                                                                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                                            </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </table>




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

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editProgramModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="editProgramModalLabel">Edit Program</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<!-- Your form for editing programs -->
<form id="editForm">
<!-- Program name input -->
<div class="mb-3">
<label for="programName" class="form-label">Program Name</label>
<input type="text" class="form-control" id="programName" name="programName" required>
</div>
<!-- Department selection -->
<div class="mb-3">
<label for="departmentSelect" class="form-label">Department</label>
<select class="form-select" id="departmentSelect" name="departmentId" required>
<!-- Blade syntax to dynamically populate options with department names -->
<option value="">Select Department</option>
@foreach ($departments as $department)
<option value="{{ $department->id }}">{{ $department->department_name }}</option>
@endforeach
</select>
</div>
<!-- Hidden input for program ID -->
<input type="hidden" id="programId" name="programId">
<button type="submit" class="btn btn-primary">Update</button>
</form>
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


<!-- ye dekhna hai wo nhi program ka  -->
<!-- Your existing JavaScript code -->


<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$(document).ready(function () {
// Add event listener to form submission
$('#editForm').submit(function (event) {
// Prevent default form submission behavior
event.preventDefault();

// Serialize form data
var formData = $(this).serialize();

// Send AJAX request to update data
$.ajax({
url: '{{ route('update.program') }}', // Use named route instead of URL
type: 'POST',
data: formData,
success: function (response) {
// Log response for debugging
console.log('AJAX request successful');
console.log('Response:', response);

// Hide the modal after successful update
$('#editModal').modal('hide');

// Assuming you have a function to update the UI with the updated program data
updateProgramUI(response);
},
error: function (xhr, status, error) {
// Handle error response
console.error(xhr.responseText); // Log detailed error message
alert('An error occurred while updating the program. Please try again.'); // Show generic error message
}
});
});

$('.edit-btn').click(function () {
// Get program ID, name, and department ID from data attributes
var programId = $(this).data('program-id');
var programName = $(this).data('program-name');
var departmentId = $(this).data('department-id');

// Populate the modal with program details
$('#programId').val(programId);
$('#programName').val(programName);
$('#departmentSelect').val(departmentId); // Select the department in the dropdown

// Show the modal
$('#editModal').modal('show');
});
});

</script>









</body>


</html>