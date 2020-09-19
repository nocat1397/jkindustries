<!DOCTYPE html>
<html lang="en">
    @include('layouts.layout')
<body>
    <div class="header-1">
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
                    <li><a href="tel:xxxxxxxxxx" class="link-style mr-2"><i class="fa fa-phone mr-1"> 08048722507</i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-twitter mr-1"></i></a></li>
                    <li><a href="tel:xxxxxxxxxx" class="link-style"><i class="fab fa-linkedin mr-1"></i></a></li>
                  </ul>
                </div>
            </div>
        </nav>
        
        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold text-capitalize m-0 text-warning">about us</h1>
                <p class="text-capitalize p-0 text-light">a perfect choice for MANHOLE cover products</p>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="row text-center pb-5">
                    <div class="col">
                        <div class="overflow-hidden mb-3 text-justify">
                            <p class="drop-caps">JK Trading Co. & Manufacturing is a distinguished Manufacturer of a wide array of MS Manhole Cover, SS Manhole Cover, Zinc Manhole Cover etc. Our range is available in various sizes, and specifications as per the client’s requirements. We have successfully created a niche in the market in last few months by bringing forth a matchless range of products. We work as a team in understanding the need of the customers, keeping each other’s business interest intact so that we could deliver products at the right time and at the most competitive rates</p>
                            <p>Established in the year 2016, We guided by Mr. Karan Gadhvi, with his visionary ideas and zeal to strive for a remarkable position, have become a name which is distinguished for offering a gamut of innovative products. Owing to his excellent management skills, in-depth knowledge and vast experience of this domain, we have been able to cater to the precise needs of our valuable customers in the most efficient manner.</p>
                        </div>
                    </div>
                    {{-- <div class="col-sm-8 col-md-7 col-lg-5">
                        <img class="img-fluid position-relative shadow-lg" src="{{url('/img/fifth.jpg')}}">
                    </div> --}}
                    
                </div>
            </div>
            

        </div>
        
    </div>
    <div class="container">
        <div class="col">
            
            <table>
                <tbody>
                    
                    <tr>
                        <th class="product-nav" colspan="3">Basic information</th>
                    </tr>
                    <tr>
                        <td class="text-muted">Nature of Business</td>
                        <td>:</td>
                        <td>Manufacturer</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Additional Business</td>
                        <td>:</td>
                        <td>Supplier
                            , Exporter</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Company CEO</td>
                        <td>:</td>
                        <td>Karanbhai Gadhvi</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Registered Address</td>
                        <td>:</td>
                        <td>92, Shreenath Estate, Opposite Nana Chiloda Railway Crossing Road, Ahmedabad- 380001, Gujarat, India</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Total Number of Employees</td>
                        <td>:</td>
                        <td>11 to 25 People</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Year of Establishment</td>
                        <td>:</td>
                        <td>2016</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Legal Status of Firm</td>
                        <td>:</td>
                        <td>Individual - Proprietor</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Annual Turnover</td>
                        <td>:</td>
                        <td>Rs. 2 - 5 Crore</td>
                    </tr>
                    <tr>
                        <th class="product-nav" colspan="3">Statutory Profile</th> 
                    </tr>
                    <tr>
                        <td class="text-muted">DGFT / IE Code</td>
                        <td>:</td>
                        <td>AGMPK6979L</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Banker</td>
                        <td>:</td>
                        <td>AXIS BANK</td>
                    </tr>
                    <tr>
                        <td class="text-muted">GST No.</td>
                        <td>:</td>
                        <td>24AGMPK6979L1ZK</td>
                    </tr>
                    <tr>
                        <th class="product-nav" colspan="3">Packaging/Payment and Shipment Details</th> 
                    </tr>
                    <tr>
                        <td class="text-muted">Payment Mode</td>
                        <td>:</td>
                        <td>Cash
                            , Credit Card
                            , Cheque
                            , DD
                            , Online</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Shipment Mode</td>
                        <td>:</td>
                        <td>By Road</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <br>
        <div class="col">
            <h3>Why us?</h3>
            <p class="text-muted">We maintain teamwork, value each person’s participation and help to gain customer’s confidence by giving customized solutions with the host of products. The range given by us is procured from the accredited vendors of the industry.</p>
        </div>
        
        <div class="col">
            <h4>Some of our competitive advantages are:</h4>
            <ul class="text-capitalize">
                <li>Wide range of products</li>
                <li>Client satisfaction</li>
                <li>Experienced and dedicated task force</li>
                <li>Efficient supply-management system for timely delivery</li>
                <li>Transparent system and wide distribution network</li>
                <li>Easy payment modes</li>
            </ul>
        </div>
        <br>
        <div class="col">
            <h4>ISO Certification</h4>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{url('/img/iso.png')}}" class="img-fluid">
                        </div>

                    </div>
                    
                </div>
                <div class="col" style="vertical-align: middle">
                    
                </div>
            </div>
        </div>
        <br>
        <div class="col">
            <h3>Our Team</h3>
            <p class="text-muted">We have appointed a talented group of professionals. Our experts work hard to know the requirements of patrons. Together with this, our team members are in constant dialogue with the clients that help them cater to their exact needs.</p>
        </div>
        
        <div class="col">
            <h4>Some of the professionals working with us are as follows:</h4>
            <ul class="text-capitalize">
                <li>Engineers</li>
                <li>Quality Analysts</li>
                <li>Technicians </li>
                <li>Skilled and Semi-Skilled Workforce</li>
                <li>Sales and Marketing Executives</li>

            </ul>
        </div>
    </div>
        

       


    @include('section.footer')
    @include('layouts.scripts')
</body>
</html>
