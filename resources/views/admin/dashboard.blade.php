@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">

		

				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">

			<center>
			<h1>Bem-vindo ao site do administrador</h1>

			<img src="{{asset('backend/img/logo-airer2.png')}}" alt="Pagina">		
				
			</center>
				
			</div>		

	
			
			<div class="row-fluid" style="margin-top: 150px;">	

				<a href="{{URL::to('/')}}" class="quick-button metro yellow span2" target="_blank" rel="noopener">
					<i class="icon-globe"></i>
					<p>Visitar site</p>
					<!-- <span class="badge">237</span> -->
				</a>
				<a href="https://www.htmarkt.hightech-airer.pt/" class="quick-button metro red span2" target="_blank" rel="noopener">
					<i class="icon-shopping-cart"></i>
					<p>Loja online</p>
					<!-- <span class="badge">46</span> -->
				</a>
				<a href="https://www.htmarkt.hightech-airer.pt/wp-admin/edit.php?post_type=shop_order" class="quick-button metro blue span2" target="_blank" rel="noopener">
					<i class="icon-barcode"></i>
					<p>Encomendas</p>
				</a>
				<a href="{{URL::to('/all-oportunity')}}" class="quick-button metro green span2">
					<i class="icon-list-alt"></i>
					<!-- <i class="icon-comments-alt"></i> -->
					<p>Candidaturas</p>
				</a>
				<a href="{{URL::to('/add-oportunity')}}" class="quick-button metro pink span2">
					<!-- <i class="icon-envelope"></i> -->
					<i class="icon-plus"></i>
					<p>Adicionar Candidatura</p>
					<!-- <span class="badge">88</span> -->
				</a>
				<a href="{{URL::to('/logout')}}" class="quick-button metro black span2">
					<!-- <i class="icon-calendar"></i> -->
					<i class="icon-off"></i>
					<p>Sair</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->

@endsection