@extends('layout')
@section('content')
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url({{asset('frontend/images/slide1.jpg')}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">Hightech-AIRER</span>
            <h1 class="mb-4">A MELHOR PARCEIRA DO SEU NEGÓCIO</h1>
            <p><a href="{{URL::to('/about')}}" class="btn btn-primary px-4 py-3 mt-3">Saiba Mais</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url({{asset('frontend/images/slide3.jpg')}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">Hightech-AIRER</span>
            <h1 class="mb-4">VISITE A NOSSA LOJA ONLINE HT-MARKT</h1>
            <p><a href="https://www.htmarkt.hightech-airer.pt/" class="btn btn-primary px-4 py-3 mt-3">Visitar</a></p>
          </div>
        </div>
        </div>
      </div>
	</section>
	
	<section class="department">
		<div class="container">
  
		  <div class="row">
  
  
			<div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
			  <a href="http://www.hightech-airer.pt/compressors/">
			  <div class="icon-box icon-box-blue">
				<!-- <div class="icon"><i class="bx bx-world"></i></div>
				<h4 class="title"><a href="">Nemo Enim</a></h4> -->
				<img src="{{asset('frontend/images/compressor.png')}}" class="img-fluid" alt="">
				<p></p>
				<p class="description">Comercializamos e executamos a manutenção a todos os equipamentos de ar comprimido e vácuo e respetivas linhas de transporte.</p>
			  </div>
			  </a>
			</div>
  
			<div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
			  <a href="http://www.hightech-airer.pt/technologies/">
			  <div class="icon-box icon-box-pink">
				<img src="{{asset('frontend/images/technologies.png')}}" class="img-fluid" alt="">
				<!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
				<!-- <h4 class="title"><a href="">Lorem Ipsum</a></h4> -->
				<p></p>
				<p class="description">Criada para o setor da construção, esta área é responsável pelas nossas construções metálicas e substituição de coberturas de amianto.</p>
			  </div>
			</a>
			</div>
  
  
			<div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
			  <a href="http://www.hightechmedical.pt/">
			  <div class="icon-box icon-box-green">
				
				<!-- <div class="icon"><i class="bx bx-tachometer"></i></div>
				<h4 class="title"><a href="">Magni Dolores</a></h4> -->
				<img src="{{asset('frontend/images/medical.png')}}" class="img-fluid" alt="">
				<p></p>
				<p class="description">O nosso departamento médico, onde tentamos todos os dias trazer inovação ao nível da mobilidade reduzida e da área hospitalar.</p>
			 
			  </div>
			</a>
			</div>
  
  
		  </div>
  
		</div>
	  </section><!-- End Services Section -->
  
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url({{asset('frontend/images/img1.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">Obtenha Sempre a Melhor Orientação</h2>
          </div>
        </div>	
    	</div>
    </section>

    <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url({{asset('frontend/images/rotorsmainsite.jpg')}});"></div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<span class="subheading">Grupo hightech-airer</span>
							<h2>A coisa mais inteligente a fazer com o seu negócio</h2>
						</div>
						<p>Ar Comprimido e vácuo, remoção de fibrocimento, energias renováveis e equipamentos médicos e de diagnóstico</p>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Nossas Instalações</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Onde Intervimos</a>
							  </li>
							  <!-- <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> o</a>
							  </li> -->
							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
							  	<p>Encontramo-nos em instalações próprias com mais de 2000 m² de área coberta e dispomos 
									  de todo o equipamento necessário para a instalação e manutenção dos seus equipamentos.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	<p>Da área industrial à área hospitalar, passando pela indústria aeronáutica e alimentar, 
									  atuamos nos mais variados setores de modo a sermos a solução que você precisa.</p>
							  </div>
							  <!-- <div class="tab-pane container p-0 fade" id="home3">
							  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							  </div> -->
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-4">Porque escolher-nos?</h2>
            <p>Com vastos anos de experiência, dispomos do “know-how” necessário e de colaboradores especializados para as suas necessidades.</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"> Fornecimento e manutenção de equipamentos de
								ar comprimido</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"> Consultoria
								Planeamento e execução de linhas de ar comprimido e vácuo</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"> Energias Renováveis
								Projeto e instalação de sistemas solares
								térmicos e fotovoltaicos</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"> Remoção/Aplicação de coberturas de fibrocimento/cabine de descontaminação</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"> HT-MARKT</a>
						  </li>
						  <!-- <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span> HT-MARKT</a>
						  </li> -->
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url({{asset('frontend/images/service1.jpg')}});"></div>
						  	<h3><a href="#">Fornecimento e manutenção de equipamentos de
								ar comprimido</a></h3>
						  	<p>Como distribuidores da Gardner-Denver, a qualidade é algo que a Hightech não descuida. Fornecemos e executamos a manutenção a todo o tipo de equipamentos, como os mais variados tipos de compressores, 
								  secadores, filtros e acessórios, com a garantia de qualidade destas marcas.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url({{asset('frontend/images/service2.png')}});"></div>
						  	<h3><a href="#">Consultoria Planeamento e execução de linhas de ar comprimido e vácuo</a></h3>
						  	<p>Com vários anos de experiência e a AIGNEP como fornecedor, todas as linhas de ar comprimido e vácuo, sejam elas de natureza doméstica ou empresarial, ficarão em boas mãos. 
								  A AIGNEP comercializa dos melhores acessórios com uma qualidade imbatível, para que não existam fugas ou defeitos.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url({{asset('frontend/images/service3.jpg')}});"></div>
						  	<h3><a href="#">Energias Renováveis
								Projeto e instalação de sistemas solares
								térmicos e fotovoltaicos</a></h3>
						  	<p>Inovando neste campo, a Hightech oferece um serviço com qualidade e certezas de satisfação. Desde painéis solares e fotovoltaicos à energia geotérmica, 
								  planeamos e executamos projetos adequados ao seu local. As instalações da Hightech já são totalmente amigas do ambiente, o que espera?</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url({{asset('frontend/images/service4.jpg')}});"></div>
						  	<h3><a href="#">Remoção/Aplicação de coberturas de fibrocimento/cabine de descontaminação</a></h3>
						  	<p>A Hightech é o seu parceiro de eleição neste sector. Removemos todo o tipo de coberturas em fibrocimento aplicando novas utilizando materiais de alta qualidade, 
								  sempre respeitando as normativas em vigor. Construímos cabines de descontaminação de amianto. Não adie a remoção.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url({{asset('frontend/images/htmarktpage.png')}});"></div>
						  	<h3><a href="https://www.htmarkt.hightech-airer.pt/">HT-MARKT</a></h3>
						  	<p>Face à evolução do mercado e tecnologias, criámos a nossa loja online,
							  de modo a facilitar a consulta ao nosso cliente</p>
						  </div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Venha Fazer Parte do Nosso Grupo</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{% url 'oportunity')}}" class="btn btn-secondary py-3 px-4">Ver Oportunidades</a></p>
          </div>
        </div>	
    	</div>
    </section>

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">

						<ul>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca1.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca2.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca3.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca4.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca5.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('frontend/images/marca6.png')}}"></a></li>
				
						  </ul>
						
						<!-- Brands Slider -->

						<!-- <div class="brands_slider owl-carousel owl-theme ">

							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/marca1.png" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/marca2.png" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/marca3.png" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/marca4.png" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/marca5.png" alt=""></div></div>


						</div> -->
						
						<!-- Brands Slider Navigation -->
						<!-- <div class="brands_nav brands_prev"><i class="fa fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fa fa-chevron-right"></i></div> -->

					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection