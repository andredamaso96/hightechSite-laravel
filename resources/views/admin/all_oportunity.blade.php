@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Oportunidades</a></li>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Oportunidade</th>
								  <th>Título</th>
								  <th>Tipo de emprego</th>
								  <th>Categoria de trabalho</th>
								  <th>Horário de trabalho</th>
								  <th>Localização</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  @foreach($all_oportunity_info as $v_oportunity)
						  <tbody>
							<tr>
								<td>{{ $v_oportunity->oportunity_id }}</td>
								<td class="center">{{ $v_oportunity->title }}</td>
								<td class="center">{{ $v_oportunity->type_job }}</td>
								<td class="center">{{ $v_oportunity->category }}</td>
								<td class="center">{{ $v_oportunity->work_time }}</td>
								<td class="center">{{ $v_oportunity->location }}</td>
								<td class="center">
									@if($v_oportunity->publication_satus==1)
									<span class="label label-success">Ativo</span>
									@else
									<span class="label label-danger">Desativado</span>
									@endif
								</td>
								<td class="center">
									@if($v_oportunity->publication_satus==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_oportunity/'.$v_oportunity->oportunity_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_oportunity/'.$v_oportunity->oportunity_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-oportunity/'.$v_oportunity->oportunity_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-oportunity/'.$v_oportunity->oportunity_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection()