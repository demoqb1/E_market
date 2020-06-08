@extends('admin.master')
@section('nd','Danh Mục a')
@section('main')
     <!-- validate Thông báo thêm mới thành công và thất bại -->
      @if($mes= Session::get('sucsses'))
      <div class="alert alert-success">
      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      	<strong>{{$mes}}</strong> 
      </div>
      @endif
      @if($mes= Session::get('er'))
      <div class="alert alert-danger">
      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      	<strong>{{$mes}}</strong>
      </div>
      @endif
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      	<form action="" method="POST" class="form-inline" enctype="multipart/form-data" >
      		@csrf
			<div class="form-group">
				<label  for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="Nhập Tên Sản Phẩm " name="name">
               <!-- validate tên -->
				@if($errors->has('name'))
				<div class="help-block">
					{{$errors->first('name')}}
				</div>
				@endif

			</div>
            <br>
			<div class="form-group">
				<label class="" for="">Danh Mục</label>
				
				<select class="form-control" name="cat_id">
					@foreach($category as $cate)
					<option value="{{$cate->id}}">{{$cate->name}}</option>
					@endforeach
				</select>
			</div>
		  
		  <div class="form-group">
				<label  for="">Trạng Thái</label>
				<input type="radio"  id=""  name="status" value="0">Ẩn
				<input type="radio"  id=""  name="status" value="1" checked="">Hiện
				@if($errors->has('name'))
				<div class="help-block">
					{{$errors->first('name')}}
				</div>
				@endif
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
        	


<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	@if(session('mes'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{session('mes')}}</strong> 
	</div>
	@endif
	<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Danh Sách Danh Mục</div>
	

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Giá</th>
				<th>Giá KM</th>
				<th>Status</th>
				<th>Ảnh</th>
				<th></th>
			</tr>
		
		</thead>
		<tbody>
			@foreach($product as $cate)
			<tr>

				<td>{{$loop->index+1}}</td>
				<td>{{$cate->name}}</td>
				<td>{{$cate->price}}</td>
				<td>{{$cate->sale_price}}</td>
				<td>{{$cate->status}}</td>
				<td><img src="{{url('/')}}/uploads/{{$cate->image}}"  width="50px"></td>

                 <td ><a href="{{route('delete-product',[$cate->id])}}" title="Xóa"><i class="glyphicon glyphicon-trash"></i></a></td>

                 <td ><a href="{{route('edit-product',[$cate->id])}}" title="Sửa"><i class="glyphicon glyphicon-cog"></i></a></td>
				
			</tr>
			@endforeach
			
		</tbody>

	</table>
	
</div>
</div>

@stop