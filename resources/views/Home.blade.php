<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/variable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/web.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/mediaQuery.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Swiper.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.css')}}">
<title>De-Skcy </title>
</head>
<body>
<div class="containment">
<main  class="rooted-content">
<header class="rooted-content-header">
<ul class="header-ul">
<li class="logo">DE-SKCY<span id="logoDot">.</span></li>
  <li class="header-nav">
    <ul class="header-nav-ul">
    <li class="Home"><a href="#Home">Home</a></li>
    <li class="About"><a href="#About-Us">About Us</a></li>
    <li class="Services"><a href="#Services">Services</a></li>
    <li class="Location"><a href="#Location">Location</a></li>
    <li class="Visions"><a href="#Contact-Us"> Contact Us</a></li>
    </ul>
  </li>
<li class="header-nav-two">
  <ul class="header-nav-ul-two">
  <li class="header-nav-ul-two-li">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" >
  <use xlink:href="#fb-icon"></use>
  </svg>
  </li>
  <li class="header-nav-ul-two-li">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
  <use xlink:href="#linked-icon"></use>
  </svg>
  </li>
  <li class="header-nav-ul-two-li">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" fill="#D1D5E4">
  <use xlink:href="#whatsapp-icon"></use>
  </svg>

  </li>

  <li class="theme-mode">
  <select class="select__input" id="selTheme">
  <option value="auto">auto</option>
  <option value="light">light</option>
  <option value="dark">dark</option>
  </select>
  </li>
  </ul>
</li>
</ul>

<!-- HEADER LAST -->

<!-- MOBILE HEADER -->
  <div class="mobile-header-content">
    <ul>
    <li class="logo">DE-SKCY<span id="logoDot">.</span></li>
    <li>
    <span class="navOpen" onclick="openNav()">☰</span>
    <div id="mySidenav" class="sidenav">
    <ul id="mobile-sidenav-ul">
    <li>
    <span class="closebtn" onclick="closeNav()">
    <img src="{{asset('assets/img/close.svg')}}" style="width: 30px; height: 30px">
    </span>
    </li>
    <li><a href="#">Home</a></li>
    <li><a href="#About-Us">About</a></li>
    <li><a href="#Services">Services</a></li>
    <li><a href="#Location">Location</a></li>
    <li><a  href="#Contact-Us">Vision</a></li>
    </ul>
    </div>
    </li>
    </ul>
  </div>
<!--END OF MOBILE HEADER -->


</header>
<!--  <section class="root-section">
  <div class="swiper-container swiper-container-vertical">
    <div class="swiper-wrapper">
      <div class="swiper-slide slider-img">
        <img src="{{asset('./assets/img/create-account-office.jpeg')}}" 
        draggable="false">
        <div class="img-description">
         <h4> We Offer Micro loans</h4>
        </div>
      </div>
      <div class="swiper-slide slider-img">
        <img src="{{asset('./assets/img/login-office.jpeg')}}" draggable="false">
        <div class="img-description">
         <h4 class="text-responsive"> Individaul Loans</h4>
        </div>

      </div>
      <div class="swiper-slide slider-img">
        <img src="{{asset('./assets/img/create-account-office-dark.jpeg')}}" draggable="false">
        <div class="img-description">
         <h4 class="text-responsive">Savings Facilities</h4>
        </div>
      </div>
      <div class="swiper-slide slider-img">
        <img src="{{asset('./assets/img/login-office.jpeg')}}" draggable="false">
        <div class="img-description">
         <h4 class="text-responsive">Market Women Empowerment & Training Programs</h4>
        </div>
      </div>
      <div class="swiper-slide slider-img">
        <img src="{{asset('./assets/img/login-office.jpeg')}}" draggable="false">
         <div class="img-description">
         <h4 class="text-responsive">Small Businness Loans</h4>
        </div>
      </div>
    </div>
  </div>
</section> -->
</main>
</div>
</body>
</html>
