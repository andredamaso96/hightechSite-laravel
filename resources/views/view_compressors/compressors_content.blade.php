@extends('homeCompressors')
@section('compressors_content')

<section class="home-slider owl-carousel">
      <div class="slider-item">
		  <!-- <div class="overlay"></div> -->
		  <img src="{{asset('asset_compressors/images/slide1.png')}}" class="img-fluid" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div>

      <div class="slider-item">
		  <!-- <div class="overlay"></div> -->
		  <img src="{{asset('asset_compressors/images/slide2.png')}}" class="img-fluid" alt="">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        </div>
        </div>
      </div>
	</section>
	<section class="ftco-intro ftco-no-pb img" style="background-image: url({{asset('asset_compressors/images/img1.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">A Hightech tornou-se representante em Portugal da Comprag GmbH.</h2>
          </div>
        </div>	
    	</div>
	</section>
	
	<section class="department">
		<div class="container">

			<div class="row">
				<div class="col">
					<img src="{{asset('asset_compressors/images/img1.png')}}" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="{{asset('asset_compressors/images/img2.png')}}" class="img-fluid" alt="">
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
							
						<i class="fa fa-tachometer fa-5x" style="color: rgb(0, 183, 255);"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
			
							<h5>Venda e manutenção de equipamentos de ar comprimido e vácuo</h5>
							<div class="text-oportunity">
							<p>Vendemos e efectuamos a manutenção preventiva e periodica a todos os equipamentos 
								de ar comprimido e vácuo como compressores, secadores, depósitos, filtros. Executamos 
								auditorias de eficiência energética.</p>
				
							<p class="sow-more-text">
								<a href="{{URL::to('/compressors/assistencia-tecnica')}}" style="color: rgb(0, 183, 255);">
									Clique aqui para saber mais!</a>
							</p>
						</div>
					</center>
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
						<center>
							
							<i class="fa fa-sliders fa-5x" style="color: rgb(0, 183, 255);"></i>
							<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
				
								<h5>Projeto/Planeamento e montagem de linhas de ar comprimido</h5>
								<div class="text-oportunity">
								<p>Planeamos e construímos linhas de ar comprimido de acordo com 
									as necessidades da sua produção. Reparamos e fazemos a 
									manutenção/optimização de linhas já existentes.</p>
					
								<p class="sow-more-text">
									<a href="{{URL::to('/compressors/contratos')}}" style="color: rgb(0, 183, 255);">
										Clique aqui para saber mais!</a>
								</p>
							</div>
						</center>
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
						<!-- <div class="img rounded mb-4" style="background-image: url(images/project-1.jpg);"></div> -->
						<center>
							
							<i class="fa fa-tags fa-5x" style="color: rgb(0, 183, 255);"></i>
							<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				
				
								<h5>Venda de acessórios para reparação de equipamentos e linhas de ar comprimido</h5>
								<div class="text-oportunity">
								<p>Temos kits de reparação, acessórios de acoplamento, pistolas, mangueiras, válvulas, 
									filtros e tudo mais que possa precisar. Não hesite, pergunte que nós respondemos. 
									Material de qualidade.</p>
					
								<p class="sow-more-text">
									<a href="{{URL::to('/contact')}}" style="color: rgb(0, 183, 255);">
										Clique aqui para saber mais!</a>
								</p>
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
            <h2 class="mb-3 mb-md-0">Necessita de ajuda? Precisa de mais informação?
				A Hightech tem a solução.</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
          </div>
        </div>	
    	</div>
	</section>
	
	<section class="department">
		<div class="container">
			
			<div class="row">


				<div class="col-md-6">				
					<div class="project">
					<center>
						<a href="{{URL::to('/compressors/contratos')}}">
						<img src="{{asset('asset_compressors/images/contract.jpg')}}" width="182" height="182" class="img-fluid" alt="">	
						
						<p></p>
			
							<h5 style="color: rgb(0, 183, 255);">Contratos de Manutenção</h5>
							<div class="text-oportunity">
							<p>Colocamos à vossa disposição uma variada gama de opções que mais se adaptem às vossas necessidades.
Contratos de manutenção multi-marcas com a periodicidade mais adequada à idade e uso dos vossos equipamentos.</p>
				
		
						</div>
						</a>
					</center>
					</div>				
				</div>

				<div class="col-md-6">				
					<div class="project">
						<center>
							<a href="{{URL::to('/compressors/assistencia-tecnica')}}"">
							<img src="{{asset('asset_compressors/images/maisfaca.png')}}" width="272" height="182" class="img-fluid" alt="">	
							<p></p>
				
								<h5 style="color: rgb(0, 183, 255);">Assistência Técnica</h5>
								<div class="text-oportunity">
								<p>A Hightech Compressors coloca à vossa disposição um excelente
								 serviço de assistência técnica e manutenção multi-marca, com anos
								  de experiência na área do ar comprimido. Privilegiamos a qualidade, 
								  eficácia e rapidez nas nossas intervenções.</p>
					
				
							</div>
							</a>
						</center>
					</div>				
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
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca1.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca2.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca3.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca4.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca5.png')}}"></a></li>
							<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('asset_compressors/images/marca6.png')}}"></a></li>
				
						  </ul>
						

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection