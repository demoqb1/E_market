@extends('admin.master')
@section('nd','Danh Mục')
@section('main')

<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

	<form action="" method="POST" enctype="multipart/form-data" >
	@csrf
		<div class="form-group">
			<label  for="">Họ Và Tên</label>
			<input type="text" class="form-control" id=""  name="name" value="{{$account->name}}" >
			
		</div>
		<div class="form-group">
			<label  for="">Mail</label>
			<input type="text" class="form-control" id=""  name="email" value="{{$account->email}}">
			
		</div>

		<div class="form-group">
			<label  for="">Địa Chỉ</label>
			<input type="text" class="form-control" id=""  name="address" value="{{$account->address}}">
			
		</div>

		<div class="form-group">
			<label  for="">Số Điện Thoại</label>
			<input type="text" class="form-control" id=""  name="phone" value="{{$account->phone}}">
			
		</div>
        <br>
        <div class="form-group">
          <label  for="">Chọn ẢNh</label>
          <input type="file"    name="image"  value="">
          <img src="" alt="" width="50px">
          </div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

@stop