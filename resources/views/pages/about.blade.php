@extends('layout')
@section('PageTitle', 'Sobre Nós - Hightech-AIRER')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/slide3.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Sobre Nós</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Início <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre Nós <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Sobre Nós</span>
            <h2 class="mb-4">As melhores soluções para si</h2>
            <p>Com mais de dez anos de experiência, e um portefólio invejável de clientes satisfeitos, a Hightech-AIRER, 
              localizada na Moita, Setúbal, é uma empresa especializada em várias soluções industriais e domésticas.</p>
          </div>
        </div>
				<div class="row d-flex align-items-stretch">
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url({{asset('frontend/images/rotorsmainsite.jpg')}});"></div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<span class="subheading">Grupo hightech-airer</span>
							<h2>A coisa mais inteligente a fazer com o seu negócio</h2>
						</div>
						<p>Entre algumas, destaca-se toda a área do ar comprimido, com compressores, secadores, filtros e acessórios.
              Sendo representantes oficiais da Gardner-Denver, Comprag e da SMC garantimos os melhores equipamentos e acessórios, 
              a um preço igualmente atrativo.
              Na construção civil e industrial, removemos coberturas de fibrocimento e aplicamos novas, 
              usando os mais avançados materiais e as mais rígidas normas de segurança, sempre de acordo com os decretos-lei em
               vigor.</p>
               <p>Na área da medicina e reabilitação, executamos todo o tipo de assistência técnica e manutenção a equipamentos médicos e de terapia, assim como apostamos na mobilidade.</p>
                <p>De momento estamos a testar uma tecnologia aplicada em cadeiras de rodas convencionais, fazendo das mesmas elétricas e ao mesmo tempo desmontáveis e transportáveis num carro.</p>
                <p>Somos igualmente especializados em energias renováveis, tais como painéis solares e fotovoltaicos, aplicações LED, energia geotérmica, fazendo a aplicação em infraestruturas e remodelações.</p>
				
					</div>
				</div>
      </div>
      
    </section>

    
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <img src="{{asset('frontend/images/evolucao.png')}}" class="img-fluid" alt="" style="width: 100%;">

      </div>
    </section>

    
    @endsection