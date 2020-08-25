<nav class="navbar navbar-expand-lg navbar-dark p-0 font-weight-bold sticky-top product-color shadow">
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
              <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link" href="{{('about')}}">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{('projects')}}">OUR PROJECTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{('contact')}}">CONTACT US</a>
            </li>
          </ul>
          
          <ul class="navbar-nav ml-auto text-center" style="flex-direction: row!important; justify-content: center">
            <li><a href="tel:xxxxxxxxxx" class="link-hover-style mr-2"><i class="fa fa-phone mr-1"></i> 08048722507</a></li>
            <li><a href="tel:xxxxxxxxxx" class="link-hover-style"><i class="fab fa-facebook"></i></a></li>
            <li><a href="tel:xxxxxxxxxx" class="link-hover-style"><i class="fab fa-twitter mr-1"></i></a></li>
            <li><a href="tel:xxxxxxxxxx" class="link-hover-style"><i class="fab fa-linkedin mr-1"></i></a></li>
          </ul>
        
        </div>
    </div>
</nav>