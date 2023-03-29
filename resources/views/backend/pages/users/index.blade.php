@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')

<h2>User Index</h2>

<a href="{{route('users.create')}}" class="btn btn-primary">Create New User</a>

@endsection