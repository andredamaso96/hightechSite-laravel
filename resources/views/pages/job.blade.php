@extends('layout')
@section('PageTitle', 'Oportunidades/Emprego - Hightech-AIRER')
@section('content')

@if($message = Session::get('success'))

    <center style="margin-top: 50px;">
      <h2>{{ $message }}!</h2>
      <p>Recebemos a sua candidatura e brevemente iremos responder-lhe...</p>
      <p class="mb-0"><a href="{{URL::to('/')}}" class="btn btn-secondary py-3 px-4">Voltar à página inicial</a></p>
    </center>
    <br/><br/><br/>

  @else

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
    
		<div class="container">
			<div class="row d-flex no-gutters align-items-stretch	consult-wrap">
				<div class="col-md-5 wrap-about align-items-stretch d-flex">
					<div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
						<h2 class="heading-white mb-4">Candidatar</h2>
						<form action="{{ url('job') }}" method="post" class="appointment-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="first_name" class="form-control" placeholder="Primeiro Nome" data-rule="minlen:4" data-msg="Por favor, digite pelo menos 4 caracteres" required>
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<input type="text" name="last_name" class="form-control" placeholder="Último Nome" data-rule="minlen:4" data-msg="Por favor, digite pelo menos 4 caracteres" required>
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" data-rule="email" data-msg="Por favor, digite um email válido" required>
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<input type="phone" name="phone" class="form-control" placeholder="Telefone" data-rule="minlen:9" data-msg="Por favor, digite o número de telefone" required>
								<div class="validate"></div>
							</div>
							<div class="form-group">
								<label class= "label-control" for="file">Carregar CV/Resumo:</label>
							  <input type="file" name="file" accept="application/pdf, application/vnd.ms-excel" required><br><br>
							</div> 
							<div class="form-group">
					  <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Carta de Apresentação" data-rule="minlen:8" data-msg="Por favor, digite pelo menos 8 caracteres na carta" required></textarea>
					  <div class="validate"></div>
					</div>
					<div class="form-group">
						<input type="submit" value="Submeter" class="btn btn-secondary py-3 px-4">
					  </div>
					</form>
					</div>
				</div>
				<div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
					<div class="bg-white p-5">
						<h2 class="mb-4">{{ $oportunities->title }}</h2>
						<div class="text media-body">
							<h3>A Hightech-AIRER está a contratar um {{$oportunities->type_job}}</h3>
							<p><b>Categoria de Trabalho:</b> {{$oportunities->category}}</p>
							<p><b>Horário de Trabalho:</b> {{$oportunities->work_time}}</p>
							<p><b>Localização:</b> {{$oportunities->location}}</p>
						</div>
						<div class="services">
							<div class="icon mt-2"><span class="flaticon-analysis"></span></div>
							<h3>Detalhes da oferta:</h3>
							<p>{{$oportunities->description}}</p>
						</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @endif

@endsection