@extends('layout.weblayout')

@section('homecon')
    <!-- Section: intro -->
    <section class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="login text-center">
                        <h2>Create an Hospital Account</h2>
                    </div>
                    <form action="{{ url('/Hospitalregister/hospitalformstore') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Name</label>
                                <input type="text" class="form-control" name="pname" >
                            
                                @error('name')
                                    <span class="text-dark">the Hospital Name is required.</span>
                                @enderror

                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Address</label>
                                <textarea type="text" class="form-control" rows="3" name="paddress"></textarea>
                                @error('paddress')
                                <span class="text-dark">the Address is required.</span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Upload Image / Logo</label>
                                <input type="file" class="form-control" name="cimg">
                                @error('cimg')
                                    <span class="text-dark">the Image is required.</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Email</label>
                                <input type="email" class="form-control" name="pemail">
                                
                                @error('pemail')
                                    <span class="text-dark">the Email is required.</span>
                                @enderror
    
                            </div>

                        </div>

                        <div class="col-lg-6">




                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Password</label>
                                <input type="password" class="form-control" name="ppass">

                                @error('ppass')
                                    <span class="text-dark">the Password is required.</span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Confime Password</label>
                                <input type="password" class="form-control" name="cpass" >

                                @error('cpass')
                                    <span class="text-dark">the Confime Password is required.</span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top: 15px">Register</button>

                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
