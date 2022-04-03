
@extends('layout.navbar')
@section("contact")

    <div class="row">
    <div class="col-3"></div>
    <div class="col-6" style="margin-top: 50px">
<div class="card">
    <h3 class="card-title" style="background-color: orange;height:50px;padding:10px">Edit Course</h3>
<div class="card-body">
<form method="post" action="{{url('courses/'.$course->id)}}">
   @method("PUT")
    {{csrf_field()}}
    <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input type="text" name="course_name" class="form-control" value={{$course->course_name}}>
      <label for="formGroupExampleInput" class="form-label">Description:</label>
      <textarea type="text" name="course_description"  class="form-control" value={{$course->course_description}}>{{$course->course_description}}</textarea><br>
      <label for="formGroupExampleInput" class="form-label">Duration:</label>
      <input type="number" name="duration" class="form-control" value={{$course->duration}}><br>
<button type="submit" class="btn btn-secondary" style="float: right">Update</button>
  </form>

</div>
</div>
  <div class="col-3"></div>
    </div>
@endsection
