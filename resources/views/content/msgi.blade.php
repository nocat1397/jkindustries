<!DOCTYPE html>
<html lang="en">
    @include('layouts.layout')
<body>
    
        @include('section.navbar')
        <div role="main" class="main">
            <section class="bg-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-1 font-weight-medium mt-3">M.S.G.I Chequered Cover</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pt-5 pb-4">
                <div class="row pb-4 mb-2">
                    <div class="col-md-4 mb-5 pb-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="{{url('/img/msgi/1.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/2.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/3.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/4.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/5.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/6.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/7.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/8.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/msgi/9.png')}}" class="img-fluid"></div>
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-5">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">product details</h3>
                        </div>
                        <table class="table text-center border shadow">
                            <tbody>
                                <tr class="product-nav">
                                    <th>Size of Cover</th>
                                    <th>Weight (kg)</th>
                                    <th>Box packing</th>
                                </tr>
                                <tr>
                                    <td>12 x 12</td>
                                    <td>3.7</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>12 x 18</td>
                                    <td>5.9</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>12 x 24</td>
                                    <td>7.6</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>15 x 15</td>
                                    <td>6</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>18 x 18</td>
                                    <td>7.5</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>24 x 18</td>
                                    <td>10</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>21 x 21</td>
                                    <td>9.6</td>
                                    <td>4</td>
                                </tr>
                                    
                            </tbody>
                        </table>
                        <h4 class="text-warning">Advantages of MSGI</h4>
                        <ul class="text-capitalize">
                            <li>available in GI coating & multi powder coating</li>
                            <li>25 micron GI coating & 85 micron powder coating</li>
                            <li>rust proof & scratch proof</li>
                            <li>also available in locking system</li>
                            <li>attractive & shining textures</li>
                            <li>smooth modern design</li>
                            <li>genuine coating</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">description</h3>
                            <p class="text-6 text-muted text-justify" style="line-height: 2">we are engaged in manufacturing and supplying a wide array of MSGI MANHOLE COVER. the offered cover is manufactured at par with industry standards of quality using superior class mild steel and progressive technology under the stren surveillance of our dexterous technocrats. this cover is used for covering manhole and highly appreciated for its sturdiness and durability by our renowned clients.</p>
                        </div>
                        
                    </div>
                    
            </div>
            
               
            
            
        </div>
        </div>

    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
