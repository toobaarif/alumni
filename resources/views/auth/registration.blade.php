<!DOCTYPE html>
<html lang="en">

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
    <title>Alumni | Register</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/favicon.png') }}">
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .hidden-input {
            position: absolute;
            left: -9999px;
        }
    </style>

</head>

<body>


    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <br>
                            <h3 class="title">Sign In</h3>
                            <!-- <p>Sign in to your account to start using W3CRM</p> -->
                        </div>

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="name">Name <span style="color: red">*</span></label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}" autofocus required>
                                @error('name')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="email">Email <span style="color: red">*</span></label>
                                <input class="form-control" placeholder="example@gmail.com" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="password_display">Password <span style="color: red">*</span></label>
                                <input class="form-control" type="text" placeholder="Enter Password" id="password_display" required>
                                <input class="hidden-input" type="password" name="password" id="password" required>
                                <span style="color: red" class="text-danger" id="password_error"></span>
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="password_confirmation_display">Confirm Password <span style="color: red">*</span></label>
                                <input class="form-control" type="text" placeholder="Confirm Password" id="password_confirmation_display" required>
                                <input class="hidden-input" type="password" name="password_confirmation" id="password_confirmation" required>
                                <span style="color: red" class="text-danger" id="password_confirmation_error"></span>
                            </div>
                        
                            <script>
                                function syncPassword(input, hiddenInput) {
                                    const value = input.value;
                                    hiddenInput.value = value;
                                    input.value = '*'.repeat(value.length);
                                }
                        
                                document.getElementById('password_display').addEventListener('input', function () {
                                    syncPassword(this, document.getElementById('password'));
                                });
                        
                                document.getElementById('password_confirmation_display').addEventListener('input', function () {
                                    syncPassword(this, document.getElementById('password_confirmation'));
                                });
                            </script>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="graduation_year">Graduation Year <span style="color: red">*</span></label>
                                <input class="form-control" type="date" name="graduation_year" id="graduation_year" min="1900" required>
                                @error('graduation_year')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="department">Department <span style="color: red">*</span></label>
                                <select class="form-control" name="department" id="department" required>
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="program">Program <span style="color: red">*</span></label>
                                <select class="form-control" name="program" id="program" required>
                                    <option value="">Select Program</option>
                                </select>
                                @error('program')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="profile_picture">Profile Picture </label>
                                <input class="form-control" type="file" name="profile_picture" id="profile_picture" required>
                                @error('profile_picture')
                                    <span style="color: red" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </form>
                        



                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="pages-left h-100">
                        <div class="login-content">
                            <a href="index.html"><img src="images/logo-full.png" class="mb-3 logo-dark"
                                    alt=""></a>
                            <a href="index.html"><img src="images/logi-white.png" class="mb-3 logo-light"
                                    alt=""></a>


                        </div>
                        <div class="login-media text-center">
                            <img src="{{ url('assets/images/login.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.getElementById('department').addEventListener('change', function() {
            var departmentId = this.value;
            var programSelect = document.getElementById('program');

            // Clear existing options
            programSelect.innerHTML = '<option value="">Loading...</option>';

            // Send AJAX request to fetch programs for the selected department
            fetch('/get-programs/' + departmentId)
                .then(response => response.json())
                .then(data => {
                    // Populate programs dropdown with received options
                    programSelect.innerHTML = '<option value="">Select Program</option>';
                    data.forEach(program => {
                        programSelect.innerHTML +=
                            `<option value="${program.id}">${program.program_name}</option>`;
                    });
                })
                .catch(error => {
                    console.error('Error fetching programs:', error);
                    programSelect.innerHTML = '<option value="">Error fetching programs</option>';
                });
        });
    </script>






    {{-- <a href="{{ route('password.request') }}">Forgot your password?</a> --}}
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
