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
        <title>Alumni | Login</title>
        
        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="{{url('assets/images/favicon.png')}}">
        <link href="{{url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
       <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    
    </head>
    <body class="vh-100">

    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Sign In</h3>
                            <!-- <p>Sign in to your account to start using W3CRM</p> -->
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="email">Email</label>
                                <input  class="form-control form-control" placeholder="Enter Email" type="email" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>


                        
                            <div class="mb-4">
                                <label class="mb-1 text-dark" for="password">Password</label>
                                <input placeholder="Enter Password" class="form-control form-control" type="password" id="password" name="password" required>
                                @error('password')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div  class="text-center mb-4">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                      <span>Forgot your password?</span>  <a style="color: rgb(56, 56, 222)" href="{{ route('password.request') }}">Reset Password</a>


               <h6 class="login-title"><span>Or continue with</span></h6>
							
               <div class="mb-3">
                   <ul class="d-flex align-self-center justify-content-center">
                       <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                       <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
                       <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
                       <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                   </ul>
               </div>
               <p class="text-center">Not registered?  
                   <a class="btn-link text-primary" href="{{url('register')}}">Register</a>
               </p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<!-- <a href="index.html"><img src="{{url('assets/images/logo-full.png')}}" class="mb-3 logo-dark" alt=""></a> -->
							<a href="index.html"><img src="{{url('assets/images/logi-white.png')}}" class="mb-3 logo-light" alt=""></a>
                            <div class="login-media text-center">
                                <img src="{{ url('assets/images/login.png') }}" alt="">
                            </div>

						</div>
						<div class="login-media text-center">
							<img src="images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
    


    
</body>




<script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ url('assets/js/deznav-init.js') }}"></script>
<script src="{{ url('assets/js/demo.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>
<script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</html>





