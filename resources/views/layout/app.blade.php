<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Style CSS  -->
    <link rel="stylesheet" href={{asset("assets/styles/css/style.css")}}>

    <!-- Favicon  -->
    <link rel = "icon" href = "E:\FYP implementation\logo2.webp" type = "image/icon">
     @yield("css")
     
  
    <title>TrekTales</title>
  </head>
  <body>
    <!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"><img src="logo2.webp" width="50px"  alt=""></a> -->
        <img src="E:\FYP implementation\logo2.webp" class="navbar-brand rounded" width="120px"  alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url("/")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route("customize.index")}}">Customized Tour</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"  href="{{route("photo.index")}}">Photos</a></li>
                        <li><a class="dropdown-item"  href="{{route("video.index")}}">Videos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
            <!-- profile  -->
            <div class="dropdown" style="background-color: azure; border-radius:60%; margin-left: 10px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle bg-white"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Language</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
  </nav>





@yield('content')







     <!-- Footer -->
     <footer class="py-5 bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>Our tour website is dedicated to providing memorable travel experiences...</p>
            </div>
            <div class="col-md-4">
              <h3>Contact Us</h3>
              <p>Email: muhibullah.bscs4207@iiu.edu.pk</p>
              <p>Email: essa.bscs4215@iiu.edu.pk</p>
              <p>Phone: +923317556877</p>
            </div>
            <div class="col-md-4">
              <h3>Follow Us</h3>
              <div class="social-icons">
                <a href="#" class="bi bi-facebook"></a>
                <a href="#" class="bi bi-twitter"></a>
                <a href="#" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <p class="text-center">&copy; 2023 TrekTales Website. All rights reserved.</p>
        </div>
      </footer>
    
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  @yield('js')
    </body>
  </html>