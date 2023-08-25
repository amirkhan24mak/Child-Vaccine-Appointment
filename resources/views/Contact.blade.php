@extends('layout.weblayout')

@section('homecon')
<section class="intro">
    <div class="intro-content">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6">

                    <div class="login">
                        <h2>Contact Us</h2>
                    </div>

                    <form action="{{ url('/contact/store') }}" method="POST">
@csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="color: rgb(58, 58, 58)">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email">
                            @error('email')
                                <span class="text-danger">Invalid Email</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" style="color: rgb(58, 58, 58)">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <span class="text-danger">Invalid name</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" style="color: rgb(58, 58, 58)">Massage <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" rows="3" name="address"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-top: 15px">SENT</button>
                        
                    </form>



                </div>
            </div>
        </div>
    </div>
</section>
@endsection