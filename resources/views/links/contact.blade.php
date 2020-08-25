<!DOCTYPE html>
<html lang="en">
    @include('layouts.layout')
    <style>
        .list.list-icons.list-icons-style-3 li {
            padding-top: 5px;
            
        }
        .top-6 {
            color: #f3cc57;
            top: 6px!important;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            text-align: center;
            padding: 5px;
            font-size: 0.8em;
            line-height: 1.3;
            background-color: black;
        }
    </style>
<body>
    <header class="header-2">
        <nav class="navbar navbar-expand-lg navbar-dark p-0 font-weight-bold">
            <div class="container-fluid">
                <a class="navbar-brand ml-5" href="#">
                    <img src="{{url('img/logo.png')}}" height="100" width="120">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                      <a class="nav-link-style" href="{{('/')}}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link-style dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PRODUCTS
                      </a>
                      <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a href="{{url('frp')}}">FRP Cover</a>
                        <a href="{{url('ldpe')}}">LDPE Cover</a>
                        <a href="{{url('pvc')}}">PVC Cover</a>
                        <a href="{{url('msgi')}}">M.S.G.I Chequered Cover</a>
                        <a href="{{url('manhole')}}">IRON MANHOLE Cover</a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-style" href="{{('about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-style" href="{{('projects')}}">OUR PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-style" href="{{('contact')}}">CONTACT US</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto text-center" style="flex-direction: row!important; justify-content: center">
                    <li><a href="tel:08048722507" class="link-style mr-2"><i class="fa fa-phone mr-1"> 08048722507</i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-twitter mr-1"></i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-linkedin mr-1"></i></a></li>
                  </ul>
                </div>
            </div>
        </nav>
        
        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold text-capitalize m-0 text-warning">contact us</h1>
            </div>
        </section>
    </header>
    <div class="container py-5">
        <div class="row mb-43">
            <div class="col-md-8 pt-2">
              {!! Form::open(['method'=>'post','action'=>'TableController@store']) !!}
              <div class="form-row">
                <div class="form-group col-md-6">
              
                  {!! Form::label('name', 'Full Name*') !!}
                  {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-6">
                  {!! Form::label('name', 'Email*') !!}
                  {!! Form::text('email', null, ['class'=>'form-control']) !!}
                </div>
              </div>
                <div class="form-group">
                  {!! Form::label('name', 'Subject') !!}
                  {!! Form::text('subject', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                  {!! Form::label('name', 'Message*') !!}
                  {!! Form::textarea('message', null, ['rows' => 4, 'cols' => 54, 'class'=>'form-control']) !!}
                </div>
          <div class="form-group">
              {!! Form::submit('Send Message', ['class'=>'btn btn-warning btn-modern shadow']) !!}
          </div>    
          {!! Form::close() !!}
                {{-- <form class=" p-2" method="post" action="/submit">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <strong for="inputEmail4">Full Name*</strong>
                        <input type="text" name="name" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                        <strong for="inputPassword4">Email Address*</strong>
                        <input type="email" name="email" class="form-control" id="inputPassword4">
                      </div>
                    </div>
                    <div class="form-group">
                      <strong for="inputAddress">Subject</strong>
                      <input type="text" name="subject" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                      <strong for="inputAddress2">Message*</strong>
                      <textarea class="form-control" name="message" rows="5" id="inputAddress2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-modern">Send message</button>
                  </form> --}}
            </div>
            <div class="col-lg-4">
                <h4 class="pt-5">Our<strong> Office</strong></h4>
                <br>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <li class="text-muted text-justify"><i class="fas fa-map-marker-alt top-6"></i><strong> Address :</strong> 92, Shreenath Industrial Estate, Opposite Nana Chiloda Railway Crossing Road, Near By S. P. RIng Road, Ranasan, GIDC Naroda, Ahmedabad-380001, Gujarat, India</li>
                    <br>
                    <li class="text-muted"><i class="fas fa-phone top-6"></i><strong> Phone :</strong> 08048722507</li>
                    <br>
                    <li class="text-muted"><i class="fas fa-envelope top-6"></i><strong> Email :</strong><a href="mailto:jkindustries@gmail.com"> jkindustries@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
            
        

       


    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
