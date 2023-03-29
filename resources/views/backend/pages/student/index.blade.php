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
<div class="col-lg-6 text-end">
  <a class="btn btn-primary" href="{{ route('studentreg.create') }}">Add new post</a> 
</div>
<div class ="col-md-5 pb-3">
</div>
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Student List</h5>
          
          <!-- Bordered Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">S.NO</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phonenumber</th>
                <th scope="col">Age</th>
                <th scope="col">Photos</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $value)
              <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone_number}}</td>
                <td>{{$value->age}}</td>
                <td><img src ="{{asset('images/clients-img/'.$value->images)}}" width="150px"></td>
                <td>
                  <a href="{{ route('studentreg.show', $value->id) }}" class="btn btn-primary">
                    Show
                  </a>
                  <a href="{{ route('studentreg.edit', $value->id) }}" class="btn btn-success">
                    Edit
                  </a>
                  <a href="{{ route('postdelete', [$value->id, $value->images]) }}" class="btn btn-success">
                    Delete
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Bordered Table -->

        

        </div>
      </div>

    

        </div>
      </div>

    </div>
  </div>
</section>
@endsection