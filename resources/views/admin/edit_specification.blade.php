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
					<a href="#">Editar Especificação</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Editar Especificação</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/update-specification', $specification_info->specification_id) }}" method="post">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome da Especificação</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_name" value="{{$specification_info->specification_name}}">
							  </div>
							</div>    
							<div class="control-group">
							  <label class="control-label" for="date01">Série</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_serie" value="{{$specification_info->specification_serie}}">
							  </div>
							</div>  
							<div class="control-group">
							  <label class="control-label" for="date01">URL</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_url" value="{{$specification_info->	specification_url}}">
							  </div>
							</div>       
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Atualizar Especificação</button>

							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()