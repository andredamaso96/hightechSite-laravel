@extends('homeCompressors')
@section('compressors_content')

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">{{ $product_by_details->brands_name}} </span>
            <h2 class="mb-4">{{ $product_by_details->product_name}}</h2>
            
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

						<p style="margin-top: 50px;">{{ $product_by_details->product_long_description}}</p>
            
					</div>
					<div class="col-md-6">
            			<img src="{{URL::to($product_by_details->product_image)}}" width="800" class="img-fluid" alt="">
						<!-- <div class="img" style="background-image: url(images/COMPAIRDSERIES800x800.jpg);"></div> -->
					</div>
					
		</div>

		<section class="ftco-section" >
			<div class="container">
				<div class="text-center heading-section ftco-animate">
					<!-- <span class="subheading">Especificações técnicas</span> -->
					<h2 class="mb-3">Especificações técnicas</h2>
				</div>

				<div class="row project">
				<!-- <?php foreach($specification_by_product as $v_specification){?> -->
					<div class="col-md-4">				
						<div class="oportunity ">
							<div class="text w-100 text-center">
								<a href="{{ $v_specification->specification_url }}" target="_blank" rel="noopener">
								<span class="cat">{{ $product_by_details->brands_name}}</span>
						
							</div>
						<center>
							
								<div class="text-oportunity">
								
									<img src="{{URL::to($v_specification->specification_image)}}" width="108" height="150" class="img-fluid" alt="">
									<p></p>
									<span style="text-decoration: underline;"><em>{{ $v_specification->specification_name }}</em></span>
									<p style="text-align: center;"><strong>{{ $v_specification->specification_serie }}</strong></p>
					
								</div>
						</center>
						</div>				
					</div>
					<!-- <?php } ?> -->
	
			</div>
					
			</div>
		</section>

			
		
    	</div>
	</section>

	<section class="ftco-intro ftco-no-pb img">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Necessita de algum equipamento?</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="https://www.htmarkt.hightech-airer.pt/" class="btn btn-secondary py-3 px-4" target="_blank" rel="noopener">Visite a nossa loja online!</a></p>
          </div>
        </div>	
    	</div>
	</section>

@endsection