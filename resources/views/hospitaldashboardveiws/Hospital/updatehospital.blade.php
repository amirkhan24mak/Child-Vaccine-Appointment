@extends('layout.hospitalnav')

@section('hospitalcon')


            
      
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title text-center">UPDATE PROFILE</h4>
                        <form action="{{url('/update_hostpital')}}/{{$select->Hid}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <img src="{{url('/')}}/allimages/{{$select->Himg}}" style="border: 2px solid Black; display:block;margin:auto;border-radius: 10px;" >

                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input name="name"  type="text" class="form-control" id="exampleInputName1" value="{{$select->Hname}}" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail3" value="{{$select->email}}" placeholder="Email">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail3">Address</label>
                            <input name="address" type="text" class="form-control" value="{{$select->Haddress}}"  placeholder="Address">
                          </div>

                          <div class="form-group">
                              <label for="">Image</label>
                            <div class="input-group col-xs-12">
                                <input name="img" type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                <input name="oldimg" type="hidden" value="{{$select->Himg}}">
                              
                            </div>
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
