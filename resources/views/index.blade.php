@extends('layout.navbar')
@section("contact")
<div style="height:500px; margin-top:10px" class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/images (4).jpg" class="d-block" style="height:500px; width:100%">
          </div>
          <div class="carousel-item">
            <img src="./images/images (3).jpg" class="d-block" style="height:500px; width:100%">
          </div>
          <div class="carousel-item">
            <img src="./images/images (2).jpg" class="d-block" style="height:500px; width:100%">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<div style="margin-top: 20px">
    <h1 class="text-center" style="color: orange;">Our Courses</h1>
</div>
<div class="row">
@foreach($courses as $course)
<div class="col-4">
<div class="card">
    <div class="card-header" style="background-color: orange">
        {{$course["course_name"]}}

    </div>
    <div class="card-body">
      <h5 class="card-title">Description:</h5>
      <p class="card-text"> {{$course["course_description"]}}</p>
      <h5 class="card-title">Duration:</h5>
      <p class="card-text"> {{$course["duration"]}}</p>
    </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
