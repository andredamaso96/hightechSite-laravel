
@extends('layout')
@section('content')

  <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">

        <center>
          <h2 class="mb-3">Cabines de Descontaminação</h2>
          <p>Construimos cabines de descontaminação com os melhores materiais e de acordo com as normas em vigor.</p>
          
        </center>

				<div class="row d-flex align-items-stretch">
          <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">

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
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url({{asset('frontend/images/Cabine-descontaminacao.jpg')}});"></div>
					</div>
					
				</div>
      </div>
      
    </section>
    

 

    <section class="ftco-intro ftco-no-pb img" >
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Necessita de informação ou fazer uma encomenda?</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos</a></p>
          </div>
        </div>	
    	</div>
    </section>

    <section class="ftco-section ">
			<div class="container">

        <div class="row d-flex align-items-stretch">
					<div class="col-md-6 ">

            <img src="{{asset('frontend/images/cabine3.jpg')}}" width="100%">
					</div>
					<div class="col-md-6">

    
              <img src="{{asset('frontend/images/cabine2.jpg')}}" width="100%">
              
				
				</div>

			
      </div>
      
    </section>

    @endsection