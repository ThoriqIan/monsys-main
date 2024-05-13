  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ basename(str_replace('.', '/', Route::currentRouteName())) }}</li>
          </ol>
        <h6 class="font-weight-bolder text-white mb-0">{{ basename(str_replace('.', '/', Route::currentRouteName())) }}</h6>
        </nav>
<ul class="navbar-nav justify-content-end">
    <li class="nav-item d-flex align-items-center">
        @guest <!-- Jika tidak ada pengguna yang login -->
            <a href="{{ route('login') }}" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
            </a>
        @else <!-- Jika ada pengguna yang login -->
            <a href="#" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
            </a>
        @endguest
    </li>
</ul>


            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
    
  
                 
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>