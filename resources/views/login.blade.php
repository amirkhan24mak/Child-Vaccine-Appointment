@extends('layout.weblayout')

@section('homecon')
    <!-- Section: intro -->
    <section class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-6">

                        <div class="login">
                            <h2>Login</h2>
                        </div>

                        <form action="{{ url('/login/action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Email address</label>
                                <input type="email" class="form-control" name="lemail">
                                @error('lemail')
                                    <span class="text-danger">Invalid Email</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" style="color: rgb(58, 58, 58)">Password</label>
                                <input type="password" class="form-control" name="passw">
                                @error('passw')
                                    <span class="text-danger">Invalid Password</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top: 15px">Login</button>
                            
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
