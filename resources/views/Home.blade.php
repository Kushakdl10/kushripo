@extends('layouts.app')

@section('main-content')
<div class="container">
    {{ $users }}
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <th scope="row">1</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="#">Edit</a> || <a href="#">Delete</a></td>
              </tr> 
            @endforeach
        </tbody>
      </table>
</div>
@endsection