<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Education ERP System - Log in </title>
  
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">   

</head>
<body class="hold-transition theme-primary bg-gradient-primary">
    
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">   
            
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">

                        <div class="p-30 box-shadowed b-2 b-solid">
                        <div class="d-flex align-items-center justify-content-center text-white">					 	
                      <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
                      <h3>Education <b>ERP</b></h3>
                    </div>
                        <div class="content-top-agile p-10">
                            <h2 class="text-white">Welcome Staff Member</h2>
                            <p class="text-white-50">Sign in to get started</p>                          
                        </div>
     <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                </div>
       <input type="email" id="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
                </div>
  <input type="password" id="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password">
            </div>
        </div>
          <div class="row">
            <div class="col-6">
              <div class="checkbox text-white">
                <input type="checkbox" id="basic_checkbox_1" >
                <label for="basic_checkbox_1">Remember Me</label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
             <div class="fog-pwd text-right">
                <a href="{{ route('password.request') }}" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot Password?</a><br>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-info mt-10">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
    </form>                                                         
    <div class="text-center">
        <p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ route('register') }}" class="text-info ml-5">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>    

</body>
</html>
