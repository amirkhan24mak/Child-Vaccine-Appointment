@extends('layout.hospitalnav')

@section('hospitalcon')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Appoinment Update</h4>
                            
                            <form class="forms-sample" action="{{url('/appointment/action')}}/{{$data->Id}}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="exampleSelectGender">Appoinment Status</label>
                                    <select name="status" class="form-control" id="exampleSelectGender">
                                      {{-- <option value="">{{$data->Report}}</option> --}}
                                        <option selected value="0">Pending</option>
                                        <option  value="1">Complete</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Appoinment Result</label>
                                    <select name="result" class="form-control" id="exampleSelectGender">
                                        <option selected value="0">Pending</option>
                                        <option value="1">Positive</option>
                                        <option value="2">Negative</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
