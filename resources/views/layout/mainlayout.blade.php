<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjualan Telur</title>

    {{-- bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@300;400;600;700&family=Poppins:wght@300;500;600&display=swap"   rel="stylesheet">

    {{-- icon  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- boxicons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
        {{-- izitoast --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">

    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body id="body-pd">

  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

    {{-- <div class="dropdown ">
        <a class="btn btn-secondary dropdown-toggle" href="/admin" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="header_img" src="/assets/img/arisu.JPG" alt="">
            <i class='bx bxs-user-circle'></i>
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div> --}}

    <div class="header_img">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            <img class="img_primary" src="/assets/img/arisu.jpg" alt="">
        </button>
        <ul class="dropdown-menu">
            <li class="text-center"><img class="img_profil" src="/assets/img/arisu.jpg" alt=""></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-gray" href="#">Profil <i class='bx bx-chevron-right'></i></a></li>
            <li><a class="dropdown-item text-gray" href="#">Setting <i class='bx bx-chevron-right'></i></a></li>
          </ul>
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="/" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                    class="nav_logo-name "><img src="/assets/img/logo.png" width="110px" alt=""></span> </a>
            <div class="nav_list">
                <a href="/" class="nav_link @yield('dsh')"> <i
                        class='bx bx-bar-chart-alt-2 @yield('icdsh') nav_icon'></i> <span
                        class="nav_name">Dashboard</span> </a>
                <a href="/admin" class="nav_link @yield('adm')"> <i
                        class='bx bx-user nav_icon @yield('icadm')'></i> <span class="nav_name">Admin</span>
                </a>
                <a href="/telur" class="nav_link @yield('tlr')"><i class="bi bi-egg-fill @yield('ictlr')"></i> <span class="nav_name">Telur</span> </a>
                 <a href="/jenis-telur" class="nav_link @yield('jns')"><i class="bi bi-egg @yield('icjns')"></i> <span class="nav_name">Jenis Telur</span>
                </a>
                <a href="/transaksi" class="nav_link @yield('tr')"> <i
                        class='bx bx-credit-card-front nav_icon @yield('ictr')'></i> <span
                        class="nav_name">Transaksi</span>
                </a>
            </div>
        </div>
        <hr class="mx-3 hr-nav mb-0">
        <div class=" mt-0 position-relative">
            {{-- <a href="" class="nav_link mb-2"><i class='bx bx-cog nav_icon'></i> <span
                    class="nav_name">Settings</span></a> --}}
            <a href="/logout" class="nav_link "><i class='bx bx-log-out nav_icon icon-bot'></i> <span
                    class="nav_name name-bot">Log Out</span> </a>
        </div>
    </nav>
</div>
<!--Container Main start-->



<div class="container">
    @yield('content')
</div>


      {{-- Jquery  --}}
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        
    {{-- bootstrap  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="/assets/js/main.js"></script>
</body>
</html>