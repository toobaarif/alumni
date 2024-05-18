<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Work Education</title>
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Education</h3>
                        </div>
                        <form action="{{ route('store.education') }}" method="POST">
                            @csrf
                        
                            <div class="mb-4">
                                <label for="institution">Institution:</label>
                                <input class="form-control" type="text" id="institution" name="institution" value="{{ old('institution') }}" autofocus>
                            </div>
                            <div class="mb-4">
                                <label for="degree">Degree:</label>
                                <input class="form-control" type="text" id="degree" name="degree" value="{{ old('degree') }}">
                            </div>
                            <div class="mb-4">
                                <label for="field_of_study">Field of Study/Major:</label>
                                <input class="form-control" type="text" id="field_of_study" name="field_of_study" value="{{ old('field_of_study') }}">
                            </div>
                            <div class="mb-4">
                                <label for="graduation_year">Graduation Year:</label>
                                <input class="form-control" type="number" id="graduation_year" name="graduation_year" value="{{ old('graduation_year') }}">
                            </div>
                            <div class="mb-4">
                                <label for="gpa">GPA:</label>
                                <input class="form-control" type="text" id="gpa" name="gpa" value="{{ old('gpa') }}">
                            </div>
                           
                        
                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-block" type="submit">Done</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>
