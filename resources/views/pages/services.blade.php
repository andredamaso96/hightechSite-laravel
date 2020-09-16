@extends('layout')
@section('PageTitle', 'Serviços - Hightech-AIRER')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/slide1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">O que fazemos?</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Início <i class="ion-ios-arrow-forward"></i></a></span> <span>O que fazemos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>

<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-md-3 col-lg-6 ftco-animate">
            <div class="blog-entry">
              <a href="http://www.hightech-airer.pt/compressors/" class="block-20 d-flex align-items-end" style="background-image: url({{asset('frontend/images/banner-comprag.png')}});">
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="http://www.hightech-airer.pt/compressors/">Equipamentos e acessórios de ar comprimido e vácuo</a></h3>

              </div>
            </div>
          </div>


          <div class="col-md-3 col-lg-6 ftco-animate">
            <div class="blog-entry">
              <a href="{{URL::to('/fibrocimento')}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset('frontend/images/telha.jpg')}});">
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="{{URL::to('/fibrocimento')}}">Remoção de materiais com amianto</a></h3>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-lg-6 ftco-animate">
            <div class="blog-entry">
              <a href="{{URL::to('/cabines')}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset('frontend/images/Cabine-descontaminacao.jpg')}});">
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="{{URL::to('/cabines')}}">Cabines de descontaminação</a></h3>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-lg-6 ftco-animate">
            <div class="blog-entry">
              <a href="http://www.hightechmedical.pt/cadeiras-rodas-eletricas-hightech/" class="block-20 d-flex align-items-end" style="background-image: url({{asset('frontend/images/cadeira.jpg')}});">
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="http://www.hightechmedical.pt/cadeiras-rodas-eletricas-hightech/">Cadeiras de rodas para mobilidade reduzida</a></h3>

              </div>
            </div>
          </div>



          </div>
        </div>

			</div>
		</section>

@endsection