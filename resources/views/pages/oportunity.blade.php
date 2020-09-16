@extends('layout')
@section('PageTitle', 'Oportunidades - Hightech-AIRER')
@section('content')

  
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Candidaturas</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Início <i class="ion-ios-arrow-forward"></i></a></span> <span>Candidaturas <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<span class="subheading">Oferta</span>
            <h2 class="mb-4">Oportunidades</h2>
            <p>Se é pró-ativo, inovador, e gosta de trabalhar em equipa, 
				envie-nos o seu currículo, porque oferecemos a chance de fazer parte de uma equipa 
				com um trabalho fascinante que o desafiará constantemente.</p>
            <p></p>
          </div>
        </div>
        <div class="row oportunity">


        <?php

            $oportunidades=DB::table('tbl_oportunity')
                            ->select('tbl_oportunity.*')
                            ->where('tbl_oportunity.publication_satus', 1)
                            ->get(); 


            foreach($oportunidades as $v_oportunidades){ ?>

        	<div class="col-md-4">				
        		<div class="project">
					<!-- <div class="img rounded mb-4" style="background-image: url(images/project-1.jpg);"></div> -->
					
        			<div class="text w-100 text-center">
						<a href="{{URL::to('/view_oportunity/'.$v_oportunidades->oportunity_id)}}">
        				<span class="cat">{{$v_oportunidades->title}}</span>
        		
					</div>
					
					<div class="text-oportunity">
				
						<p><b>Categoria de Trabalho:</b> {{$v_oportunidades->category}}</p>
						<p><b>Horário de Trabalho:</b> {{$v_oportunidades->work_time}}</p>
						<p><b>Localização:</b> {{$v_oportunidades->location}}</p>
					</div>
				
				</div>				
			</div>
		
        	
        	<?php } ?>
        </div>
        
			</div>
		</section>

@endsection