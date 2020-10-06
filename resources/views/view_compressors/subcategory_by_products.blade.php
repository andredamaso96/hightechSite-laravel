@extends('homeCompressors')
@section('compressors_content')

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">{{$product_by_subcategory[0]->product_name}}</span>
            <h2 class="mb-4">{{$product_by_subcategory[0]->subcategories_name}}</h2>
            
          </div>
        </div>

			
			<div class="row project">

			<?php foreach($product_by_subcategory as $v_subcategory_by_product){?>
				<div class="col-md-3">				
					<div class="oportunity ">
						<div class="text w-100 text-center">
							<a href="{{URL::to('/view_product/'.$v_subcategory_by_product->product_id)}}">
							<span class="cat">{{$v_subcategory_by_product->brands_name}}</span>
					
						</div>
					<center>
						
							<div class="text-oportunity">
							
								<img src="{{URL::to($v_subcategory_by_product->product_image)}}" width="108" height="150" class="img-fluid" alt="">
								<p></p>
								<span style="text-decoration: underline;"><em>{{$product_by_name[0]->product_name}}</em></span>
								<!-- <p style="text-align: center;"><strong>75-315</strong></p> -->
				
							</div>
					</center>
					</div>				
				</div>
				<?php } ?>

		</div>
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