@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Obras</a></li>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Obras</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Obra</th>
								  <th>Nome do cliente</th>
								  <th>Imagem</th>
								  <th>Localização</th>
								  <th>Data da obra</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  @foreach($all_project_info as $v_project)
						  <tbody>
							<tr>
								<td>{{ $v_project->project_id }}</td>
								<td class="center">{{ $v_project->project_name }}</td>
								<td> <img src="{{URL::to($v_project->project_image)}}" style="height: 80px; width: 80px;"></td>
								<td class="center">{{ $v_project->project_location }}</td>
								<td class="center">{{ $v_project->project_date }}</td>
								<td class="center">
									@if($v_project->publication_status==1)
									<span class="label label-success">Ativo</span>
									@else
									<span class="label label-danger">Desativado</span>
									@endif
								</td>
								<td class="center">
									@if($v_project->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_project/'.$v_project->project_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_project/'.$v_project->project_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-project/'.$v_project->project_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-project/'.$v_project->project_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							
						  </tbody>
						  @endforeach
					  </table>  
					  
					  <a href="{{URL::to('/add-project')}}" type="button" class="btn btn-primary">Adicionar Obra</a>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection()