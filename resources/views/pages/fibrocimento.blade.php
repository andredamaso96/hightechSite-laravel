
@extends('layout')
@section('content')

<section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">

        <center>
          <h2 class="mb-3">Remoção de fibrocimento</h2>
          <h4>Fabricamos cabines de descontaminação com certificação CE e removemos fibrocimento à mais de 9 anos!</h4>
          <div class="project">
            <!-- <div class="img rounded mb-4" style="background-image: url(images/project-1.jpg);"></div> -->
            
                <div class="text w-100 text-center">
                  <h5>A Hightech-AIRER está habilitada a efectuar trabalhos de remoção de fibrocimento contendo amianto ao abrigo do decreto de Lei 266/2007 de 24 de Julho.</h5>
                  <h5>Possuímos todo o equipamento especifico, pessoal treinado e qualificado, tendo já efectuado trabalhos de remoção de Norte a Sul de Portugal.</h5>
                  
            </div>
          
          </div>
         
        </center>

      </div>
      
    </section>

    <section class="ftco-intro ftco-no-pb img" >
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Quer pedir uma cotação ou esclarecer uma questão?</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos</a></p>
          </div>
        </div>	
    	</div>
    </section>
    
    <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">

        <center>
          <h2 class="mb-3">Procedimentos</h2>
           
        </center>

				<div class="row d-flex align-items-stretch">
          <div class="col-md-8 wrap-about ftco-animate py-md-5 pl-md-5">
            <div class="heading-section mb-4">
							<span class="subheading">Fibrocimento</span>
						</div>
            
						<p>O <b>asbesto-cimento</b> ou <b>fibrocimento</b> é um composto de cimento com 10 a 15% de fibra de amianto, 
              utilizado no fabrico de placas para paredes, chapas onduladas,
               telhas para coberturas, cadeiras e tubos. Devido ao amianto ter sido considerado um agente 
               carcinogénico, o seu uso está posto de parte.</p>
            
					</div>
					<div class="col-md-4 wrap-about align-items-stretch d-flex">

                        <img src="{{asset('frontend/images/telha.jpg')}}" width="100%">
					</div>
					
				</div>
      </div>
      
    </section>

    <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">


				<div class="row d-flex align-items-stretch">
          <div class="col-md-4 wrap-about align-items-stretch d-flex">
         
            <img src="{{asset('frontend/images/pulmao.jpg')}}" width="100%">
					</div>
          <div class="col-md-8 wrap-about ftco-animate py-md-5 pl-md-5">
            <div class="heading-section mb-4">
							<span class="subheading" style="text-align: right;">Perigo para a saúde</span>
            </div>
            <p style="text-align: right;">O perigo do amianto reside essencialmente na possibilidade de 
              <strong>inalação das suas fibras que podem alojar-se nos pulmões</strong>, permanecendo durante anos.</p>
            <p style="text-align: right;">O nosso organismo reconhece-as como um <em>"corpo estranho" </em>e 
                reage tentando eliminá-las através das suas células de defesa, que com o objectivo de destruir as 
                fibras libertam determinadas substâncias.</p>
            <p style="text-align: right;">Estas substâncias, 
                  além de se mostrarem incapazes de remover as fibras, agridem os pulmões.</p>

                  <p style="text-align: right;">A inalação prolongada de fibras de amianto pode provocar doenças graves incluindo
                     <strong>cancro do pulmão, mesotelioma e asbestose</strong>.</p>
            
					</div>
				
					
				</div>
      </div>
      
    </section>

    <section class="ftco-section " id="section-counter">
			<div class="container consult-wrap">


				<div class="row d-flex align-items-stretch">
          <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
            <div class="heading-section mb-4">
							<span class="subheading">Legislação</span>
						</div>
            
            <span style="text-decoration: underline;">Decreto-Lei nº 101/2005 de 23 de Junho</span>
            <p></p>
            
            <p><em>"É proibida a colocação no mercado e a utilização de produtos que contenham fibras de amianto. 
              A utilização de produtos que contenham fibras de amianto e que já se encontrem instalados ou em serviço
               antes da data de entrada em vigor do presente diploma continua a ser autorizada até à data da sua 
               destruição ou fim de vida útil."</em></p>
            
					</div>
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
            <img src="{{asset('frontend/images/portugal.jpg')}}" width="100%">

					</div>
					
				</div>
      </div>
      
    </section>



    @endsection