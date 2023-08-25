@extends('layout.layoutdash')

@section('navcontaint')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Schedule</h4>
                            <p class="card-description">
                                Schedule Add New
                            </p>
                            <form class="forms-sample" action="{{url('/dashboard/Setday/daystore')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Day</label>
                                    <input type="text" class="form-control" placeholder="Day" name="day">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
