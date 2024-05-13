<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">

                <span class="ms-1 font-weight-bold">Monitoring System Forest</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('dashboard.Dashboard')) ? 'active': '' }}" href="{{ route('dashboard.Dashboard') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('DataForest.Forest')) ? 'active': '' }}" href="{{ route('DataForest.Forest') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Forest</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-link-text ms-1">Data</span>
                        <div class="d-flex">
                            <i class="ni ni-bold-down"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('DataSample.Sample')) ? 'active': '' }}" href="{{ route('DataSample.Sample') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Sample</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('DataSample.SoilMoist')) ? 'active': '' }}" href="{{ route('DataSample.SoilMoist') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Soil Moist</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('DataSample.DHT')) ? 'active': '' }}" href="{{ route('DataSample.DHT') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">DHT</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::is('DataSample.GasSensor')) ? 'active': '' }}" href="{{ route('DataSample.GasSensor') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Gas Sensor</span>
                    </a>
                </li>
            </ul>
        </div>



    </aside>
</body>