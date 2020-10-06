@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Categorias</a></li>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categorias</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Categoria</th>
								  <th>Nome da Categoria</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  @foreach($all_category_info as $v_category)
						  <tbody>
							<tr>
								<td>{{ $v_category->id }}</td>
								<td class="center">{{ $v_category->product_name }}</td>
								
								<td class="center">
									@if($v_category->product_status==1)
									<span class="label label-success">Ativo</span>
									@else
									<span class="label label-danger">Desativado</span>
									@endif
								</td>
								<td class="center">
									@if($v_category->product_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_category/'.$v_category->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active_category/'.$v_category->id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-category/'.$v_category->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_category->id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							
                          </tbody>
                          
                          @endforeach
                          
                          
                      </table>

                      <a href="{{URL::to('/add-category')}}" type="button" class="btn btn-primary">Adicionar Categoria</a>
                      
                      <!-- <div class="form-actions">
							<a href="{{URL::to('/add-category')}}" type="button" class="btn btn-primary">Adicionar Categoria</a>
							  
					</div> -->
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection()