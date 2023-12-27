<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/style.css" />

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Adopt Ease</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <!-- if logged in   -->
          @auth
          <li class="nav-item active">
            <span class="nav-link">Welcome, {{auth()->user()->user_type}}!</span>
          </li>
          <li class="nav-item">
            @if(auth()->user()->user_type == 'manager')
            <a href="/manager_dashboard" class="nav-link">Dashboard</a>            
            @elseif(auth()->user()->user_type == 'adopter')
            <a href="/adopter_dashboard" class="nav-link">Dashboard</a>
            @elseif(auth()->user()->user_type == 'orphan')
            <a href="/orphan_dashboard" class="nav-link">Dashboard</a>
            @endif
          </li>
          
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">About</a>
          </li>
          <form method="POST" action="/logout" style="margin-top: 0.5rem;">
            @csrf
            <button type="submit" class="btn btn-primary">Log out</button>
          </form>
          @else
          
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">About</a>
          </li>
          <li class="nav-item cta">
            <a href="/register_adopter" class="nav-link"><span>Get started</span></a>
          </li>
          @endauth

          
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-4">
    @yield('content')
  </div>
</body>

