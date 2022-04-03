@extends('layout.navbar')
@section("contact")
<div class="container-fluid">
<h1>My Courses</h1>
<div class="row">
    @foreach(Auth::user()->enrollments as $enroll)
    @foreach($courses as $course)
      @if($course->id==$enroll->course_id)
    <div class="col-4">
    <div class="card">
    <div class="card-header" style="background-color: orange">
        {{$course["course_name"]}}
            <a type="button" class="btn btn-success" href="/courses/{{$course["id"]}}" style="float:right;">Take a view</a>
            <a href="{{url('unenroll/'.$enroll->id)}}" style="float:right;"  class="btn btn-success rounded-pill">Un-Enroll</a>

    </div>
    <div class="card-body">
      <h5 class="card-title">Description:</h5>
      <p class="card-text"> {{$course["course_description"]}}</p>
      <h5 class="card-title">Duration:</h5>
      <p class="card-text"> {{$course["duration"]}}</p>

    </div>
</div>
</div>

@endif
@endforeach
@endforeach
</div>

@endsection
