
@extends('layout.navbar')
@section("contact")
    <div class="row">
    <div class="col-3"></div>
    <div class="col-6" style="margin-top:40px;">
        <div class="card">
<div class="card-header" style="background-color:orange;">
    <h3>Create Course</h3>
</div>
<div class="card-body">
<form method="post" action="{{url('courses')}}">
    {{csrf_field()}}
    <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input type="text" name="course_name" class="form-control" class="@error('course_name') is-invalid @enderror"><br>
      @error('course_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      <label for="formGroupExampleInput" class="form-label">Description:</label>
      <textarea type="text" name="course_description" class="form-control" class="@error('course_description') is-invalid @enderror"></textarea><br>
      @error('course_description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      <label for="formGroupExampleInput" class="form-label">Duration:</label>
      <input type="number" name="duration" class="form-control" class="@error('duration') is-invalid @enderror"><br>
      @error('duration')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit" class="btn btn-secondary" style="float: right">Create</button>
  </form>
</div></div>
</div>
  <div class="col-3"></div>
    </div>
@endsection
