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
					<a href="#">Adicionar Sub-categoria</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Adicionar Sub-categoria</h2>
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
						<form class="form-horizontal" action="{{ url('/save-subcategory') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nome da Sub-categoria</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="subcategories_name" required="">
							  </div>
							</div>          
							<div class="control-group">
								<label class="control-label" for="selectError3">Categoria</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  	<option>Selecione a Categoria</option>
								  	<?php

                $all_published_category=DB::table('tbl_compressors_products')
                                        ->where('product_status',1)
                                        ->get();
                foreach ($all_published_category as $v_category){?>
									<option value="{{$v_category->id}}">{{$v_category->product_name}}</option>
								<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publicação Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Adicionar Sub-Categoria</button>
							  <button type="reset" class="btn">Cancelar</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()