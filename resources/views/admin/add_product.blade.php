@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Início/a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Produtos</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Adicionar Equipamento</h2>
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
						<form class="form-horizontal" action="{{ url('/save-product') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome do produto</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name" required="">
							  </div>
							</div>
							
							  <div class="control-group">
								<label class="control-label" for="selectError3">Sub-categoria</label>
								<div class="controls">
								  <select id="selectError3" name="subcategories_id">
								  	<option>Selecione a Sub-categoria</option>
								  	<?php

                $all_published_subcategory=DB::table('tbl_subcategories')
                                        ->where('publication_status',1)
                                        ->get();
                foreach ($all_published_subcategory as $v_subcategory){?>
									<option value="{{$v_subcategory->subcategories_id}}">{{$v_subcategory->subcategories_name}}</option>
								<?php } ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError3">Marca</label>
									<div class="controls">
									<input type="text" class="input-xlarge" name="brands_name" required="">
								</div>
							  </div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Longa descrição do equipamento</label>
							  <div class="controls">
								<textarea name="product_long_description" rows="10" required=""></textarea>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Imagem</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div>
							
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publicação Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Adicionar Equipamento</button>
							  <button type="reset" class="btn">Cancelar</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()