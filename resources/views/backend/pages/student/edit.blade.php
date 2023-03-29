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
            <form action="{{ route('postupdate',[$studentreg->id,$studentreg->images]) }}" enctype="multipart/form-data" method="POST">
              @csrf
        
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name ="name" value="{{ $studentreg->name }}" class="form-control" id="inputText" >
                </div>
             
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" value="{{ $studentreg->email }}" class="form-control" id="inputEmail" >
                </div>
                
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="number" name="phone" value="{{ $studentreg->phone_number }}" class="form-control" id="inputPassword" >
                </div>
               
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <select class="form-select" name="age" aria-label="Default select example" >
                        <option value="">Open this select Age</option>
                        <option value="1" {{ $studentreg->age == '1' ? 'selected':'' }}>One</option>
                        <option value="2" {{ $studentreg->age == '2' ? 'selected':'' }}>Two</option>
                        <option value="3" {{ $studentreg->age == '3' ? 'selected':'' }}>Three</option>
                      </select>
                </div>
              
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="form-control" id="inputPassword">
                    <img src="{{ asset('images/clients-img/'.$studentreg->images) }}" alt="" width="150px">
                </div>
              
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