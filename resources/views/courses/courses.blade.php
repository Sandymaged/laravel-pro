@extends('layout.navbar')
@section("contact")


<div class="container-fluid">
<h1>avaliable Courses</h1>
<div class="row">
        @foreach($data as $course)
<?php
$c=0;
?>

        @foreach(Auth::user()->enrollments as $enroll)


        @if($enroll->course_id==$course->id)
      <?php  ++$c ?>
        @endif
@endforeach
 @if($c==0)
 <div class="col-4">

    <div class="card">
    <div class="card-header" style="background-color: orange">
        {{$course["course_name"]}}
            <a type="button" class="btn btn-success" href="/courses/{{$course["id"]}}" style="float:right;">Take a view</a>
            <a type="button" class="btn btn-danger" href="{{url('enroll/'.$course->id)}}"style="float:right;">Enroll</a>

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

</div>
@endsection
