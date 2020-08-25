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
                            <h1 class="text-1 font-weight-medium mt-3">IRON MANHOLE Cover</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pt-5 pb-4">
                <div class="row pb-4 mb-2">
                    <div class="col-md-4 mb-5 pb-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="{{url('/img/manhole/1.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/manhole/2.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/manhole/3.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/manhole/4.png')}}" class="img-fluid"></div>
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
                                    <th>Size of Cover (mm)</th>
                                    <th>Clear Opening (mm)</th>
                                    <th>Capacity (tones)</th>
                                </tr>
                                <tr>
                                    <td>300 x 300</td>
                                    <td>250 x 250</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>375 x 375</td>
                                    <td>300 x 300</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>450 x 450</td>
                                    <td>400 x 400</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>535 x 535</td>
                                    <td>450 x 450</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>600 x 600</td>
                                    <td>510 x 510</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>600 x 450</td>
                                    <td>510 x 350</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>710 x 710</td>
                                    <td>610 x 610</td>
                                    <td>2.5</td>
                                </tr>
                                
                                    
                            </tbody>
                        </table>
                        <h4 class="text-warning">Advantages of IRON</h4>
                        <ul class="text-capitalize">
                            <li>weather resistance</li>
                            <li>low maintainance</li>
                            <li>cost effective</li>
                            <li>high life span</li>
                            <li>easy handling</li>
                            <li>high composition restitant</li>
                            <li>idea for household use</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">description</h3>
                            <p class="text-6 text-muted text-justify" style="line-height: 2">Supported by the leading vendors, our organization is able to offer premium quality MS Manhole Cover. High in strength and having excess load bearing capacity, these covers are ideal substitute for the heavy iron covers. Available in different sizes, these are widely used on roads, foot paths, residential areas and more. Our vendors ensure on making use of premium grade raw material for manufacturing these covers.</p>
                        </div>
                        
                    </div>
                    
            </div>
            
               
            
            
        </div>
        </div>

    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
