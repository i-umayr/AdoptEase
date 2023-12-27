@extends('layout')
@section('content')
<div class="bg-dark border-light text-bg-dark rounded-3 p-4 m-0 col-md-12">
  <div class="border-bottom p-2 text-md-center">
    <div>
      <h5>Register Orphan</h5>
      <p >Click to register and help someone find a place to call family!</p>
      <a href="/register_orphan " class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a>
    </div>
  </div>

  <div class="border-bottom p-2 text-md-center">
    <div>
      <h5>Take Attendance</h5>
      <p >what it says above</p>
      <a href="/attendance" class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a>
    </div>
</div>

<div class="border-bottom p-2 text-md-center">
    <div >
      <h5>View applications</h5>
      <p >See who wants what!</p>
      <a href="/view_applications " class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a>
    </div>
</div>


<div>
<div class="border-bottom p-2 text-md-center">
      <div >
        <h5>View Registered Personnel</h5>
        <p >See who is registered!</p>
        <a href="/view_users " class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a>
      </div>

</div>

<div class="border-bottom p-2 text-md-center">
      <div >
        <h5>Health records</h5>
        <p >Look after the well being of the children by managing their healthcare!</p>
        <a href="/health " class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a>
</div>
</div>
</div>
@endsection