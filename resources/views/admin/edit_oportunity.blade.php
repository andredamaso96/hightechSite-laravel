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
					<a href="#">Editar Oportunidades</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Editar Categoria</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/update-oportunity', $oportunity_info->oportunity_id) }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Título</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_name" value="{{$oportunity_info->title}}">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tipo de emprego</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_type" value="{{$oportunity_info->type_job}}">
							  </div>
							</div>  
							<div class="control-group">
							  <label class="control-label" for="date01">Categoria de trabalho</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_category" value="{{$oportunity_info->category}}">
							  </div>
							</div>  
							<div class="control-group">
							  <label class="control-label" for="date01">Horário de trabalho</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_time" value="{{$oportunity_info->work_time}}">
							  </div>
							</div>  
							<div class="control-group">
							  <label class="control-label" for="date01">Localização</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="oportunity_location" value="{{$oportunity_info->location}}">
							  </div>
							</div>             
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Descrição Oportunidade</label>
							  <div class="controls">
								<textarea name="oportunity_description" rows="3">{{$oportunity_info->description}}</textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Atualizar Oportunidade</button>

							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()