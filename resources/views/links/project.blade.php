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
                            <h1 class="text-1 font-weight-medium mt-3 text-capitalize">our projects </h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row pt-5">
                    <div class="col">
                        <div class="text-center row pb-5">
                            <div class="col-md-4 img-logo">
                                <img src="{{url('/img/slider/adani.png')}}" class="img-fluid">
                            </div>
                            <div class="col-md-4 img-logo">
                                <img src="{{url('/img/slider/GCS.jpg')}}" class="img-fluid">
                            </div>
                            <div class="col-md-4 img-logo">
                                <img src="{{url('/img/slider/constructions.png')}}" class="img-fluid">
                            </div>
                        </div>

                        <div class="text-center row pb-5">
                            <div class="col-md-6 img-logo">
                                <img src="{{url('/img/slider/realty.png')}}" class="img-fluid">
                            </div>
                            <div class="col-md-6 img-logo">
                                <img src="{{url('/img/slider/shahlon.png')}}" class="img-fluid">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('section.footer')
@include('layouts.scripts')
</body>
</html>