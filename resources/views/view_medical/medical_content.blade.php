@extends('homeMedical')
@section('medical_content')

<section class="home-slider owl-carousel">
<!-- 	
		<img src="images/cadeiraderodas.jpg" class="img-fluid" width="1100" height="300" alt=""> -->

      <div class="slider-item">
		 
		  <img src="{{asset('asset_medical/images/cadeiraderodas.jpg')}}" class="img-fluid" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div>

      <!-- <div class="slider-item">
		  <img src="images/slide2.jpg" class="img-fluid" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div> -->
	</section>
	<section class="ftco-intro ftco-no-pb img" >
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">Inserida na área da saúde, a Hightech MEDICAL está empenhada em garantir aos seus clientes os melhores equipamentos médicos aos melhores preços do mercado.</h2>
          </div>
        </div>	
    	</div>
	</section>
	


	  <section class="department">
		<div class="container">
			
			<div class="row">


				<div class="col-md-6">				
					
					
							<h5>A Hightech começou os testes nas nossas cadeiras 
								de rodas elétricas, que visam oferecer total autonomia 
								de vida a pessoas de mobilidade especial!</h5>

								<p class="mb-0" style="margin-top: 50px;"><a href="{{URL::to('/medical/cadeira-de-rodas')}}" class="btn btn-secondary py-3 px-4">Saiba tudo aqui!</a></p>
								
				</div>

				<div class="col-md-6">				
					
					
					<img src="{{asset('asset_medical/images/cadeiraderodas.jpg')}}" class="img-fluid" width="1200" height="676" alt=""  style="border-radius: 8px;">
					
						
				</div>

			
			</div>
	
		</div>
	</section>


@endsection