@extends('layout.layoutdash')

@section('navcontaint')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <strong><p class="text-info">Total Hospital Available</p></strong>
                                <h1 class="mb-0">{{$hcoun}}</h1>
                            </div>
                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <strong><p class="text-danger">Total Pendding Appoinment</p></strong>
                                <h1 class="mb-0">{{$app}}</h1>
                            </div>
                            <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                        </div>
                        <canvas id="balance-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                    <strong><p class="text-warning">Total Users</p></strong>
                                <h1 class="mb-0">{{$pa}}</h1>
                            </div>
                            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                        </div>
                        <canvas id="budget-chart" height="80"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                <div class="card">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <strong><p class="text-success">Total Compelete Appoinment</p></strong>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h3 class="mb-">{{$ap}}</h3>
                      <h3 class="mb-">78%</h3>
                    </div>
                    <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                  </div>
                </div>
              </div>

        </div>

    </div>
    <!-- content-wrapper ends -->


@endsection