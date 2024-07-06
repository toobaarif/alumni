<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Work Experience</title>
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
                            <h3 class="title">Work Experience</h3>
                        </div>
                        <form action="{{ route('store.work.experience') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="job_title">Job Title:</label>
                                <input class="form-control form-control" type="text" id="job_title" name="job_title" value="{{ old('job_title') }}" autofocus>
                            </div>
                            <div class="mb-4">
                                <label for="company">Company:</label>
                                <input class="form-control form-control" type="text" id="company" name="company" value="{{ old('company') }}">
                            </div>
                            <div class="mb-4">
                                <label for="start_date">Start Date:</label>
                                <input class="form-control form-control" type="date" id="start_date" name="start_date" value="{{ old('start_date') }}">
                            </div>
                            <div class="mb-4">
                                <label for="end_date">End Date:</label>
                                <input class="form-control form-control" type="date" id="end_date" name="end_date" value="{{ old('end_date') }}">
                            </div>
                            <div class="mb-4">
                                <label for="job_description">Job Description:</label>
                                <textarea class="form-control form-control" id="job_description" name="job_description">{{ old('job_description') }}</textarea>
                            </div>
                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-block" type="submit">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>
