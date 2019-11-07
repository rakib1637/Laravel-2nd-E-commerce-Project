@extends('adminpanel.layouts.mastertemplate')
@section('admincontent')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Upload a new products</h1>
         
        </div>
        <
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="" method="POST">
                	<div class="form-group">
                		<label for="productstitle">Products Title</label>
                		<input type="text" name="title" class="form-control" placeholder="Products Title">
                	</div>
                	<div class="form-group">
                		<label for="productstitle">Description</label>
                		<textarea type="text" name="descripton" class="form-control" placeholder="Descripton"></textarea>
                	</div>
                	<div class="form-group">
                		<label for="productstitle">Quantity</label>
                		<input type="number" name="quantity" class="form-control" placeholder="Quantity">
                	</div>
                	<div class="form-group">
                		<label for="productstitle">Product Price</label>
                		<input type="number" name="price" class="form-control" placeholder="Product Price">
                	</div>
                	<div class="form-group">
                		<label for="productstitle">Product Offer Price</label>
                		<input type="text" name="title" class="form-control" placeholder="Products Title">
                	</div>
                	
                </form>
              </div>
              
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection