
@extends('layout.navbar')
@section("contact")

    <div class="row">
    <div class="col-3"></div>
    <div class="col-6" style="margin-top: 50px">
<div class="card">
    <h3 class="card-title" style="background-color: orange;height:50px;padding:10px">Edit Course</h3>
<div class="card-body">
<form method="post" action="{{url('users/'.$user->id)}}">
   @method("PUT")
    {{csrf_field()}}
    <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input type="text" name="name" class="form-control" value={{$user->name}}><br>
<button type="submit" class="btn btn-secondary" style="float: right">Update</button>
  </form>

</div>
</div>
  <div class="col-3"></div>
    </div>
@endsection
