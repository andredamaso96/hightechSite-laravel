
@extends('layout')
@section('PageTitle', 'Contactos e Localização - Hightech-AIRER')
@section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/contact.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contactos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Início <i class="ion-ios-arrow-forward"></i></a></span> <span>Contactos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
  
  @if($message = Session::get('success'))
  <center style="margin-top: 50px;">
      <h2>{{ $message }}!</h2>
      <p>Recebemos o seu Email e brevemente iremos responder-lhe...</p>
    </center>
    <br/><br/><br/>

  @else
	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Endereço:</span> Rua Poeta José Gomes Ferreira, 6/8, 2860-593 Moita</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			            <p><span>Telefone:</span> <a href="tel://214447020">Ligue-nos: +351 21 444 70 20</a></p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:geral@hightech-airer.pt">geral@hightech-airer.pt</a></p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
          	<h2 class="text-center">Se tiver alguma dúvida <br>por favor, não hesite em nos enviar uma mensagem</h2>
            
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <!-- <button type="button" classe="close" data-dismiss="alert">x</button> -->
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach 
                </ul>
                </div>
            @endif
            <form action="{{ url('contact') }}" method="post" class="border p-5">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" id="message_name" name="message_name" class="form-control" placeholder="Nome/Empresa" 
                data-rule="minlen:4" data-msg="Por favor, digite pelo menos 4 caracteres" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" 
                data-rule="email" data-msg="Por favor, digite um email válido" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto"
                 data-rule="minlen:4" data-msg="Por favor, digite pelo menos 4 caracteres" required>
                 <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" 
                placeholder="Menssagem" data-rule="minlen:4" data-msg="Por favor, digite pelo menos 8 caracteres no assunto" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="submit" id="btn_submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
              </div>
              <!-- <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div> -->
            </form>
            
          </div>
        </div>
      </div>
    </section>

      <!-- ======= Map Section ======= -->
      <section class="map mt-2">
        <div class="container-fluid p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.7998702366363!2d-8.976267184656804!3d38.653481779608974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19386354d89735%3A0xe96aa92197c3618b!2sHightech-AIRER%2C%20Uni.%2C%20Lda%20-%20Venda%2C%20repara%C3%A7%C3%A3o%20e%20manuten%C3%A7%C3%A3o%20de%20equipamentos%20de%20ar%20comprimido!5e0!3m2!1spt-PT!2spt!4v1593512418366!5m2!1spt-PT!2spt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </section><!-- End Map Section -->

      @endif

@endsection