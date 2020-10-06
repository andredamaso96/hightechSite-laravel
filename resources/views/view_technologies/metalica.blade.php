@extends('homeTechnologies')
@section('technologies_content')


  
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-4">Montagem de estruturas metálicas</h2>
            
          </div>
		</div>
		
		<div class="row d-flex align-items-stretch">
			<div class="col-md-9 wrap-about ftco-animate py-md-5 pl-md-5">
			  <div class="heading-section mb-4">
				<span class="subheading">Estruturas metálicas personalizadas
				</span>
			  </div>
			  
			  <h5>Projectamos e construímos estruturas metálicas.
				Seja para substituir material existente danificado, ou criar 
				algo especifico para as suas necessidades.</h5>

				<ul id="colunas">
					<li><h6 style="color: black;"><i class="fa fa-rocket" style="color:#dd3333;"></i>	Montagem rápida</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-industry" style="color:#dd3333;"></i>	Pré-fabricação</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-inbox" style="color:#dd3333;"></i>	Mobilidade</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-globe" style="color:#dd3333;"></i>	Sustentável</h6></li>
				  </ul>  

			  
			</div>
			<div class="col-md-3 wrap-about align-items-stretch d-flex">
	  
						  <img src="{{asset('asset_technologies/images/trabalhador.jpg')}}" width="100%" style="border-radius: 8px;">
			</div>
			
		  </div>
		</div>
		
      
    </section>

	<section class="department " id="section-counter">
			<div class="container consult-wrap">


				<div class="row d-flex align-items-stretch">
          <div class="col-md-3 wrap-about align-items-stretch d-flex">
         
            <img src="{{asset('asset_technologies/images/estrutura.jpg')}}" width="100%" height="90%" style="border-radius: 8px;">
					</div>
          <div class="col-md-9 wrap-about ftco-animate py-md-5 pl-md-5">
            <div class="heading-section mb-4">
							<span class="subheading" style="text-align: right;">Reparação de estruturas existentes</span>
			</div>
			
			<h5 style="text-align: right;">Projectamos e construímos estruturas metálicas.
				Seja para substituir material existente danificado, ou criar 
				algo especifico para as suas necessidades.</h5>

				<ul id="colunas">
					<li><h6 style="color: black;"><i class="fa fa-rocket" style="color:#dd3333;"></i>	Montagem rápida</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-industry" style="color:#dd3333;"></i>	Pré-fabricação</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-inbox" style="color:#dd3333;"></i>	Mobilidade</h6></li>
					<li><h6 style="color: black;"><i class="fa fa-globe" style="color:#dd3333;"></i>	Sustentável</h6></li>
				  </ul>  

            
					</div>
				
					
				</div>
      </div>
      
    </section>

			
<section class="ftco-intro ftco-no-pb img">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Tem alguma dúvida?</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
          </div>
        </div>	
    	</div>
  </section>


@endsection