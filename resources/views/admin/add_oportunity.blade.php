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
					<a href="#">Adicionar Oportunidade</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Adicionar Categoria</h2>
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
						<form class="form-horizontal" action="{{ url('/save-oportunity') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Título</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_name" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tipo de emprego</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_type" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Categoria de trabalho</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_category" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Horário de trabalho</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_time" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Localização</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_location" required="">
							  </div>
							</div>                   
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Descrição Oportunidade</label>
							  <div class="controls">
								<textarea name="oportunity_description" rows="3" required=""></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publicação Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_satus" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Adicionar Oportunidade</button>
							  <button type="reset" class="btn">Cancelar</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()