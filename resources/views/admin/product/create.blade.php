@extends('admin.layouts.dashboard')
@section('page_heading','Create Product')
@section('section')
	
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-9">
				<div class="panel-group">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<a class="pull-right" data-toggle="collapse" href="#panel-publish"><i class="fa fa-toggle-up"></i></a>
				      		<h4 class="panel-title">Product Details</h4>
				    	</div>
				    	<div id="panel-publish" class="panel-collapse">
				      		<div class="panel-body">
			      				<div class="form-group">
									<input type="text" name="prod-name" id="prod-name" class="form-control input-lg flat" value="" required placeholder="Product Name">
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Short description"></textarea>
								</div>
			      			</div>
				    	</div>
				  	</div>
				</div>
				<div class="panel-group">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<a class="pull-right" data-toggle="collapse" href="#panel-data"><i class="fa fa-toggle-up"></i></a>
				      		<h4 class="panel-title">Product Data</h4>
				    	</div>
				    	<div id="panel-data" class="panel-collapse">
				      		<div class="panel-body" style="padding:0px;">
			      				<div class="col-xs-3" style="padding:0px;">
						            <ul class="nav nav-tabs tabs-left">
						                <li class="active"><a href="#general" data-toggle="tab"><i class="fa fa-wrench"></i> General</a></li>
						                <li><a href="#inventory" data-toggle="tab"><i class="fa fa-edit"></i> Inventory</a></li>
						                <li><a href="#shipping" data-toggle="tab"><i class="fa fa-truck"></i> Shipping</a></li>
						                <li><a href="#attributes" data-toggle="tab"><i class="fa fa-th-large"></i> Attributes</a></li>
						                <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog"></i> Settings</a></li>
						            </ul>
						        </div>
						        <div class="col-xs-9" style="padding:0px;">
						            <div class="tab-content" style="padding:10px;border-right:1px solid #fafafa">
						                {{-- General --}}
						                <div class="tab-pane active" id="general">
		                					<div class="form-group">
		                						<label class="col-md-3" for="">Regular price</label>
		                						<div class="input-group col-md-9">
	                								<input type="email" class="form-control" id="" placeholder="Input field">
		                						</div>
		                					</div>
		                					<div class="form-group">
		                						<label class="col-md-3" for="">Sale price</label>
		                						<div class="input-group col-md-9">
			                						<input type="email" class="form-control" id="" placeholder="Input field">
		                						</div>
		                					</div>
						                </div>
										{{-- Inventory --}}
						                <div class="tab-pane" id="inventory">
						                	<div class="form-group">
		                						<label class="col-md-3" for="">SKU</label>
		                						<div class="input-group col-md-9">
		                							<span class="input-group-addon" data-toggle="tooltip" title="SKU referes to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased."><i class="fa fa-question-circle"></i></span>
	                								<input type="email" class="form-control" id="" placeholder="Input field">
		                						</div>
		                					</div>
		                					<div class="form-group">
	                							<label for="input" class="col-sm-3 control-label">Stock Status</label>
	                							<div class="input-group col-sm-9">
	                								<span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="SKU referes to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased."><i class="fa fa-question-circle"></i></span>
	                								<select name="" id="input" class="form-control" required="required">
	                									<option value="">In Stock</option>
	                									<option value="">Out of stock</option>
	                								</select>
	                							</div>
	                						</div>
		                				</div>
		                				{{-- Shipping --}}
						                <div class="tab-pane" id="shipping">
						                	<div class="form-group">
	                							<label for="input" class="col-sm-4 control-label">Weight (kg)</label>
	                							<div class="input-group col-sm-8">
	                								<span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="SKU referes to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased."><i class="fa fa-question-circle"></i></span>
	                								<select name="" id="input" class="form-control" required="required">
	                									<option value="">In Stock</option>
	                									<option value="">Out of stock</option>
	                								</select>
	                							</div>
	                						</div>
	                						<div class="form-group">
	                							<label for="input" class="col-sm-4 control-label">Dimensions (cm)</label>
	                							<div class="input-group col-sm-8">
	                								<span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="SKU referes to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased."><i class="fa fa-question-circle"></i></span>
	                								<select name="" id="input" class="form-control" required="required">
	                									<option value="">In Stock</option>
	                									<option value="">Out of stock</option>
	                								</select>
	                							</div>
	                						</div>
	                						<div class="form-group">
	                							<label for="input" class="col-sm-4 control-label">Shipping class</label>
	                							<div class="input-group col-sm-8">
	                								<span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="SKU referes to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased."><i class="fa fa-question-circle"></i></span>
	                								<select name="" id="input" class="form-control" required="required">
	                									<option value="">In Stock</option>
	                									<option value="">Out of stock</option>
	                								</select>
	                							</div>
	                						</div>
						                </div>
						                {{-- Attributes --}}
						                <div class="tab-pane" id="attributes">
						                	
						                </div>
						                {{-- Settings --}}
						                <div class="tab-pane" id="settings">
						                	
						                </div>
						            </div>
						        </div>
			      			</div>
				    	</div>
				  	</div>
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="panel-group">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<a class="pull-right" data-toggle="collapse" href="#panel-publish"><i class="fa fa-toggle-up"></i></a>
				      		<h4 class="panel-title">Publish</h4>
				    	</div>
				    	<div id="panel-publish" class="panel-collapse">
				      		<div class="panel-body">
			      				<a class="pull-left btn btn-default btn-sm" href="">Save Draft</a>
			      				<a class="pull-right btn btn-default btn-sm" href="">Preview</a>
			      			</div>
				      		<div class="panel-footer clearfix">
					      		<a class="pull-right btn btn-primary btn-sm" href="">Publish</a>
				      		</div>
				    	</div>
				  	</div>
				</div>
				<div class="panel-group">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<a class="pull-right" data-toggle="collapse" href="#panel-cat"><i class="fa fa-toggle-up"></i></a>
				      		<h4 class="panel-title">Product Categories</h4>
				    	</div>
				    	<div id="panel-cat" class="panel-collapse">
				      		<div class="panel-body">
			      				<p>All Categories</p>
			      				<div class="checkbox">
			      					<label><input type="checkbox" value="checkbox">Checkbox</label>
			      				</div>
			      				<a class="btn btn-link" data-toggle="collapse" href="#add-cat"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add new category</a>
			      				<div id="add-cat" class="panel-collapse collapse">
		      						<input type="text" name="" id="input" class="form-control input-sm" value="" required="required" pattern="" title="">
		      						<button type="button" class="btn btn-sm btn-info pull-right">button</button>
		      					</div>
			      			</div>
				      		
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>

@stop