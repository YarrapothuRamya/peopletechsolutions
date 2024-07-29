<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<div>
    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                    <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                </div>
            </div> -->
            <!-- <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->

   
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{route('index')}}" class="navbar-brand p-0" style="background-color:  #16dbc1 !important;">
            <!-- <h1 class="m-0 text-uppercase text-primary">
                <img class="img-fluid" src="img/peopletechlogo.png" alt="">
                <i class="far fa-smile text-primary me-2"></i>consult</h1> -->

                <img class="img-fluid p-2" src="img/peopletechlogo.png" alt="" width="150" height="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="{{route('index')}}" class="nav-item nav-link ">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link ">About</a>
                <!-- <a href="service.html" class="nav-item nav-link active">Service</a> -->
                
                <div class="nav-item dropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle active" href="{{route('service')}}" data-bs-toggle="dropdown">  Service  </a>
                    <ul class="dropdown-menu">
                      
                      <li> <a class="dropdown-item" href="{{route('service')}}"> Enterprise Solutions &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('workday')}}">Workday</a></li>
                          <li><a class="dropdown-item" href="{{route('salesforce')}}">Salesforce</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('peoplesoft')}}">PeopleSoft</a></li>
                          <li><a class="dropdown-item" href="{{route('mulesoft')}}">MuleSoft</a></li>
                          <li><a class="dropdown-item" href="{{route('ukgkronos')}}">UKG Kronos</a></li>
                          <li><a class="dropdown-item" href="{{route('uipath')}}">UI Path</a></li>
                        </ul>
                      </li>
                      <li> <a class="dropdown-item" href="{{route('clouddata')}}"> Cloud and Data &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('infrastructure')}}">Infrastructure</a></li>
                          <li><a class="dropdown-item" href="{{route('migration')}}">Migration</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('modernization')}}">Modernization</a></li>
                          <li><a class="dropdown-item" href="{{route('analytics')}}">Analytics</a></li>
                          <li><a class="dropdown-item" href="{{route('ai')}}">AI</a></li>
                          <li><a class="dropdown-item" href="{{route('aienablement')}}">AI-Enablement</a></li>
                          <li><a class="dropdown-item" href="{{route('iot')}}">IOT</a></li>
                        </ul>
                      </li>
                      <li> <a class="dropdown-item" href="#"> Product Engineering &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('humanmachineinterface')}}">Human Machine Interface</a></li>
                          <li><a class="dropdown-item" href="{{route('ux')}}">UX</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('mvpdevelopment')}}">MVP Development</a></li>
                          <li><a class="dropdown-item" href="{{route('accessibility')}}">Accessibility</a></li>
                          <li><a class="dropdown-item" href="{{route('qaandvalidation')}}">QA and Validation</a></li>
                          <li><a class="dropdown-item" href="{{route('mobile')}}">MObile</a></li>
                          
                        </ul>
                      </li>
                      
                    </ul>
                </div>
                <div class="nav-item dropdown" id="myDropdown">
                    <a class="nav-link dropdown-toggle " href="{{route('service')}}" data-bs-toggle="dropdown">  Platforms  </a>
                    <ul class="dropdown-menu">
                      
                      <li> <a class="dropdown-item" href="#"> Microsoft &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('datacenters')}}">Data centers</a></li>
                          <li><a class="dropdown-item" href="{{route('applicationdevelopment')}}">Application Development</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('cloudservices')}}">Cloud Services</a></li>
                          <li><a class="dropdown-item" href="{{route('dataplatform')}}">Data Platform</a></li>
                          <li><a class="dropdown-item" href="{{route('security')}}">Security</a></li>
                          
                        </ul>
                      </li>
                      <li> <a class="dropdown-item" href="#"> AWS &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('bigdata')}}">Big data</a></li>
                          <li><a class="dropdown-item" href="{{route('machinelearning')}}">Machine Learning</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('cloudmigration')}}">Cloud Migration</a></li>
                          <li><a class="dropdown-item" href="{{route('devopsautomation')}}">Devops Automation</a></li>
                          <li><a class="dropdown-item" href="{{route('databasemigration')}}">Database Migration</a></li>
                          <li><a class="dropdown-item" href="{{route('dataanalytics')}}">Data Analytics</a></li>
                          
                        </ul>
                      </li>
                      
                      
                    </ul>
                </div>
                  <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Quote Form</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> -->
                <a href="{{route('industries')}}" class="nav-item nav-link">Industries</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>