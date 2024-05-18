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
</head>
<body>
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Basic Information</h3>
                        </div>
                        <form action="{{ route('store.details') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="phone">Phone Number:</label>
                                <input class="form-control form-control" type="text" id="phone" name="phone" value="{{ old('phone', $basicInfo->phone ?? '') }}" autofocus>
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="address">Address:</label>
                                <input class="form-control form-control" type="text" id="address" name="address" value="{{ old('address', $basicInfo->address ?? '') }}">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="city">City:</label>
                                <input class="form-control form-control" type="text" id="city" name="city" value="{{ old('city', $basicInfo->city ?? '') }}">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="state">State/Province:</label>
                                <input class="form-control form-control" type="text" id="state" name="state" value="{{ old('state', $basicInfo->state ?? '') }}">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="zip">Zip/Postal Code:</label>
                                <input class="form-control form-control" type="text" id="zip" name="zip" value="{{ old('zip', $basicInfo->zip ?? '') }}">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="gender">Gender:</label>
                                <input class="form-control form-control" type="text" id="gender" name="gender" value="{{ old('gender', $basicInfo->gender ?? '') }}">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="birthdate">Birthdate:</label>
                                <input class="form-control form-control" type="date" id="birthdate" name="birthdate" value="{{ old('birthdate', $basicInfo->birthdate ?? '') }}">
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
    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>
