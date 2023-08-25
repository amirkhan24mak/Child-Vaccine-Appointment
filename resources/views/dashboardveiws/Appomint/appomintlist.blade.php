@extends('layout.layoutdash')

@section('navcontaint')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Appomiment List</h4>

                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Appoinment No#</th>
                                            <th scope="col">Child Name</th>
                                            <th scope="col">Hospital Name</th>
                                            <th scope="col">Appoinment Day</th>
                                            <th scope="col">Appoinment Status</th>
                                            <th scope="col">Result</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ss as $appointments)
                                            <tr>
                                                <td>{{ $appointments->Id }}</td>

                                                <td>{{ $appointments->Pname }}</td>
                                                <td>{{ $appointments->Hname }}</td>
                                                <td>{{ $appointments->Day }}</td>
                                                <td>

                                                    @if ($appointments->appstatus == 1)

                                                    <strong class="text-success">Compelete</strong> 
                                                    
                                                    @else
                                                    <strong class="text-warning">Pending</strong>  
                                                        
                                                    @endif

                                                    
                                                <td>
                                                    @if ($appointments->Report == 0)
                                                    <strong class="text-warning">Pending</strong> 
                                                     
                                                 @elseif($appointments->Report == 1)
                                                 <strong class="text-success">Positive</strong> 
                                                     
                                                 @else
                                                 <strong class="text-danger">Nagitive</strong> 

                                                 @endif
                                                    


                                                </td>


                                                <td>
                                                   
                                                    <a href="{{ url('/appointment/deleteadmin/{id}') }}/{{ $appointments->Id }} "class="btn btn-outline-danger m-2">Cencel</a>
                                                </td>
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
    </div>
@endsection
