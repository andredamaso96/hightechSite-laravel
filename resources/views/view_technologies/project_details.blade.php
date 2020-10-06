@extends('homeTechnologies')
@section('technologies_content')

	
<section class="ftco-section portfolio-details">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Projetos</span>
            <h2 class="mb-4">Grocork, LDA</h2>
            
          </div>
		</div>
		
    <div class="portfolio-details-container">
      <img src="{{URL::to($project_by_details->project_image)}}" class="img-fluid" alt="">

      <!-- <div class="owl-carousel portfolio-details-carousel">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
      </div> -->

      <div class="portfolio-info">
        <h3>Project information</h3>
        <ul>
          <li><strong>Cliente</strong>: {{$project_by_details->project_name}}</li>
          <li><strong>Localização</strong>: {{$project_by_details->project_location}}</li>
          <li><strong>Data do projeto</strong>: {{$project_by_details->project_date}}</li>
          <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Descrição do projeto</h2>
      <p>
      {{$project_by_details->project_long_description}}
      </p>
    </div>
		
    	</div>
	</section>
 

@endsection