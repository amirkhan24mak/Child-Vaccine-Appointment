        @extends('layout.weblayout')        


@section('homecon')
    <section id="pricing" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h1 class="h-bold">Appoinment Health Report</h1>
                        </div>
                        <div class="section-heading text-center">
                            @foreach ($ss as $s )
                            @endforeach
                            <img src="{{url('/')}}/allimages/{{$s->Himg}}" width="250" height="170" alt="Hospital Image" style="border: 1px solid black; border-radius: 50%;">
                              
                          <h4 class="h-bold">{{$s->Hname}}</h4>
                          <p>{{$s->Haddress}}</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>

                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Patient Health Detail</h2>
                            <img src="{{url('/')}}/allimages/{{$s->Pimag}}" alt="Patient Image" width="150" style="border: 1px solid black; border-radius: 50%;">
                            <p>Appointment Number: <span style="color:rgb(47, 204, 204);">{{$s->Id}}</span></p>
                            <p>Patient Name: <span style="color:rgb(47, 204, 204);">{{$s->Pname}}</span></p>
                            <p>Patient Gender: <span style="color:rgb(47, 204, 204);">{{$s->Pgender}}</span></p>
                            <p>Patient Age: <span style="color:rgb(47, 204, 204);">{{$s->Page}}</span></p>
                            <p>Patient Phone no: <span style="color:rgb(47, 204, 204);">{{$s->Pphone}}</span></p>
                            <p>Patient Email: <span style="color:rgb(47, 204, 204);">{{$s->Pemail}}</span></p>
                            <p>Appointment Day: <span style="color:rgb(47, 204, 204);">{{$s->Day}}</span></p>
                            <p>Appointment Status: <span>
                              
                                @if ($s->appstatus == 1)

                                <strong class="text-success">Compelete</strong> 
                                
                                @else
                                <strong class="text-warning">Pending</strong>  
                                    
                                @endif
                              
                            </span></p>

                            <p>Appointment Result: <span>
                              
                                @if ($s->Report == 0)
                                <strong class="text-warning">Pending</strong> 
                                                         
                                @elseif($s->Report == 1)
                                <strong class="text-success">Positive</strong> 
                                                         
                                @else
                                <strong class="text-danger">Nagitive</strong> 

                                @endif
                              
                            </span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    
@endsection
