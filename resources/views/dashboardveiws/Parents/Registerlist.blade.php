@extends('layout.layoutdash')

@section('navcontaint')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User List</h4>
                            
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($fetch as $pataint)
                                        
                                    
                                    <tr>
                                        <th scope="row">{{$pataint->Pid}} </th>
                                        <td><img src="{{url('/')}}/allimages/{{$pataint->Pimag}}"  width="100px" alt=""></td>
                                        <td>{{$pataint->Pname}} </td>
                                        <td>{{$pataint->Pphone}} </td>
                                        <td>{{$pataint->Paddress}} </td>
                                        <td>{{$pataint->Pgender}} </td>
                                        <td>{{$pataint->Page}} </td>
                                        <td>{{$pataint->Pemail}}</td>
                                        <td>{{$pataint->Ppassword}}</td>
                                        <td>
                                            <a href="{{url('/appointment/delete2')}}/{{$pataint->Pid}}">
                                                <button type="button"
                                                    class="btn btn-outline-danger m-2">Delete</button>
                                                </a>
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
    <!-- Table End -->
@endsection
