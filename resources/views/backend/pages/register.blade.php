@extends('backend.layouts.guest')
@section('title', 'Register')
@section('content')

<main>
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6">
          @if ($message = Session::get('success'))
          <div class="alert alert-success mb-4">
            <p class="mb-0">{{ $message }}</p>
          </div>
          @endif
        </div>
       
      </div>
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>


                    <form  class="row g-3 needs-validation" action="{{route('users.store')}}" method="POST">
                        @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" >
                      <div class="invalid-feedback">Please, enter your name!</div>
                      @if ($errors->has('name'))    
                      <span style="color:red;">{{ $errors->first('name') }}</span>
                      @endif
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" >
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      @if ($errors->has('email'))    
                      <span style="color:red;">{{ $errors->first('email') }}</span> 
                      @endif
                    </div>

        

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      <div class="invalid-feedback">Please enter your password!</div>
                      @if ($errors->has('password'))        
                      <span style="color:red;">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{route('users.index')}}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

@endsection