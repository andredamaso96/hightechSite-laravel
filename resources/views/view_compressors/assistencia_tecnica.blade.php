@extends('homeCompressors')
@section('compressors_content')

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-4">Assistência Técnica</h2>
            
          </div>
        </div>

		<h5 style="text-align: center;">A <a href="{{URL::to('/')}}">Hightech</a>
			 existe para o sucesso do cliente, e para isso apresentamos-lhe o nosso departamento de assistência técnica.</h5>

          <p>&nbsp;</p>

		  <p style="text-align: center;">Dotados de elevada capacidade técnica e profissionalismo, 
			os nossos técnicos asseguram que todos os seus equipamentos se mantenham a funcionar correctamente.</p>

			<hr class="so-divider" style="border-style:solid; border-width:0 0 5px 0; border-color:#21baf2; margin-top: 50px; margin-bottom: 50px; ">

			<img src="{{asset('asset_compressors/images/banneroficinabeta2.jpg')}}" alt="" class="img-fluid">

			<hr class="so-divider" style="border-style:solid; border-width:0 0 5px 0; border-color:#21baf2; margin-top: 50px; margin-bottom: 50px; ">

			
			<h5 style="text-align: center;">A nossa oficina encontra-se equipada de modo a respondermos a qualquer tipo de assistência e manutenção multi-marca.</h5>
		 
			<center>
				<span style="text-decoration: underline;"><strong><em>Estamos preparado para:</em></strong></span>
			</center>

			<div class="row">


				<div class="col-md-4">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-wrench fa-5x" style="color: rgb(0, 183, 255);"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				

					</center>

										
						<div class="text-oportunity">

							<ul>
								<li>Reparação e manutenção de equipamentos de ar comprimido/vácuo</li>
							</ul>
							<ul>
								<li>Reparação de fugas em linhas de ar comprimido/vácuo</li>
							</ul>
							<ul>
								<li>Manutenção de linhas de produção como elevada componente de equipamentos pneumáticos</li>
							</ul>
						
						</div>
					
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-ambulance fa-5x" style="color: rgb(0, 183, 255);"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				

					</center>

										
						<div class="text-oportunity">

							<ul>
								<li>Assistência ao local do equipamento</li>
							</ul>
							<ul>
								<li>Reparação na hora, quando possível</li>
							</ul>
							<ul>
								<li>Transporte dos equipamentos para os locais de montagem</li>
							</ul>
							<ul>
								<li>Substituição de equipamentos</li>
							</ul>
						
						</div>
					
					</div>				
				</div>

				<div class="col-md-4">				
					<div class="oportunity">
					<center>
							
						<i class="fa fa-cogs fa-5x" style="color: rgb(0, 183, 255);"></i>
						<span class="sow-icon-ionicons" data-sow-icon="" style="font-size: 70px; color: #21baf2"></span>				

					</center>

										
						<div class="text-oportunity">

							<ul>
								<li>Parametrização de equipamentos, variadores, válvulas</li>
							</ul>
							<ul>
								<li>Aconselhamento no cliente</li>
							</ul>
							<ul>
								<li><a href="{{URL::to('/compressors/contratos')}}" style="color: #21baf2">Manutenção preventiva</a> de modo a evitar possíveis avarias</li>
							</ul>
						
						</div>
					
					</div>				
				</div>
			
				
			
			</div>

         
      </div>
    
    </section>


@endsection