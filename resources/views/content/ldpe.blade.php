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
                            <h1 class="text-1 font-weight-medium mt-3">LOW-DENSITTY POLYETHYLENE (LDPE) Cover</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pt-5 pb-4">
                <div class="row pb-4 mb-2">
                    <div class="col-md-4 mb-5 pb-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="{{url('/img/ldpe/1.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/ldpe/2.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/ldpe/3.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/ldpe/4.png')}}" class="img-fluid"></div>
                              <div class="swiper-slide"><img src="{{url('/img/ldpe/5.png')}}" class="img-fluid"></div>
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">product details</h3>
                        </div>
                        <table class="table text-center border shadow">
                            <tbody>
                                <tr class="product-nav">
                                    
                                    <th colspan="2">Frame Size</th>
                                    <th colspan="2">Clear Opening</th>
                                    <th>Wt/Piece</th>
                                </tr>
                                <tr class="product-nav">
                                    <th>Inch</th>
                                    <th>MM</th>
                                    <th>Inch</th>
                                    <th>MM</th>
                                    <th>kg</th>
                                </tr>
                                <tr>
                                    <td>21 x 21</td>
                                    <td>535 x 535</td>
                                    <td>18 x 18</td>
                                    <td>450 x 450</td>
                                    <td>6 x 6.5</td>
                                </tr>
                                <tr>
                                    <td>24 x 24</td>
                                    <td>600 x 600</td>
                                    <td>21 x 21</td>
                                    <td>535 x 535</td>
                                    <td>8 x 8.5</td>
                                </tr>
                                <tr>
                                    <td>24 x 18</td>
                                    <td>600 x 450</td>
                                    <td>22 x 16</td>
                                    <td>558 x 406</td>
                                    <td>7 x 7.5</td>
                                </tr>
                                <tr>
                                    <td>27 x 27</td>
                                    <td>685 x 685</td>
                                    <td>24 x 24</td>
                                    <td>600 x 600</td>
                                    <td>10.5 x 12</td>
                                </tr>  
                            </tbody>
                        </table>   
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <h3 class="text-capitalize text-7">description</h3>
                            <p class="text-6 text-muted text-justify" style="line-height: 2">LOW-DENSITTY POLYETHYLENE (LDPE) thermalplastic made from the monomer ethylene. despite competition from more modern polymers, LDPE continues to be an important plastic grade. in 2013 the worldwide LDPE market reached a volume of about US$33 billion. it can withstand temperatures of 80°C continuosly and 90°C (194°F) for short time.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-warning">Advantages of LDPE</h4>
                            <ul class="text-capitalize">
                                <li>Avilable in multicolours : {white, pink, milletary green, black}</li>
                                <li>upto 6 to 7 ton load bearing capacity</li>
                                <li>lifetime warranty</li>
                                <li>full replacement guarantee</li>
                                <li>unbreakable</li>
                            </ul>
                    </div>
                </div>    
        </div>
    </div>

    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
