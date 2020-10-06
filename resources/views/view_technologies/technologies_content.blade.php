@extends('homeTechnologies')
@section('technologies_content')

<section class="home-slider owl-carousel">
      <div class="slider-item">
		  <!-- <div class="overlay"></div> -->
		  <img src="{{asset('asset_technologies/images/slide1.jpg')}}" class="img-fluid" width="300" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div>

      <div class="slider-item">
		  <!-- <div class="overlay"></div> -->
		  <img src="{{asset('asset_technologies/images/slide2.jpg')}}" class="img-fluid" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div>
	</section>
	<section class="ftco-intro ftco-no-pb img" >
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">A Hightech executa a maioria dos trabalhos de energias viáveis e renováveis.</h2>
          </div>
        </div>	
    	</div>
	</section>
	


	  <section class="department">
		<div class="container">
			
			<div class="row">


				<div class="col-md-3">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-sun-o fa-5x" style="color: #dd3333;"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Painéis fotovoltaicos</h5>
							<div class="text-oportunity">
							<p>Painéis solares fotovoltaicos são dispositivos utilizados para converter a energia da luz 
								do Sol em energia elétrica. Os painéis solares fotovoltaicos são compostos por células 
								solares, assim designadas já que captam, em geral, a luz do Sol.</p>
				
							
						</div>
					</center>
					</div>				
				</div>

				<div class="col-md-3">				
					<div class="oportunity">
						<center>
							
							<i class="fa fa-lightbulb-o fa-5x" style="color:#dd3333;"></i>
							<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
				
								<h5>Soluções LED</h5>
								<div class="text-oportunity">
								<p>O LED é um componente eletrónico semicondutor, ou seja, um diodo emissor de luz que tem a 
									propriedade de transformar energia elétrica em luz. O LED não dissipa energia em calor e 
									tem uma duração de vida muito maior em relação às lampadas convencionais.</p>
					

							</div>
						</center>
					</div>				
				</div>

				<div class="col-md-3">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-sun-o fa-5x" style="color: #dd3333;"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Painéis solar-térmicos</h5>
							<div class="text-oportunity">
							<p>Painéis solares térmicos são dispositivos utilizados para converter a energia da luz do Sol 
								em energia térmica, aquecendo um gás especifico dentro de tubos de cobre que aquecerá a água, 
								sendo depois armazenada em depósitos especificos.</p>
				
							
						</div>
					</center>
					</div>				
				</div>

				<div class="col-md-3">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-thermometer fa-5x" style="color: #dd3333;"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Energia geotérmica</h5>
							<div class="text-oportunity">
							<p>Painéis solares fotovoltaicos são dispositivos utilizados para converter a energia da luz 
								do Sol em energia elétrica. Os painéis solares fotovoltaicos são compostos por células 
								solares, assim designadas já que captam, em geral, a luz do Sol.</p>
				
							
						</div>
					</center>
					</div>				
				</div>
				
			
			</div>
	
		</div>
	</section>



    <section class="ftco-intro ftco-no-pb img">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Não perca mais tempo.
				Contacte-nos que esclarecemos as suas dúvidas.</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
          </div>
        </div>	
    	</div>
	</section>
	

@endsection