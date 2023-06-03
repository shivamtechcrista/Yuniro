<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
 <title>Yuniro</title>
  <link rel="icon" type="image/png" href="img/favicon.ico">
   <meta name="description" content=" ">
  <meta name="keywords" content=" ">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/style.css">

   
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-md-3">
                    <p class="font-600"> Welcome to Yuniro</p>
                   
                </div>
                <div class="col-lg-9 col-md-9 social-icons social-icon">
				  <p  class="font-400 top-nav-gap"> <i class='fa fa-phone'></i> 06.21802375</p>| 
				 <p  class="font-400 top-nav-gap"> <i class='fa fa-envelope'></i> info@yuniro.it</p>|
                  
				<span class="font-600 top-nav-gap mobile-hidden">FOLLOW US</span>
                    <a href="#"><i class='fa fa-facebook'></i></a>
                    <a href="#"><i class='fa fa-twitter'></i></a>
                    <a href="#"><i class='fa fa-instagram'></i></a>
                    <a href="#"><i class='fa fa-pinterest'></i></a>
                </div> 
				
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="img/Logo.svg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $route = \Request::route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $route == 'dashboard' ? 'active': '' }} " href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
					                    <li class="nav-item">
                        <a class="nav-link" href="#">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array($route , ['services','services-department']) ? 'active': '' }} " href="{{ route('services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>