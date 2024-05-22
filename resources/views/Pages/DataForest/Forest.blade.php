<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/monsys.png">
    <title>Monitoring System Forest</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>
    @include('shared.sidenav')
    @include('shared.navbar')

    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="float-start">Data Forest</h6>
                        <button type="button" class="btn bg-gradient-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
                            Add Data
                        </button>
                        @include('components.create')
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tree</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soil Quality</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Temperature Quality</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Air Quality</th>
                                        <th class="text-secondary opacity-7">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($forests as $forest)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $forest->tree }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $forest->tree_type }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if($forest->soil_moisture >= 2 && $forest->soil_moisture <= 50) <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->soil_moisture }}%</p>
                                                @elseif($forest->soil_moisture > 50 && $forest->soil_moisture <= 100) <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->soil_moisture }}%</p>
                                                    @endif
                                                    <p class="text-xs text-secondary mb-0">{{ $forest->soil_quality }}</p>
                                        </td>
                                        <td class="align-left text-center text-sm">
                                            @if($forest->temperature >= 2 && $forest->temperature <= 50) <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->temperature }}°</p>
                                                @elseif($forest->temperature > 50 && $forest->temperature <= 100) <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->temperature }}°</p>
                                                    @endif
                                                    <p class="text-xs text-secondary mb-0">{{ $forest->temperature_quality }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if($forest->humidity >= 2 && $forest->humidity <= 50) <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->humidity }} mg/m³</p>
                                                @elseif($forest->humidity > 50 && $forest->humidity <= 100) <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->humidity }} mg/m³</p>
                                                    @endif
                                                    <p class="text-xs text-secondary mb-0">{{ $forest->air_quality }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#editModal{{$forest->id}}">
                                                Edit
                                            </a>
                                        </td>
                                        @include('components.edit')
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    @include('shared.footer')
    @include('shared.fixed')
    <!-- Edit Modal -->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>