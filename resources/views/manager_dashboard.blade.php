@extends('layout')
@section('content')
<link rel="stylesheet" href="css/managerDashboard.css">
<div class="border-light rounded-3 p-4 col-md-12" style="margin-top:7rem;">
  <div class="row mb-3">
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="margin-right: -3rem;">
      <div class="box">
        <a href="/register_orphan" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">Register Orphan</h5>
          <p class="text-center" style="color: white;">Click to register and help someone find a place to call family!</p>
        </a>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <div class="box">
        <a href="/attendance" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">Take Attendance</h5>
          <p class="text-center" style="color: white;">What it says above</p>
        </a>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="margin-right: -3rem;">
      <div class="box">
        <a href="/view_applications" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">View applications</h5>
          <p class="text-center" style="color: white;">See who wants what!</p>
        </a>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <div class="box">
        <a href="/view_users" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">View Registered Personnel</h5>
          <p class="text-center" style="color: white;">See who is registered!</p>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="margin-right: -3rem;">
      <div class="box">
        <a href="/health" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">Health records</h5>
          <p class="text-center" style="color: white;">Look after the well-being of the children by managing their healthcare!</p>
        </a>
      </div>
    </div>
  </div>

</div>
@endsection