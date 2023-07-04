<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Boxicons CSS -->
    <link href="https://cdn.jsdelivr.net/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Back Office</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
                        <div class="logo" >
                        <a href="{{ route('home') }}"  >
                            <img src="{{asset('assets/images/klassy-logo.png')}}" alt="Logo" class="img-fluid me-2">
                            <h2 class="text-muted mb-0"  ><span class="text-danger" >B</span>EIRUT</h2>
                        </a>
                        </div>
                        <div class="close" id="close-btn">
                            <i class="bx bx-x"></i>
                        </div>
                    </div>

                    <ul class="nav flex-column mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin.dashboard.index')}}">
                                <i class="bx bxs-dashboard me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bx bx-calendar-check me-2"></i>
                                Menu Items
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            @guest
                            <a class="nav-link" href="{{route('register')}}">
                                <i class="bx bx-log-out me-2"></i>
                                Register
                            </a>
                            <a class="nav-link" href="{{route('login')}}">
                                <i class="bx bx-log-in me-2"></i>
                                Login
                            </a>
                            @endguest
                            @auth
<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="bx bx-log-out me-2"></i>
    Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
    @csrf
</form>
@endauth
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Your main content here -->
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>