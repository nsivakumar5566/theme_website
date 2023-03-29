@extends('backend.layouts.app')
@section('title', 'student-register')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success mb-4">
  <p class="mb-0">{{ $message }}</p>
</div>
@endif
 <div class="pagetitle">
    <h1>Student Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Student Form</h5>

            <!-- Horizontal Form -->
            <form enctype="multipart/form-data" action="{{route('studentreg.store')}}" method="POST">
                @csrf
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name ="name" class="form-control" id="inputText">
                </div>
                @if ($errors->has('name'))    
                <span style="color:red;">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
                @if ($errors->has('email'))    
                <span style="color:red;">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="number" name="phone" class="form-control" id="inputPassword">
                </div>
                @if ($errors->has('phone'))    
                <span style="color:red;">{{ $errors->first('phone') }}</span>
                @endif
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <select class="form-select" name="age" aria-label="Default select example">
                        <option value="">Open this select Age</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                @if ($errors->has('age'))    
                <span style="color:red;">{{ $errors->first('age') }}</span>
                @endif
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="form-control" id="inputPassword">
                </div>
                @if ($errors->has('image'))    
                <span style="color:red;">{{ $errors->first('image') }}</span>
                @endif
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form><!-- End Horizontal Form -->

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection