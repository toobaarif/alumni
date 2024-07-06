
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/png" 
    href="{{url('theme/images/favi.png')}}">

    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
        .section {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .section h3 {
            margin-bottom: 15px;
        }
        .edit-icon {
            font-size: 18px;
            color: #007bff;
        }
        .edit-icon:hover {
            text-decoration: none;
        }
        .section table {
            width: 100%;
            margin-bottom: 0;
        }
        .section table th, .section table td {
            padding: 8px;
            border-top: 1px solid #ddd;
        }
        .section table th {
            background-color: #f8f9fa;
        }
        .section table td {
            background-color: #fff;
        }
    </style>
</head>

<body>
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

        <div class="content-body">
            <div class="container-fluid">
                <!-- User Section -->
                <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>User Details</h3>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Graduation Year</th>
                            <td>{{ $user->graduation_year }}</td>
                        </tr>
                    </table>
                </div>

                <!-- Basic Info Section -->
                <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Basic Information</h3>
                        <a href="{{ route('basicInfo.edit', $basicInfo->id) }}" class="edit-icon"><i class="fas fa-edit"></i></a>
                    </div>
                    @if($basicInfo)
                    <table>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $basicInfo->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $basicInfo->address }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $basicInfo->city }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{ $basicInfo->state }}</td>
                        </tr>
                        <tr>
                            <th>Zip</th>
                            <td>{{ $basicInfo->zip }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $basicInfo->gender }}</td>
                        </tr>
                        <tr>
                            <th>Birthdate</th>
                            <td>{{ $basicInfo->birthdate }}</td>
                        </tr>
                    </table>
                    @else
                        <p>No basic information available.</p>
                    @endif
                </div>

                <!-- Work Experience Section -->
                <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Work Experience</h3>
                        <a href="{{ route('workExperience.edit', $workExperience->id) }}" class="edit-icon"><i class="fas fa-edit"></i></a>
                    </div>
                    @if($workExperience)
                    <table>
                        <tr>
                            <th>Job Title</th>
                            <td>{{ $workExperience->job_title }}</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>{{ $workExperience->company }}</td>
                        </tr>
                        <tr>
                            <th>Start Date</th>
                            <td>{{ $workExperience->start_date }}</td>
                        </tr>
                        <tr>
                            <th>End Date</th>
                            <td>{{ $workExperience->end_date }}</td>
                        </tr>
                        <tr>
                            <th>Job Description</th>
                            <td>{{ $workExperience->job_description }}</td>
                        </tr>
                    </table>
                    @else
                        <p>No work experience available.</p>
                    @endif
                    <div style="margin-top: 20px; text-align: right;">
        <a href="/work-experience" style="margin-left: 10px;" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add More Experience
        </a>
    </div>
                </div>

                <!-- Education Details Section -->
                <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Education Details</h3>
                        <a href="{{ route('educationDetails.edit', $educationDetails->id) }}" class="edit-icon"><i class="fas fa-edit"></i></a>
                    </div>
                    @if($educationDetails)
                    <table>
                        <tr>
                            <th>Institution</th>
                            <td>{{ $educationDetails->institution }}</td>
                        </tr>
                        <tr>
                            <th>Degree</th>
                            <td>{{ $educationDetails->degree }}</td>
                        </tr>
                        <tr>
                            <th>Field of Study</th>
                            <td>{{ $educationDetails->field_of_study }}</td>
                        </tr>
                        <tr>
                            <th>Graduation Year</th>
                            <td>{{ $educationDetails->graduation_year }}</td>
                        </tr>
                        <tr>
                            <th>GPA</th>
                            <td>{{ $educationDetails->gpa }}</td>
                        </tr>
                    </table>
                    @else
                        <p>No education details available.</p>
                    @endif

                    <div style="margin-top: 20px; text-align: right;">
        <a href="/education" style="margin-left: 10px;" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add More Experience
        </a>
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
    </div>
</body>

</html>
