@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Adicionar Obra</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Adicionar Obra</h2>
					</div>
					<p class="alert-success">
						<?php
						$message=Session::get('message');
						
						if($message){
							echo $message;
							Session::put('message', NULL);
						}
						?>
						
					</p>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/save-project') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome do cliente</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="project_name" required="">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Local da obra</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="project_location" required="">
							  </div>
							</div> 

							<div class="control-group">
							  <label class="control-label" for="date01">Data da obra</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="project_date" required="">
							  </div>
							</div> 

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Longa descrição do projeto</label>
							  <div class="controls">
								<textarea  name="project_long_description" rows="10" required=""></textarea>
							  </div>
							</div>
						
							 
							<div class="control-group">
							  <label class="control-label" for="fileInput">Imagem</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="project_image" id="fileInput" type="file" >
							  </div>
							</div>  
	
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publicação Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Adicionar Especificação</button>
							  <button type="reset" class="btn">Cancelar</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()