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
					<a href="#">Adicionar Especificação</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Adicionar Especificação</h2>
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
						<form class="form-horizontal" action="{{ url('/save-specification') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome dos equipamentos</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_name" required="">
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError3">Referência de equipamento</label>
								<div class="controls">
								  <select id="selectError3" name="product_id">
								  	<option>Selecione o equipamento</option>
								  	<?php

                $all_published_brand=DB::table('tbl_products')
                                        ->where('publication_status',1)
                                        ->get();
                foreach ($all_published_brand as $v_brand){?>
									<option value="{{$v_brand->product_id}}">{{$v_brand->product_name}}</option>
								<?php } ?>
								  </select>
								</div>
							  </div>  

							<div class="control-group">
							  <label class="control-label" for="date01">Série</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_serie" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">URL</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="specification_url" required="">
							  </div>
							</div>
							 
							<div class="control-group">
							  <label class="control-label" for="fileInput">Imagem</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="specification_image" id="fileInput" type="file" >
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