<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>DeScky Centre</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />


<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/LineIcons.2.0.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
<style type="text/css">
button[data-action]{
display: none;
}

</style>
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
<![endif]-->


<header class="header">

<div class="toolbar-area">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-9 col-12">
<div class="toolbar-contact">
<p><i class="lni lni-phone"></i><a href="tel:+123456789">08141625004</a></p>
<p>
<i class="lni lni-map-marker"></i>
Ajaghagi Last Bus-Stop Beside Ibukun Oluwa Filling Station
</p>
</div>
</div>
<!-- <div class="col-lg-4 col-md-3 col-12">
<div class="toolbar-sl-share">
<ul>
<li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="#"><i class="lni lni-pinterest"></i></a></li>
<li><a href="#"><i class="lni lni-youtube"></i></a></li>
</ul>
</div>
</div> -->
</div>
</div>
</div>

<div class="navbar-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand logo" href="#">
<img src="{{asset('assets/images/Dlogo.svg')}}" alt="Logo" style="width: 40px; height: 40px" />
<span style="width: 40px; height: 40px; line-height: 0.5rem">De-Scky</span>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item">
<a class="active" href="index-2.html">Home</a>
</li>
<li class="nav-item">
<a href="#">About Us</a>
</li>
<li class="nav-item"><a href="#">Services</a>
</li>

<li class="nav-item"><a href="#">Contact</a></li>
</ul>
</div>

<div class="button">
<a href="#" class="btn white-bg mouse-dir">Care From DeScky <span class="dir-part"></span></a>
</div>
</nav>

</div>
</div>

</div>

</div>

</header>

@yield('content')






<!-- FOOTER SCRIPTS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}" ></script>
<script src="{{asset('assets/js/count-up.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('assets/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('script')
<!-- END OF FOOTER SCRIPTS -->
</body>
</html>