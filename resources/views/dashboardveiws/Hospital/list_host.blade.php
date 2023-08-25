    

@extends('layout.layoutdash')

@section('navcontaint')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hospital List</h4>
                        
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($fetch as $pataint)
                                    
                                
                                <tr>
                                    <th scope="row">{{$pataint->Pid}} </th>
                                    <td><img src="{{url('/')}}/allimages/{{$pataint->Himg}}"  width="100px" alt=""></td>
                                    <td>{{$pataint->Hname}} </td>
                                    <td>{{$pataint->Haddress}} </td>
                                    <td>{{$pataint->email}} </td>
                                    <td>{{$pataint->password}} </td>
                                    <td>
                                        <form action="{{url('/approved')}}" method="post">
                                            @csrf

                                            @if ($pataint->Status)

                                            @php
                                                $sel = 'selected';
                                                @endphp
           
                                                    
                                                @else
                                                @php
                                                    $sel = '';
                                                @endphp                                         
                                                @endif
                                            <select name="" id="">
                                        <option {{$sel}} value="{{$pataint->Status}}">Pending</option>
                                        <option {{$sel}} value="{{$pataint->Status}}">Approved</option>
                                    </select>
                                </td>
                                        
                                    <td>
                                        <button type="submit"  class="btn btn-outline-success">Approved</button>
                                    </form>
                                        <button type="button" class="btn btn-outline-danger m-2">Delete</button>
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

