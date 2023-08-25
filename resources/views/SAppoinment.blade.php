@extends('layout.weblayout')

@section('homecon')
    <section class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-lg-12">

                        <div class="set">
                            <h2>Set Appoinment</h2>
                        </div>

                        <form action="" method="GET" enctype="multipart/form-data">
                            
                            <div class="input-group mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Hospital</label>
                                <select name="electhospital" onchange="this.form.submit()" id="" class="form-control">
                                    <option value="">No Select </option>
                                    @foreach ($hos as $item)
                                        <option id="myoption" value="{{ $item->Hid }}" 
                                            @if (session()->get('hospital') == $item->Hid)
                                            {{"selected"}}
                                            @endif>{{ $item->Hname }}</option>
                                    @endforeach
                                </select>
                                <br> 
                                @if ($hopital)
                                <code>{{ $hopital[0]->Haddress }}</code>
                                
                                @endif
                                
                                @error('hospital')
                                <span class="text-dark">the Hospital is required.</span>
                                @enderror
                                
                            </div>
                        </form>
                        
                        <form action="" method="GET" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <label class="form-label" style="color: rgb(58, 58, 58)">Days</label>
                                <select name="day" onchange="this.form.submit()" id="" class="form-control">
                                    <option value="">No Select </option>
                                    @foreach ($time as $item)
                                    <option id="myoption" value="{{ $item->Sid }}" 
                                        @if (session()->get('day') == $item->Sid)
                                        {{"selected"}}
                                        @endif>{{ $item->Day }}</option>
                                        @endforeach
                                    </select>
                                    <br> 
                                    
                                </div>
                            </form>
                            
                            <form action="{{url('/appoint/action')}}" method="POST">
                                @csrf

                                <button type="submit" class="btn btn-primary" style="margin-top: 15px">Set Appoinment</button>
                            </form>
                           
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
