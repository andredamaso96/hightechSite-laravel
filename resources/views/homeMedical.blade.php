<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Medical | Hightech Medical</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('asset_medical/images/icon.png')}}">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset_medical/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_medical/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset_medical/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_medical/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_medical/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('asset_medical/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('asset_medical/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset_medical/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset_medical/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('asset_medical/css/style.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	



  </head>
  <body>
	  <div class="bg-top navbar-light d-flex flex-column-reverse">
    	
		<div class="top-social-menu py-2">
			<div class="container">
				<div class="row">
				  <div class="col-lg-4">
					  <p class="social mb-0">
						  <a href="https://www.facebook.com/hightechmoita/"><i class="ion-logo-facebook"></i><span class="sr-only">Facebook</span></a>
						  <!-- <a href="#"><i class="ion-logo-twitter"></i><span class="sr-only">Twitter</span></a> -->
						  <a href="https://www.linkedin.com/in/hightech-airer-7697191b5/"><i class="ion-logo-linkedin"></i><span class="sr-only">Googleplus</span></a>
					  </p>
				  </div>
				  <div class="col-lg-8 linksite" style="text-align: right;">
					  <a href="{{URL::to('/')}}"><i class="fa fa-globe"></i>	Hightech-AIRER</a>
                      <a href="{{URL::to('/compressors')}}">Hightech Compressors</a>
					  <a href="{{URL::to('/technologies')}}">Hightech Technologies</a>
					  
					<a href="https://www.htmarkt.hightech-airer.pt/" target="_blank" rel="noopener"><i class="fa fa-shopping-cart"></i>	HT-Markt</a></li>
			
				  </div>
			  </div>
			</div>
		</div>
  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">

			<div id="logo" class="pull-left">
				<!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->
				<a class="navbar-brand" href="{{URL::to('/medical')}}" ><img src="{{asset('asset_medical/images/medical.png')}}" alt="" class="img-fluid"></a>
			</div>


			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
		</form> -->
		<!-- navbar-center -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
			
	        <ul class="navbar-nav mx-auto">
				<li class="nav-item {{ Request::is('medical') ? 'active' : '' }}"><a href="{{URL::to('/medical')}}" class="nav-link">Início</a></li>

				<li class="nav-item {{ Request::is('medical/about-medical') ? 'active' : '' }}"><a href="{{URL::to('/medical/about-medical')}}" class="nav-link">Sobre a Hightech Medical</a></li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown" href="#" data-toggle="dropdown">  Produtos</a>
					<ul class="dropdown-menu">

					<li><a class="dropdown-item" href="{{URL::to('/medical/cadeira-de-rodas')}}"> Cadeiras de rodas elétricas Hightech ®</a></li>
					 	
					</ul>
				</li>	
				

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    @yield('medical_content')


   
    <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">  
        <h4>Links usáveis</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/')}}">Início</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/about')}}">Sobre nós</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/services')}}">Serviços</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/oportunity')}}">Candidaturas</a></li>
          <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Serviços</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/compressors')}}">Hightech Compressors</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/technologies')}}">Hightech Technologies</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/medical')}}">Hightech Medical</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.htmarkt.hightech-airer.pt/" target="_blank" rel="noopener">HT-Markt</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contacte-nos</h4>
        <p>
          Rua Poeta José Gomes Ferreira,<br>
          6/8, 2860-593<br>
          Moita <br><br>
          <strong>Telefone:</strong> +351 21 444 70 20<br>
          <strong>Email:</strong> geral@hightech-airer.pt<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>Hightech-ARIER, LDA</h3>
        <p>Soluções industriais para o seu negócio.</p>
        <div class="social-links mt-3">
          <a href="https://www.linkedin.com/in/hightech-airer-7697191b5//" class="linkedin"><i class="bx ion-logo-linkedin"></i></a>
          <a href="https://www.facebook.com/hightechmoita/" class="facebook"><i class="bx ion-logo-facebook"></i></a>
          <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span> 2020, HIGHTECH-AIRER, LDA</span></strong>. Todos os Direitos Reservados
  </div>
  
</div>
</footer>
		
		
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('asset_medical/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/popper.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/aos.js')}}"></script>
  <script src="{{asset('asset_medical/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('asset_medical/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('asset_medical/js/google-map.js')}}"></script>
  <script src="{{asset('asset_medical/js/main.js')}}"></script>
  <script src="{{asset('asset_medical/js/navbar.js')}}"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  
  </body>
</html>