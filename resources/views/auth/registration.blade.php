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
        <link rel="shortcut icon" type="image/png" href="{{url('assets/images/favicon.png')}}">
        <link href="{{url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
       <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    
    </head>
<body>
 

    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Sign In</h3>
                            <!-- <p>Sign in to your account to start using W3CRM</p> -->
                        </div>

                      
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label class="mb-1 text-dark" for="name">Name</label>
        <input class="form-control form-control" type="text" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}"  autofocus>
        @error('name')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="email">Email</label>
        <input class="form-control form-control" placeholder="Enter Email" type="email" name="email" id="email" value="{{ old('email') }}" >
        @error('email')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="password">Password</label>
        <input class="form-control form-control" type="password" placeholder="Enter Password" name="password" id="password" >
        @error('password')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="password_confirmation">Confirm Password</label>
        <input class="form-control form-control" placeholder="Confirm Password" type="password" name="password_confirmation" id="password_confirmation" >
        @error('password_confirmation')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="graduation_year">Graduation Year</label>
        <input class="form-control form-control" type="date" name="graduation_year" id="graduation_year" min="1900">
        @error('graduation_year')
            <span style="color: red" class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    
    

    <div class="mb-4">
        <label class="mb-1 text-dark" for="transcript_no">Transcript No</label>
        <input class="form-control form-control" placeholder="Enter Transcript" type="number" name="transcript_no" id="transcript_no">
        @error('transcript_no')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="degree_no">Degree No</label>
        <input class="form-control form-control" placeholder="Degree No" type="number" name="degree_no" id="degree_no">
        @error('degree_no')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="current_city">Current City</label>
        <input class="form-control form-control" placeholder="Enter City" type="text" name="current_city" id="current_city">
        @error('current_city')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div class="mb-4">

    <div class="mb-4">
        <label class="mb-1 text-dark" for="profile_picture">Profile Picture</label>
        <input class="form-control form-control" type="file" name="profile_picture" id="profile_picture">
        @error('profile_picture')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div>
        <label class="mb-1 text-dark" for="bio">Bio</label>
        <textarea  class="form-control form-control" placeholder="About Yourself" name="bio" id="bio" rows="4" cols="60"></textarea>
        @error('bio')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div> <br>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="website">Website</label>
        <input class="form-control form-control" placeholder="Enter URL" type="text" name="website" id="website">
        @error('website')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="mb-4">
        <label class="mb-1 text-dark" for="linkedin">LinkedIn</label>
        <input class="form-control form-control" placeholder="Enter Linkedin" type="text" name="linkedin" id="linkedin">
        @error('linkedin')
        <span style="color: red" class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div  class="text-center mb-4">
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



    

{{-- <a href="{{ route('password.request') }}">Forgot your password?</a> --}}
<script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ url('assets/js/deznav-init.js') }}"></script>
<script src="{{ url('assets/js/demo.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>
<script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>
</html>












