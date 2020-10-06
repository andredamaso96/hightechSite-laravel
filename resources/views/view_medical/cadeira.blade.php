@extends('homeMedical')
@section('medical_content')

	
<section class="ftco-section portfolio-details">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Produtos</span>
            <h2 class="mb-4">Cadeiras de rodas elétricas Hightech ®</h2>
            
          </div>
		</div>
		
    <div class="portfolio-details-container">
      <img src="{{asset('asset_medical/images/cadeiraderodas.jpg')}}" class="img-fluid" alt="">

      <!-- <div class="owl-carousel portfolio-details-carousel">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
        <img src="images/cob1.jpg" class="img-fluid" alt="">
      </div> -->

      <div class="portfolio-info">
        <h3>Informação</h3>
        <ul>
          <li><strong>Marca</strong>: Hightech Medical</li>
          <li><strong>Preço</strong>: x€</li>
          <li><strong>Localização</strong>: Moita</li>
   
          <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
        </ul>
      </div>

    </div>

    

    <!-- <div class="portfolio-description">
      <h2>Descrição do projeto</h2>
      <p>
        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
      </p>
    </div> -->
		
    	</div>
  </section>

  <section class="department">
		<div class="container">

      <div class="row">


        <div class="col-md-6">				
          
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iALs7KUtPXA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
        </div>
  
        <div class="col-md-6">				
          
          <p style="text-align: center;">A Hightech realizou no dia 09 de Setembro um teste a uma tecnologia 
            inovadora, as cadeiras de rodas elétricas Hightech ®.</p>

          <p style="text-align: center;">Esta solução tem vindo a ser estudada pela Hightech nos últimos dois anos e 
            compreende a necessidade de uma pessoa com pouca/inexistente mobilidade poder deslocar-se de forma autónoma.</p>
            
          <p style="text-align: center;">Temos um&nbsp;vídeo exemplificativo da utilização da cadeira, sendo possível para 
            uma pessoa com mobilidade especial poder retirar a mesma de um carro unicamente pelos próprios meios, 
            montar a cadeira, e seguir a sua vida na cidade de forma autónoma.</p>
          
          <p style="text-align: center;"><strong>A Hightech espera revolucionar o quotidiano das pessoas com mais dificuldades
              de mobilidade, tornado-as o mais autónomas possível no seu dia-a-dia.</strong></p>
          
            
        </div>
  
      
      </div>

      </div>
  </section>
  
  <section class="ftco-intro">
    	<div class="container">
			<div class="row ">
				<div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
					<h2 class="mb-3 mb-md-0">Não se preocupe. Contacte-nos que nós tratamos de tudo.</h2>
					
				</div>
				<div class="col-lg-3 col-md-3 ftco-animate">
					<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
				</div>
			</div>	
    	</div>
	</section>


@endsection