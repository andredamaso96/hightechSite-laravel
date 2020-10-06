@extends('homeTechnologies')
@section('technologies_content')

   
<section class="ftco-section portfolio">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Projetos</span>
            <h2 class="mb-4">Nossas obras</h2>
            
          </div>
		</div>
		
		<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <?php foreach($projects as $v_project){?>
			
            <div class="col-lg-4 col-md-6 filter-app">
			  <div class="portfolio-item">
				<img src="{{URL::to($v_project->project_image)}}" class="img-fluid" alt="">
				<div class="portfolio-info">
				  <h3><a href="{{URL::to('/view_obra/'.$v_project->project_id)}}" data-gall="portfolioGallery" class="venobox" title="App 1">{{$v_project->project_name}}</a></h3>
				  <div>
					<a href="{{URL::to($v_project->project_image)}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
					<a href="{{URL::to('/view_obra/'.$v_project->project_id)}}" title="Portfolio Details"><i class="bx bx-link"></i></a>
				  </div>
				</div>
			  </div>
			</div>
            
            <?php } ?>
  

		  </div>
			
		
    	</div>
	</section>

@endsection