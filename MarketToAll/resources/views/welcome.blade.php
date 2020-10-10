@extends('layouts.main')

@section('content')
 <!-- Grid row -->

    <div class="view intro-2 pb-0"  >
      <div class="full-bg-img">
        <div class="mask rgba-black-light flex-center">
          <div class="container text-left white-text">
            <div class="white-text text-left wow fadeInUp">
                <div class="container">
                    <!-- Card -->
                    <div class="card" style=" max-width: 10cm;max-height: 10%;">
                    
                        <!-- Card body -->
                        <div class="card-body" >
                      
                          <!-- Material form register -->
                          <form  action="#!" >
                            <!-- search bar -->
                            <div class="active-cyan-3 pl-1">
                                <input class="form-control" type="text" placeholder="Looking for" aria-label="Search">
                            </div>
                            <!-- search bar -->
                            <div class="active-cyan-3 pl-1 pt-3">
                              <input class="form-control" type="text" placeholder="City or postcode" aria-label="Search">
                            </div>
                            <div class="text-left py-2 mt-1">
                              <button class="btn btn-info" type="submit">Find Ad</button>
                            </div>
                          </form>
                          <!-- Material form register -->
                      
                        </div>
                        <!-- Card body -->
                      
                      </div>
                      <!-- Card -->
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <div class="container pt-0">
      <!-- Grid row -->
      <div class="row pt-0">
          <!-- Grid column -->
          <div class="col-md-6 mt-0 mt-3 ">
              <h3>Categories</h3>
          </div>
          <div class="col-md-6 text-right mt-0 mt-3 ">
              <a  href="{{route('categories')}}" class="text-dark">All Categories <i class="far fa-hand-point-right" aria-hidden="true"></i></a>
          </div>
      </div>
      <!-- Grid row -->
      <div class="row" >
          <div class="col-md-12 mb-4">
              <button type="button" class="btn btn-primary px-3"><i class="fas fa-car" aria-hidden="true"></i><br>Vehicles</button>
              <button type="button" class="btn btn-default px-3"><i class="fas fa-briefcase" aria-hidden="true"></i><br>Job</button>
              <button type="button" class="btn btn-secondary px-3"><i class="fas fa-couch" aria-hidden="true"></i><br>Home</button>
              <button type="button" class="btn btn-success px-3"><i class="fas fa-home" aria-hidden="true"></i><br>properties</button>
              <button type="button" class="btn btn-info px-3"><i class="fas fa-paw" aria-hidden="true"></i><br>Pet</button>
              <button type="button" class="btn btn-warning px-3"><i class="far fa-handshake" aria-hidden="true"></i><br>Business</button>
              <button type="button" class="btn btn-danger px-3"><i class="fas fa-laptop" aria-hidden="true"></i><br>Electronics</button>
              <button type="button" class="btn btn-deep-purple accent-3 px-3"><i class="far fa-gem" aria-hidden="true"></i><br>Personal</button>
              <button type="button" class="btn btn-lime accent-2 px-3"><i class="fas fa-bicycle" aria-hidden="true"></i><br>Hobby</button>
              <button type="button" class="btn btn-orange darken-3 px-3"><i class="fas fa-box-open" aria-hidden="true"></i><br>Other</button>
          </div>
      </div>
      <!-- Grid row -->
      <div class="row"> 
      <!-- Card deck -->
      <div class="card-deck">
      <!-- Card -->
      <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-info btn-md">Find ad</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-info btn-md">Find ad</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-info btn-md">Find ad</button>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->
  </div>
   <!-- Grid row -->
 <div class="row">
 
  <!-- Card deck -->
  <div class="card-deck">
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-info btn-md">Find ad</button>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-info btn-md">Find ad</button>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-info btn-md">Find ad</button>
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck -->
    </div>
 </div>
@endsection
