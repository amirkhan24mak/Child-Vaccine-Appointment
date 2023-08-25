@extends('layout.weblayout')

@section('homecon')
    

<!-- Section: services -->
<section class="home-section nopadding paddingtop-60" style="margin-top: 120px">

    
    <div class="container">
        <h2 class="text-center" style="margin-bottom: 50px ; font-weight:700;">OUR SERVICES</h2>
        
        <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
          <img src="{{url('/webstyle/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />
        </div>
      </div>
      <div class="col-sm-3 col-md-3">

        <div class="wow fadeInRight" data-wow-delay="0.1s">
          <div class="service-box">
            <div class="service-icon">
              <span class="fa fa-stethoscope fa-3x"></span>
            </div>
            <div class="service-desc">
              <h5 class="h-light">Medical checkup</h5>
              <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
            </div>
          </div>
        </div>

        <div class="wow fadeInRight" data-wow-delay="0.3s">
          <div class="service-box">
            <div class="service-icon">
              <span class="fa fa-plus-square fa-3x"></span>
            </div>
            <div class="service-desc">
              <h5 class="h-light">Pharmacy</h5>
              <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
            </div>
          </div>
        </div>


      </div>
      <div class="col-sm-3 col-md-3">

        <div class="wow fadeInRight" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <span class="fa fa-wheelchair fa-3x"></span>
              </div>
              <div class="service-desc">
                <h5 class="h-light">Nursing Services</h5>
                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
              </div>
            </div>
          </div>            

        <div class="wow fadeInRight" data-wow-delay="0.3s">
          <div class="service-box">
            <div class="service-icon">
              <span class="fa fa-user-md fa-3x"></span>
            </div>
            <div class="service-desc">
              <h5 class="h-light">Sleep Center</h5>
              <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- /Section: services -->




      
  
      <!-- Section: works -->
      <section class="home-section paddingbot-60">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">Hospital facilities</h2>
                  <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                </div>
              </div>
              <div class="divider-short"></div>
            </div>
          </div>
        </div>
  
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div id="owl-works" class="owl-carousel">
                  <div class="item"><a href="{{url('/webstyle/img/photo/lab1.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/1@2x.jpg"><img src="/webstyle/img/photo/lab1.jpg" class="img-responsive" alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lab2.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/1@2x.jpg"><img src="/webstyle/img/photo/lab2.jpg" class="img-responsive" alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lab3.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/1@2x.jpg"><img src="/webstyle/img/photo/lab3.jpg" class="img-responsive" alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lap4.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/2@2x.jpg"><img src="/webstyle/img/photo/lap4.jpg" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lap5.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/3@2x.jpg"><img src="/webstyle/img/photo/lap5.jpg" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lap6.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/4@2x.jpg"><img src="/webstyle/img/photo/lap6.jpg" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="{{url('/webstyle/img/photo/lap77.jpg')}}"  data-lightbox-gallery="gallery1" data-lightbox-hidpi="/webstyle/img/works/5@2x.jpg"><img src="/webstyle/img/photo/lap77.jpg" class="img-responsive " alt="img"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section: works -->
  
  

@endsection