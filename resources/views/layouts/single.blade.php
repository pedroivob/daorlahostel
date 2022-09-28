<!DOCTYPE html>
<html lang="en">
<head>
<title>Da Orla Pampulha Hostel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Hostel na pampulha Belo Horizonte - MG">
<link rel="icon" type="image/x-icon" href="/major/images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/major/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="/major/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/major/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/major/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/major/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="/major/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/major/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/major/styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#">
								<img src="/major/images/logo.png" class="img-rounded" >
							</a>
						</div>  <ul class="navbar-nav ">
                    <li class="nav-item dropdown  text-primary">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @auth {{ Auth::user()->name }} @endauth<i class="material-icons"
                                style="font-size: 48px; ">person</i>
                            <p class="d-lg-none d-md-block">
                                Account
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a href="#" class="dropdown-item bg-dark text-white"> @auth {{ Auth::user()->name }}
                                @endauth</a>
                            <a class="dropdown-item" href="/showme">Meu perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <form id="logout-form2" action="/dashboard/logout" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                </ul>
						<nav class="main_nav">

						</nav>
						<div class="header_extra d-flex flex-row align-items-center justify-content-start ml-auto">
							<div class="phone d-flex flex-row align-items-center justify-content-start"><i class="fa fa-phone" aria-hidden="true"></i><span>31 3646-4303</span></div>

						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->



    @yield('content')

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=553186369100&text=Ol%C3%A1.%20%20Gostaria%20de%20fazer%20uma%20reserva.%20Poderia%20me%20ajudar?" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
	  z-index:1000;" target="_blank">
	<i style="margin-top:16px" class="fa fa-whatsapp"></i>
	</a>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-md-row flex-column align-items-center align-items-start justify-content-start">

						<div class="footer_logo">

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="/major/js/jquery-3.2.1.min.js"></script>
<script src="/major/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/major/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/major/plugins/greensock/TweenMax.min.js"></script>
<script src="/major/plugins/greensock/TimelineMax.min.js"></script>
<script src="/major/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/major/plugins/greensock/animation.gsap.min.js"></script>
<script src="/major/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/major/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/major/plugins/easing/easing.js"></script>
<script src="/major/plugins/progressbar/progressbar.min.js"></script>
<script src="/major/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="/major/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/major/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/major/js/custom.js"></script>
</body>
</html>
