<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
  
    </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- if logged in   -->
      @auth
        <li class="nav-item active">
          <span class="nav-link">Welcome, {{auth()->user()->user_type}}!</a>
        </li>
        <li class="nav-item active">
          @if(auth()->user()->user_type == 'manager')
            {
              <a href="/manager_dashboard">Dashboard</a>;
            }
          @elseif(auth()->user()->user_type == 'adopter')
            {
              <a href="/adopter_dashboard">Dashboard</a>;
            }
          @elseif(auth()->user()->user_type == 'orphan')
          {
            <a href="/orphan_dashboard">Dashboard</a>;
          }
          @endif
        </li>
        <form method="POST" action="/logout">
          @csrf
          <button type="submit">Log out</button> 
        </form>
      @else    
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register_adopter">Register</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>
<div class="p-4">
    @yield('content')
</div>
</body>