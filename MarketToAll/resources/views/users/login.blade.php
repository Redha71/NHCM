<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
<link rel="icon" href="{{asset('public/bootstraps/img/mdb-favicon.ico')}}" type="image/x-icon">
  <!-- for refrash -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('public/bootstraps/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('public/bootstraps/css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{asset('public/bootstraps/css/style.css')}}">
</head>
<body>
    @include('navbars.login-nav')
    <div class="container" >
    <div class="row grey lighten-5">
        <div class="col-md-6 pl-5 pt-4  float-left">
            <h3>Login with Easy Market </h3>
            <p>With an account at the block, you can do all this:</p>
        <br>
            <p><i class="fas fa-hand-point-right"></i> Send and receive message.</p>
            <p><i class="fas fa-hand-point-right"></i> Save favourite adverts.</p>
            <p><i class="fas fa-hand-point-right"></i> Create adverts.</p>
            <p><i class="fas fa-hand-point-right"></i> Manage and follow adverts.</p>
        </div>
        <div id="signin" class="col-md-5 pr-5 pt-4 pb-4 float-right">
    <form class="text-center border border-light p-5" action="#!">
    
        <p class="h4 mb-4">Sign in</p>
    
        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
    
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
    
        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
            </div>
        </div>
    
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
    
        <!-- Register -->
        <p>Not a member?
            <a id="register" href="">Register</a>
        </p>
    
        <!-- Social login -->
        <p>or sign in with:</p>
    
        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
    
    </form>
        </div>
        <div id="signup" class="col-md-5 pr-5 pt-4 pb-4 float-right" >
            <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
        </div>
    </div>
    </div>
    @include('footers/log-footer')
  <!-- End your project here-->
  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('public/bootstraps/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('public/bootstraps/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('public/bootstraps/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('public/bootstraps/js/mdb.min.js')}}"></script>
   <!-- Main market js JavaScript -->
  <script type="text/javascript" src="{{asset('public/bootstraps/js/main-market.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  

</body>
</html>




      
  
   




