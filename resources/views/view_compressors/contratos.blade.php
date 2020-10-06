@extends('homeCompressors')
@section('compressors_content')

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-4">Contratos de Manuntenção</h2>
            
          </div>
		</div>
		
		<h5 style="text-align: center;">Pode contar com a <a href="{{URL::to('/')}}">Hightech</a> 
			para executar a manutenção preventiva de todos os seus equipamentos multi-marca e linhas de ar comprimido.</h5>

			
		  <p>&nbsp;</p>
		  
		  <h6 style="text-align: center;">Com os nossos <strong><span style="text-decoration: underline;">contratos de manutenção 
			preventiva</span></strong>, diminuirá drasticamente a probabilidade de avarias, traduzindo-se em diminuição dos 
			tempos de paragem própria e induzida, aumentando assim a segurança e a rentabilidade do seu negócio.</h6>

			<p>&nbsp;</p>

			<em> "A manutenção preventiva é uma acção planeada e sistemática de tarefas de prevenção de forma constante e envolve
				 programas de inspecção, reformas, reparos, entre outros. A manutenção preventiva é a monitorização de um 
				 determinado objecto estudado para evitar que ele apresente erros ou se avarie."</em>

			<p>&nbsp;</p>

			<center>
				 
				<h5><span style="text-decoration: underline;">De acordo com a idade e estado do seu equipamento, 
					planeamos, acordamos e executamos!</span></h5>

			</center>

			<p>&nbsp;</p>

			<img src="{{asset('asset_compressors/images/bannercontratos2.png')}}" alt="" class="img-fluid">


         
      </div>
    
    </section>

	<section class="ftco-intro ftco-no-pb img">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Não permita que o seu equipamento esteja em situação de risco.</h2>
				
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="{{URL::to('/contact')}}" class="btn btn-secondary py-3 px-4">Contacte-nos!</a></p>
          </div>
        </div>	
    	</div>
	</section>


@endsection