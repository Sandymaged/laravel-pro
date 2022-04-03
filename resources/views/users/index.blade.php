@extends('layout.navbar')
@section("contact")

@if (!empty($user))
<div class="container-fluid">
<div class="card">
<div class="card-title bg-light">
    <h3 style="padding: 15px">My Profile</h3>
    <form action="/users/{{$user["id"]}}" method="POST" style="float:right;margin-top:-50px;margin-right:20px">
        @method("delete")
        @csrf
    <input type="submit" class="btn btn-danger" value="Delete Account">
    </form>
</div>
<div class="card-body">
    <i class='fas fa-address-book' style='font-size:130px'></i>
    <a href="/users/{{$user["id"]}}/edit"><i class='fas fa-user-edit'style='font-size:30px'></i></a>

    <h3 class="card-title" style="margin-top: 10px">Name:</h3>
    <p class="card-text"> {{$user["name"]}}</p>
    <h3 class="card-title">Role:</h3>
    <p class="card-text"> {{$user["role"]}}</p>
    <h3 class="card-title">Email:</h3>
    <p class="card-text"> {{$user["email"]}}</p>
</div>
</div>
</div>
@else
<h2 class="text-danger"> No users </h2>
@endif
@endsection
