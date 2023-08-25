@extends('layout.userdashnav')

@section('usercon')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Available Hospital</p>
                                <h1 class="mb-0">{{$count}}</h1>
                            </div>
                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->


@endsection