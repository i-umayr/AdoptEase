@extends('layout')
@section('content')
 

  <link rel="stylesheet" href="css/managerDashboard.css">
<div class="border-light rounded-3 p-4 col-md-12" style="margin-top:7rem;">
  <div class="row mb-3">
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="margin-right: -3rem;">
      <div class="box">
        <a href="/adoption_request" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">Put in an adoption request</h5>
          <p class="text-center" style="color: white;">Give someone a place to call home!</p>
        </a>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <div class="box">
        <a href="/track_request" class="text-decoration-none">
          <h5 class="text-center" style="font-size:x-large;font-weight:bolder;margin-top:2rem;color: white;">View the status on your requests</h5>
          <p class="text-center" style="color: white;">Monitor the progress</p>
        </a>
      </div>
    </div>
  </div>

</div>
@endsection

