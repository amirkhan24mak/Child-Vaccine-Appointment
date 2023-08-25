@extends("layout.layoutdash")

@section("navcontaint")

<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">


<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Emails</h4>

        @foreach ($email as $user)
            
        
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span style="color: black;font-weight:bold;">{{$user->Email}} &nbsp;:</span>&nbsp;{{$user->Name}}
                  </button>
                </h5>
            </div>
            
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  {{$user->massage}}
                </div>
            </div>
            </div>
            
            @endforeach
            
        </div>
    </div>
</div>
</div>


      </div>
    </div>
</div>


@endsection