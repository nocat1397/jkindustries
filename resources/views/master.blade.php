<!DOCTYPE html>
<html lang="en">
@include('layouts.layout')
<body class="overflow-x-hidden">
  {{-- header-navbar section start --}}
  @include('section.header')
    {{-- header-navbar section end --}}


    {{-- second section start --}}
    <div class="container py-2 my-5">
      <div class="row text-center text-md-left mt-4">
        <div class="col-md-12">
          <p class="text-center" data-aos="fade-down" data-aos-duration="800">
            <strong class="text-warning mb-4 text-1">Who We Are</strong>
          </p>
        </div>
      

      <div class="col-md-4 mb-4 mb-md-0">
        <div class="row text-center justify-content-center">
          <div class="col-4">
            <img class="mb-4"  data-aos="fade-right" data-aos-duration="800" height="100" width="110" src="{{url('img/factory.png')}}">
          </div>        
        </div>
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="font-weight-bold line-height-5 mb-2 text-2">Manufacturer</h2>
          </div>        
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="row text-center justify-content-center">
          <div class="col-4">
            <img class="mb-4" data-aos="zoom-out" data-aos-duration="800" height="100" width="110" src="{{url('img/supply.png')}}">
          </div>        
        </div>
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="font-weight-bold line-height-5 mb-2 text-2">Supplier</h2>
          </div>        
        </div>
      </div>
      <div class="col-md-4">
        <div class="row text-center justify-content-center">
          <div class="col-4">
            <img class="mb-4"  data-aos="fade-left" data-aos-duration="800" height="100" width="100" src="{{url('img/house.png')}}">
          </div>        
        </div>
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="font-weight-bold line-height-5 mb-2 text-2">Trader & Wholesaler</h2>
          </div>        
        </div>
      </div>
      </div>
    </div>
  
    <hr class="solid my-5">
    <div class="container">
      <div class="row align-items-center text-center text-md-left pt-4 pb-5 my-5">
        <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="800">
          <p class="text-3 text-justify">
            Established in the year 2016, "J.K. Trading Co. & Manufacturing" is a distinguished Manufacturer of a wide array of MS Manhole Cover, SS Manhole Cover, Zinc Manhole Cover etc. Our range is available in various sizes, and specifications as per the client’s requirements.
          </p>
          <a class="btn btn-outline-dark font-weight-semibold rounded-0 text-4 px-5 py-2" href="{{url('about us')}}">LERN MORE</a>
        </div>
        <div class="col-md-10 col-lg-5"  data-aos="zoom-in" data-aos-duration="800">
          <img src="{{url('/img/about.jpg')}}" class="img-fluid" height="290" width="440">

        </div>
      </div>
    </div>
    <section class="overlay">
      <div class="content">
        <div class="container my-5 py-5">
          <div class="row pt-2">
            <div class="col-lg-12 text-center text-5 text-light mb-4">
              Product Quality Approved By
            </div>
            <div class="col">
              <div class="row pb-4 pt-4 pb-5 clearfix">
                <div class="col-lg-4 mb-4" data-aos="fade-left" data-aos-duration="800">
                  <div class="text-center">
                    <img src="{{url('/img/certified/aqc.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                  <div class="text-center">
                    <img src="{{url('/img/certified/ias.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-right" data-aos-duration="800">
                  <div class="text-center">
                    <img src="{{url('/img/certified/iaf.png')}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>


    <section class="section bg-color-grey m-0 border-0">
      <div class="container container-lg">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 pr-lg-4">
            <div class="row text-right justify-content-end">
              <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                <h4 class="text-2 text-warning font-weight-bold mb-0 mt-5">MORE ABOUT US</h4>
                <p class="text-6 line-height-9 text-justify">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
              </div>
              <div class="col-lg-7 text-center mb-3" data-aos="zoom-in" data-aos-duration="800">
                <img src="{{url('/img/first.jpg')}}" class="img-fluid position-relative" height="190" width="344">
              </div>
            </div>
          </div>

          <div class="col-lg-6 pl-lg-4">
            <div class="row">
              <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="800">
                <img src="{{url('/img/fourth.jpg')}}" class="img-fluid position-relative" height="94" width="200">
              </div>
              <div class="col-lg-9" data-aos="fade-right" data-aos-duration="800">
                <h4 class="text-2 text-warning font-weight-bold mb-0 mt-4">WORK WITH US</h4>
                <p class="text-6 line-height-9 text-justify ">We maintain teamwork, value each person’s participation and help to gain customer’s confidence by giving customized solutions with the host of products. The range given by us is procured from the accredited vendors of the industry.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Slider Area Start --}}
    <div class="container">    
      <div class="row text-center">
        <div class="col-md-12">
          <h4 class="text-7 text-warning font-weight-bold mb-5 mt-5 text-center">Catered and Approved in Various Projects</h4>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item"><img src="{{url('/img/slider/adani.png')}}" alt=""></div>
          <div class="item"><img src="{{url('/img/slider/constructions.png')}}" alt=""></div>
          <div class="item"><img src="{{url('/img/slider/realty.png')}}" alt=""></div>
          <div class="item"><img src="{{url('/img/slider/GCS.jpg')}}" alt=""></div>
          <div class="item"><img src="{{url('/img/slider/shahlon.png')}}" alt=""></div>
        </div>
      </div>
    </div>
    {{-- slider area end --}}
    {{-- <div class="container py-5">
      <h4 class="text-7 text-warning font-weight-bold text-center">Testimonials</h4>
      <div class="row justify-content-center py-5">
        <div class="col-md-12">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              <div class="swiper-slide">Slide 4</div>
              <div class="swiper-slide">Slide 5</div>
              <div class="swiper-slide">Slide 6</div>
              <div class="swiper-slide">Slide 7</div>
              <div class="swiper-slide">Slide 8</div>
              <div class="swiper-slide">Slide 9</div>
              <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        </div>
      </div> --}}
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-0" data-aos="zoom-in" data-aos-duration="800">
            <img src="{{url('/img/fifth.jpg')}}" height="420" width="683" style="height: 420px!important" class="img-fluid">
          </div>
          <div class="col-lg-6 p-0" data-aos="fade-right" data-aos-duration="800">
            <section class="section-dark match-height border-top-0 my-0">
              <div class="row text-center justify-content-center align-items-center h-100 mx-0">
                <div class="col-lg-8">
                  <p class="text-8 mb-4 text-center">
                    <strong>Company Profile</strong>
                  </p>
                  <p class="text-2 font-weight-light mb-4 text-justify">
                    <strong class="text-uppercase text-warning">JK Industries</strong>
                    is a name that has always been associated with quality products, which are always high on performance and durability.
                  </p>
                </div>

              </div>
            </section>
          </div>
        </div>
      </div>
          {{-- Slider Area Start --}}
          {{-- <div class="container">    
            <div class="row text-center">
              <div class="col-md-12">
                <h4 class="text-7 text-warning font-weight-bold mb-5 mt-5 text-center">Our Valuable Clients</h4>
              </div>
              <div class="owl-carousel owl-theme">
                <div class="item"><img src="{{url('/img/slider/adani.png')}}" alt="" ></div>
                <div class="item"><img src="{{url('/img/slider/constructions.png')}}" alt=""></div>
                <div class="item"><img src="{{url('/img/slider/realty.png')}}" alt=""></div>
                <div class="item"><img src="{{url('/img/slider/gcs.jpg')}}" alt=""></div>
                <div class="item"><img src="{{url('/img/slider/shahlon.png')}}" alt=""></div>
              </div>
            </div>
          </div> --}}
    {{-- slider area end --}}



    
   
    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>