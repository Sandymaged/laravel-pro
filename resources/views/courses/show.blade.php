@extends('layout.navbar')
@section("contact")

<div class="container-fluid">
    <div class="card" style="margin-top:20px;width:90%;margin-left:50px ">
        <h3 class="card-title bg-light" style="height: 50px;padding:10px">Course Details
            <a href="/mycourses" class="btn btn-primary" style="float: right">Back</a>
        </h3>
        <div class="card-body">
          <h3 class="card-title">Name:</h3><span class="card-text">{{$course["course_name"]}}</span>
          <h3 class="card-title">Description:</h3><span class="card-text">{{$course["course_description"]}}</span>
          <h3 class="card-title">Duration:</h3><span class="card-text">{{$course["duration"]}}</span>
        </div>
    </div>
    <br>
<br>
<br>
<div class="card">
  <h5 class="card-header">Course Reviews</h5>
  <div class="card-body">
<h5> Add Feedback</h5>
   <form action="{{route('comments.store')}}"" method="POST">
@csrf
<textarea class="form-control rounded-pill" name="body">
</textarea>
<input type="text" name="course_id" hidden value="{{$course->id}}">
<br>

<input type="submit" class="btn btn-success rounded-pill" value="Add Feedback">
    </form>
  </div>
</div>
      @include('courses.displaycomment',['comments'=>$course->comments,"course_id"=>$course->id])



</div>


@endsection
