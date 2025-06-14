<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  

</head>
<body>
   <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full">

    
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <h2>User : {{ auth()->user()->name }}</h2>

          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="/home" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="/getmessage" aria-expanded="false">
                <iconify-icon icon="solar:chat-square-line-duotone"></iconify-icon>
                <span class="hide-menu">Message</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="/user" aria-expanded="false">
                <iconify-icon icon="solar:user-line-duotone"></iconify-icon>
                <span class="hide-menu">User</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="text-danger primary-hover-bg text-danger" href="/logout" 
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
              class="logout-link">
              <iconify-icon icon="solar:logout-line-duotone" width="24" height="24"></iconify-icon>
              Logout
            </a>

            <form id="logout-form" action="/logout" method="POST" style="display: none;">
              @csrf
            </form>
            </li>
            
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

      <div class="body-wrapper-inner">
        <div class="container">
          <!--  Header Start -->
          <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                  <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                    <div class="notification bg-primary rounded-circle"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="message-body">
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 1
                      </a>
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 2
                      </a>
                    </div>
                  </div>
                </li>
              </ul>

              <form class="d-none d-lg-block mx-auto w-50">
              <div class="input-group">
                <input type="text" class="form-control rounded-start" placeholder="Search..." />
                <button class="btn btn-outline-secondary rounded-end" type="submit">
                  <i class="ti ti-search"></i>
                </button>
              </div>
            </form>
              
              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                  {{ \Carbon\Carbon::now() }}
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                     <img src="{{ asset('assets/images/profile/mine.jpg') }}" width="60" height="60" class="rounded-circle">

                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-user fs-6"></i>
                          <p class="mb-0 fs-3">My Profile</p>
                        </a>
                      <form method="post" action="/logout">
                            @csrf
                          <button type="submit" class="btn btn-outline-primary w-75 mx-3 mt-2 d-block">Logout</button>
                      </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <!--  Header End -->

         {{ $slot }}


          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Thank You for visiting my pages!</p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>