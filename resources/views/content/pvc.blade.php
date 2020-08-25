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
                            <h1 class="text-1 font-weight-medium mt-3">Poly Vinyl Chloride(PVC) Cover</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pt-5 pb-4">
                <div class="row pb-4 mb-2">
                    <div class="col-md-4 mb-5 pb-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="{{url('/img/pvc/1.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/2.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/3.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/4.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/5.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/6.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/pvc/7.png')}}" class="img-fluid"></div>
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
                                    <td>8'</td>
                                    <td>0.100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>9'</td>
                                    <td>0.100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>9 x 12</td>
                                    <td>0.510</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>10 x 10</td>
                                    <td>0.380</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>12 x 12</td>
                                    <td>0.700</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>15 x 15</td>
                                    <td>1.300</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>18 x 18</td>
                                    <td>2.110</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>22 x 16</td>
                                    <td>2.230</td>
                                    <td>10</td>
                                </tr>    
                            </tbody>
                        </table>
                        <h4 class="text-warning">Advantages of PVC</h4>
                        <ul class="text-capitalize">
                            <li>waterproof, weatherproof, noncorrosive, burglarproof</li>
                            <li>light weight - ease of handling</li>
                            <li>high strength : weight ratio</li>
                            <li>temperature resistance from - 40 degrees to 80 degerees</li>
                            <li>PVC's abrasion resistance, light weight, good mechanical strength & toughness are key technical advantages for its use in building and construction applications</li>
                            <li>PVC can be cut, shaped, welded and joined easily in a variety of styles</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">description</h3>
                            <p class="text-6 text-muted text-justify" style="line-height: 2">we are one of the leading PVC and plastic manhole cover manufactureres and suppliers in all over india. we are using high technology machinary to create the best plastic products such as PVC & plastic manhole covers and frames. these products are fabricated using the most excellent standard raw materials and advanced technology. we offered designed with high accuracy under the guidance of our expert in order to meet the international quality standard.</p>
                        </div>
                        
                    </div>
                    
            </div>
            
               
            
            
        </div>
        </div>

    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
