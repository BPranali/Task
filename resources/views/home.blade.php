@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>User Dashboard</h1>
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    
    <div class="container-fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Profession</th>
                <th scope="col">address</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->full_name}}</td>
                  <td>{{$user->dob}}</td>
                  <td>{{$user->profession}}</td>
                  <td>{{$user->address}}</td>
                </tr>
                @endforeach
             
            </tbody>
          </table>
    </div>
    </div>
@endsection
