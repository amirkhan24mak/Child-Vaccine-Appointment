@extends('layout.weblayout')

@section('homecon')
    
    <!-- Section: intro -->
    <section class="intro">
        <div class="intro-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                  <h2 class="h-ultra">AV Health medical group</h2>
                </div>
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                  <h4 class="h-light">Provide Best Appointments For Your Children Vaccination</h4>
                  {{-- <h3>{{session()->get('pid')}}</h3> --}}

                </div>
                <div class="well well-trans">
                  <div class="wow fadeInRight" data-wow-delay="0.1s">
  
                    <ul class="lead-list">
                      
                      <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite Hospital</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                      <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                    </ul>
                    <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                      <a href="{{url('/services')}}" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                    </p>
                  </div>
                </div>
  
  
              </div>
              <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                  <img src="{{url('/webstyle/img/dummy/img-1.png')}}" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- /Section: intro -->
  
      
      <section id="callaction" class="home-section paddingtop-40">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="callaction bg-gray">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="cta-text">
                          <h3>In an emergency? Need help now?</h3>
                          <p>Please note: current patients of Nationwide Children’s primary care network can receive the COVID vaccine with their pediatrician.

                            Children under 5 years old will receive the Moderna vaccine and ages 5-18 will receive the Pfizer vaccine. Only COVID-19 vaccinations will be administered during these clinic times. If you are seeking other vaccinations, such as the flu vaccine, please contact your primary care physician. </p>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-4">
                      <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="cta-btn">
                          <a href="{{url('/SetAppoinment')}}" class="btn btn-skin btn-lg ">
                            Book an appoinment</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
  
      <section id="partner" class="home-section paddingbot-60">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">Our partner</h2>
                  <p>Take charge of your health today with our specially designed health packages</p>
                </div>
              </div>
              <div class="divider-short"></div>
            </div>
          </div>
        </div>
  
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="partner">
                <a href="#"><img src="/webstyle/img/dummy/partner-1.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="partner">
                <a href="#"><img src="/webstyle/img/dummy/partner-2.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="partner">
                <a href="#"><img src="/webstyle/img/dummy/partner-3.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="partner">
                <a href="#"><img src="/webstyle/img/dummy/partner-4.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection