@extends('layout.hospitalnav')

@section('hospitalcon')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            {{-- <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Appointments Pending</p>
                                <h1 class="mb-0">{{$pend}}</h1>
                            </div>
                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Appointments Compelete</p>
                                <h1 class="mb-0">{{$compe}}</h1>
                            </div>
                            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                        </div>
                        <canvas id="budget-chart" height="80"></canvas>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
    <!-- content-wrapper ends -->



@endsection