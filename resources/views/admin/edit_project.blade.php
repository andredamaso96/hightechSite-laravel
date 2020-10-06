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
					<a href="#">Editar Obra</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Editar Obra</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/update-project', $project_info->project_id) }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome do cliente</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="project_name" value="{{$project_info->project_name}}">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Local da obra</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="project_location" value="{{$project_info->project_location}}" required="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Data da obra</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="project_date" value="{{$project_info->project_date}}" required="">
							  </div>
							</div> 

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Longa descrição da obra</label>
							  <div class="controls">
								<textarea name="project_long_description" value="{{$project_info->project_long_description}}" 
									rows="10" required="">{{ $project_info->project_long_description }}</textarea>
							  </div>
							</div>
							         

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Atualizar Obra</button>

							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()