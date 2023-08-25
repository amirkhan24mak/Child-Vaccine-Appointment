    

@extends('layout.layoutdash')

@section('navcontaint')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Day Schedule List</h4>
                        
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($fetch as $day)
                                    
                                
                                <tr>
                                    <th scope="row">{{$day->Sid}} </th>
                                    <td>{{$day->Day}} </td>
                                    <td>
                                        <a href="{{'/appointment/deleteadmin/{id}'}}/{{$day->id}}">
                                        <button type="button" class="btn btn-outline-danger m-2">Delete</button>
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

@endsection

