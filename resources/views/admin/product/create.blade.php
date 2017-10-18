@extends('admin.layouts.dashboard')
@section('page_heading','Product')
@section('section')
	
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-9">
				
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