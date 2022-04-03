 @extends('layout.navbar')
@section("contact")
<div class="container-fluid">
<h1>Our Courses</h1>
<a type=button class="btn btn-secondary" href="courses/create" style="float: right; margin-top:-30px">Create New Course</a><br>
<div class="row">
@forelse ($courses as $item)
    <div class="col-4">
<div class="card">
    <div class="card-header" style="background-color: orange">
        {{$item["course_name"]}}
            <a type="button" class="btn btn-success" href="/courses/{{$item["id"]}}/edit" style="float:right;">Edit</a>
            <form action="/courses/{{$item["id"]}}" method="POST" style="float:right;">
                @method("delete")
                @csrf
            <input type="submit" class="btn btn-danger" value="Delete">
            </form>

    </div>
    <div class="card-body">
      <h5 class="card-title">Description:</h5>
      <p class="card-text"> {{$item["course_description"]}}</p>
      <h5 class="card-title">Duration:</h5>
      <p class="card-text"> {{$item["duration"]}}</p>

    </div>
</div>
</div>

@empty
<h2 class="text-danger"> No Courses </h2>
@endforelse
</div>
@endsection
</div>
