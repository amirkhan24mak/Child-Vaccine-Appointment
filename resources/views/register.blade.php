@extends('layout.weblayout')

@section('homecon')
    <section class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">

                    <div class="login text-center">
                        <h2>Create an Account</h2>
                    </div>


                    <form action="{{ url('/register/parentsformstore') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Child Name</label>
                                <input type="text" class="form-control" name="name">

                                @error('name')
                                    <span class="text-dark">the Child Name is required.</span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Phone No:</label>
                                <input type="number" class="form-control" name="phoneno">

                                @error('phoneno')
                                    <span class="text-dark">the Phone Number is required.</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Address</label>
                                <textarea type="text" class="form-control" rows="3" name="address"></textarea>
                            </div>

                            <div class="input-group mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Select Gender</label>
                                <select class="form-select form-control" name="gender">
                                    <option value="">Choose...</option>
                                    <option value="Boy">Boy</option>
                                    <option value="Girl">Girl</option>
                                </select>
                                <br>
                                @error('gender')
                                    <span class="text-dark">the Gender is required.</span>
                                @enderror

                            </div>

                            <div class="input-group mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Age</label>
                                <select class="form-select form-control" name="age">
                                    <option value="">Choose...</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 Year">2 Year</option>
                                    <option value="3 Year">3 Year</option>
                                    <option value="4 Year">4 Year</option>
                                    <option value="5 Year">5 Year</option>
                                    <option value="6 Year">6 Year</option>
                                    <option value="7 Year">7 Year</option>
                                    <option value="8 Year">8 Year</option>
                                    <option value="9 Year">9 Year</option>
                                    <option value="10 Year">10 Year</option>
                                    <option value="11 Year">11 Year</option>
                                    <option value="12 Year">13 Year</option>
                                    <option value="12 Year">14 Year</option>
                                    <option value="12 Year">15 Year</option>
                                    <option value="12 Year">16 Year</option>
                                    <option value="12 Year">17 Year</option>
                                </select>
<br>
                                @error('age')
                                    <span class="text-dark">the Age is required.</span>
                                @enderror
                            </div>


                        </div>

                        <div class="col-lg-6">


                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Childe Image</label>
                                <input type="file" class="form-control" name="cimg">
                                @error('cimg')
                                    <span class="text-dark">the Childe Image is required.</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label" style="color: rgb(58, 58, 58)">Email</label>
                                <input type="email" class="form-control" name="pemail">
                                
                                @error('pemail')
                                    <span class="text-dark">the Email is required.</span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Password</label>
                                <input type="password" class="form-control" name="ppass">

                                @error('ppass')
                                    <span class="text-dark">the Password is required.</span>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label class="form-label" style="color: rgb(58, 58, 58)">Confime Password</label>
                                <input type="password" class="form-control" name="cpass">

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
