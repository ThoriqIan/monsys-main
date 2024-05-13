<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/monsys.png">
    <title>Monitoring System Forest</title>
    @include('shared.layout')

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    @include('shared.sidenav')
    @include('shared.navbar')

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
                                            @if($forest->soil_moisture >= 2 && $forest->soil_moisture <= 50)
                                                <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->soil_moisture }}%</p>
                                            @elseif($forest->soil_moisture > 50 && $forest->soil_moisture <= 100)
                                                <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->soil_moisture }}%</p>
                                            @endif
                                            <p class="text-xs text-secondary mb-0">{{ $forest->soil_quality }}</p>
                                        </td>
                                        <td class="align-left text-center text-sm">
                                            @if($forest->temperature >= 2 && $forest->temperature <= 50)
                                                <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->temperature }}°</p>
                                            @elseif($forest->temperature > 50 && $forest->temperature <= 100)
                                                <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->temperature }}°</p>
                                            @endif
                                            <p class="text-xs text-secondary mb-0">{{ $forest->temperature_quality }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if($forest->humidity >= 2 && $forest->humidity <= 50)
                                                <p class="text-success text-sm font-weight-bold mb-0">{{ $forest->humidity }} mg/m³</p>
                                            @elseif($forest->humidity > 50 && $forest->humidity <= 100)
                                                <p class="text-danger text-sm font-weight-bold mb-0">{{ $forest->humidity }} mg/m³</p>
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

</body>
</html>
