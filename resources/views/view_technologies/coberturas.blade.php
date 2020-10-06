@extends('homeTechnologies')
@section('technologies_content')

  
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-4">Aplicação de Coberturas</h2>
            
          </div>
		</div>
    
    <div class="row d-flex align-items-stretch">
      <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
        <div class="heading-section mb-4">
          <span class="subheading">O melhor trabalho, o melhor preço
          </span>
        </div>
        
        <h5>Já com vários anos de experiência no setor da construção,
           a Hightech é especializada na substituição e aplicação de 
           coberturas metálicas.</h5>
        
      </div>
      <div class="col-md-6 wrap-about align-items-stretch d-flex">

                    <img src="{{asset('asset_technologies/images/cob1.jpg')}}" class="img-fluid" width="100%" style="border-radius: 8px;">
      </div>
      
    </div>

         
      </div>
    
    </section>

	<section class="ftco-intro ftco-no-pb img">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Precisa de substituir a sua cobertura?</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
          </div>
        </div>	
    	</div>
  </section>
  
  <section class="ftco-section " id="section-counter">
    <div class="container consult-wrap">


      <div class="row d-flex align-items-stretch">
        <div class="col-md-4 wrap-about align-items-stretch d-flex">
       
          <img src="{{asset('asset_technologies/images/alaco.png')}}" width="240" height="230">
        </div>
        <div class="col-md-8 wrap-about ftco-animate py-md-5 pl-md-5">
          <div class="heading-section mb-4">
            <span class="subheading" style="text-align: right;">Os melhores materiais, a melhor qualidade</span>
          </div>
          <h5 style="text-align: right;">Em parceria com a Alaço, esforçamo-nos para utilizar os melhores materiais no mercado.</h5>
          
          
        </div>
      
        
      </div>

    </div>
    
  </section>

  
  <section class="department">
		<div class="container">
			
			<div class="row">


				<div class="col-md-4">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-file-text fa-5x" style="color: #dd3333;"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Certificados de material</h5>
							<div class="text-oportunity">
							<p>Todos os materiais utilizados pela Alaço na fabricação dos painéis
                 e chapas são acompanhados por certificados de qualidade.</p>
				
							
						</div>
					</center>
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
						<center>
							
							<i class="fa fa-fire fa-5x" style="color:#dd3333;"></i>
							<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
				
								<h5>Resistência ao fogo</h5>
								<div class="text-oportunity">
								<p>O painel sandwich da Alaço obedece às rigorosas normas de 
                  segurança atualmente em vigor, tendo uma reacção ao fogo <b>B- s2,d0.</b></p>
					

							</div>
						</center>
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
					<center>
							
						<i class="	fa fa-hourglass-start fa-5x" style="color: #dd3333;"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Excelente durabilidade</h5>
							<div class="text-oportunity">
							<p>Material de 1ª qualidade, lacado com resina polyester
                 sobre galvanizado, para suportar as agressividades climatéricas.</p>
				
							
						</div>
					</center>
					</div>				
				</div>

	
				
			
      </div>
<!--       
      <hr class="so-divider" style="border-style:solid; border-width:0 0 5px 0; border-color:#dd3333; margin-top: 50px; margin-bottom: 50px; "> -->

	
		</div>
	</section>


@endsection