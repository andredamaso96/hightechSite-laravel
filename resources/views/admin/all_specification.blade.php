@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Especificações</a></li>
			</ul>
			<p class="alert-success">
						<?php
						$message=Session::get('message');
						
						if($message){
							echo $message;
							Session::put('message', NULL);
						}
						?>
						
			</p>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Especificações</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Especificação</th>
								  <th>Nome da Especificação</th>
								  <th>Imagem</th>
								  <th>Produto Relacionado</th>
								  <th>Série</th>
								  <th>URL</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  @foreach($all_specification_info as $v_specification)
						  <tbody>
							<tr>
								<td>{{ $v_specification->specification_id }}</td>
								<td class="center">{{ $v_specification->specification_name }}</td>
								<td> <img src="{{URL::to($v_specification->specification_image)}}" style="height: 80px; width: 80px;"></td>
								<td class="center">{{ $v_specification->product_name }}</td>
								<td class="center">{{ $v_specification->specification_serie }}</td>
								<td class="center">{{ $v_specification->specification_url }}</td>
								<td class="center">
									@if($v_specification->publication_status==1)
									<span class="label label-success">Ativo</span>
									@else
									<span class="label label-danger">Desativado</span>
									@endif
								</td>
								<td class="center">
									@if($v_specification->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_specification/'.$v_specification->specification_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_specification/'.$v_specification->specification_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-specification/'.$v_specification->specification_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-specification/'.$v_specification->specification_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							
						  </tbody>
						  @endforeach
					  </table>  
					  
					  <a href="{{URL::to('/add-specification')}}" type="button" class="btn btn-primary">Adicionar Especificação</a>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection()