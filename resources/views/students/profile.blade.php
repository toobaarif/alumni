<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">
    <!-- Bootstrap CSS -->
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

        .section table th,
        .section table td {
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

                <!-- Work Experience Section -->
                 <!-- Work Experience Section -->
                 <div class="section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Work Experience</h3>
                        <!-- Edit Icon and Link -->
                        @if ($workExperiences->isNotEmpty())
                            @foreach ($workExperiences as $key => $experience)
                                <a href="{{ route('workExperience.edit', $experience->id) }}" class="edit-icon"><i
                                        class="fas fa-edit"></i></a>
                            @endforeach
                        @endif
                    </div>
                    <form id="experience-form" action="{{ route('experience.store') }}" method="POST">
                        @csrf
                        <div id="experience-container">
                            @if ($workExperiences->isNotEmpty())
                                @foreach ($workExperiences as $key => $experience)
                                    <div class="experience-entry">
                                        <h4>Work Experience #{{ $key + 1 }}</h4> <!-- Add numbering here -->
                                        <table>
                                            <tr>
                                                <th>Job Title</th>
                                                <td>{{ $experience->job_title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company</th>
                                                <td>{{ $experience->company }}</td>
                                            </tr>
                                            <tr>
                                                <th>Start Date</th>
                                                <td>{{ $experience->start_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>End Date</th>
                                                <td>{{ $experience->end_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Job Description</th>
                                                <td>{{ $experience->job_description }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                @endforeach
                            @else
                                <p>No work experience available.</p>
                            @endif
                        </div>
                        <div style="margin-top: 20px; text-align: right;">
                            <button type="button" id="add-experience-btn" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add More Experience
                            </button>
                        </div>
                        <div style="margin-top: 20px; text-align: right;">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Education Details Section -->
              <!-- Assuming this is part of your existing Blade template for managing user details -->
<!-- Education Details Section -->
<!-- Education Details Section -->
<div class="section">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Education Details</h3>
    </div>
    <form id="education-form" action="{{ route('education.store') }}" method="POST">
        @csrf
        <div id="education-container">
            @if ($educationDetails->isNotEmpty())
                @foreach ($educationDetails as $key => $education)
                    <div class="education-entry">
                        <h4>Education Experience #{{ $key + 1 }}</h4>
                        <table>
                            <tr>
                                <th>Institution</th>
                                <td>{{ $education->institution }}</td>
                            </tr>
                            <tr>
                                <th>Degree</th>
                                <td>{{ $education->degree }}</td>
                            </tr>
                            <tr>
                                <th>Field of Study</th>
                                <td>{{ $education->field_of_study }}</td>
                            </tr>
                            <tr>
                                <th>Graduation Year</th>
                                <td>{{ $education->graduation_year }}</td>
                            </tr>
                            <tr>
                                <th>GPA</th>
                                <td>{{ $education->gpa }}</td>
                            </tr>
                        </table>
                        <div style="margin-top: 10px; text-align: right;">
                            <a href="{{ route('educationDetails.edit', $education->id) }}" class="edit-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No education details available.</p>
            @endif
        </div>

        <div style="margin-top: 20px; text-align: right;">
            <button type="button" id="add-education-btn" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add More Education
            </button>
        </div>
        <div style="margin-top: 20px; text-align: right;">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('add-education-btn').addEventListener('click', function() {
            var educationContainer = document.getElementById('education-container');
            var newEntry = document.createElement('div');
            newEntry.className = 'education-entry';
            newEntry.innerHTML = `
                <h4>New Education Entry</h4>
                <table>
                    <tr>
                        <th>Institution</th>
                        <td><input type="text" name="institution[]" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Degree</th>
                        <td><input type="text" name="degree[]" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Field of Study</th>
                        <td><input type="text" name="field_of_study[]" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Graduation Year</th>
                        <td><input type="number" name="graduation_year[]" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>GPA</th>
                        <td><input type="text" name="gpa[]" class="form-control" required></td>
                    </tr>
                </table>
            `;
            educationContainer.appendChild(newEntry);
        });
    });
</script>


                




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
        <link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" rel="stylesheet">

        <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('add-experience-btn').addEventListener('click', function() {
                    var experienceContainer = document.getElementById('experience-container');
                    var newEntry = document.createElement('div');
                    newEntry.className = 'experience-entry';
                    newEntry.innerHTML = `
                        <table>
                            <tr>
                                <th>Job Title</th>
                                <td><input type="text" name="job_title[]" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <td><input type="text" name="company[]" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td><input type="date" name="start_date[]" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td><input type="date" name="end_date[]" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Job Description</th>
                                <td><textarea name="job_description[]" class="form-control"></textarea></td>
                            </tr>
                        </table>
                    `;
                    experienceContainer.appendChild(newEntry);
                });
        
 

 
});

            

            
        </script>
        
    </div>
</body>

</html>


