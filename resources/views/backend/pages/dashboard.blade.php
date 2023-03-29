@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success mb-4">
  <p class="mb-0">{{ $message }}</p>
</div>
@endif
<h2>Dashboard</h2>

@endsection