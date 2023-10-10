<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Movie Recommendation System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assest/style.css')}}" />
   
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>Movie recommendation system</strong></a>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="ms-auto d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                <button class="btn btn-warning text-white">Search</button>
              </div>
            </div>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="#">TV shows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="#">Actors</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <main>

        @yield('contents')
    </main>
</body>
</html>
