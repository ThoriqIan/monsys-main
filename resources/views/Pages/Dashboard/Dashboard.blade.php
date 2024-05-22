<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/monsys.png">
    <title>
      Monitoring System Forest
    </title>
    @extends('shared.layout')
  </head>

  @include('shared.sidenav')

  @include('shared.navbar')

  <!-- containt -->
  @section('content')

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Soil Moisture</p>
                  <h5 class="text-success  font-weight-bolder">
                    {{ $lastDataSample->soilMoisture }}%
                  </h5>
                  <p class="mb-0">
                    <span class="text-Success text-sm font-weight-bolder">10% - 90%</span>
                    Good Quality Soil and humidity
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-bold-up text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">DHT 22</p>
                  <h5 class="text-success font-weight-bolder">
                    {{ $lastDataSample->suhu }}°
                  </h5>
                  <p class="mb-0">
                    <span class="text-Success text-sm font-weight-bolder">5° - 83°</span>
                    Good Quality Temperature and humidity
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-bold-up text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Gas</p>
                  <h5 class="text-success font-weight-bolder">
                    {{ $lastDataSample->gasValue }} mg/m³
                  </h5>
                  <p class="mb-0">
                    <span class="text-Danger text-sm font-weight-bolder">1 - 50 mg/m³</span>
                    Good Air Quality
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-bold-up text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Sample</p>
                  <h5 class="font-weight-bolder">
                    No.{{ $lastDataForest->id }}
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">+1</span> Sample Added
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="ni ni-bold-up text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Chart Pertama -->
    <div class="row mt-4">
      <div class="col-lg-7 mb-lg-0 mb-4 w-100">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Analytics Quality Tree Sample</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-arrow-up text-success"></i>
              <span class="font-weight-bold">4% more</span> in 2021
            </p>
          </div>
          <div class="row card-body">
            <div class="col-sm-1">
              <table class="h-100">
                <tr>
                  <td style="vertical-align:top">
                    <h6>Good</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Bad</h6>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-sm-10 chart ">
              <canvas id="chart-line" data-maps='{{ $dataLineChart }}' class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Chart Pertama -->


    <div class="row mt-4">
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Data Sample Result</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center">
              <tbody>
                @foreach($dataForest as $forest)
                <tr>
                  <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">

                      <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Tree Type :</p>
                        <h6 class="text-sm mb-0">{{ $forest->tree }}</h6>
                      </div>
                    </div>
                  </td>

                  </td>

                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Soil Mosture Quality:</p>
                      <h6 class="text-sm mb-0">{{ $forest->soil_moisture }}%</h6>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Temperature Quality:</p>
                      <h6 class="text-sm mb-0">{{ $forest->temperature }}°</h6>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Air Quality:</p>
                      <h6 class="text-sm mb-0">{{ $forest->gas }} mg/m³</h6>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Chart Kedua -->
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 h-500 w-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Analytics Sample Tree Result</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-arrow-up text-success"></i>
              <span class="font-weight-bold">1 Added</span>
            </p>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="chart-bar" data-maps='{{ $dataBarChart }}' class="chart-canvas" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('shared.footer')


    @include('shared.fixed')


    </body>

    </html>