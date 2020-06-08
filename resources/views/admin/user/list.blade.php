@extends('admin.master')
@section('nd','Danh Mục')
@section('main')
<div class="clearfix">
@if($mes= Session::get('thongbao'))
 <div class="alert alert-success">
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 	<strong>{{$mes}}</strong> 
 </div>
  @endif

 @if($mes= Session::get('Success'))
 <div class="alert alert-success">
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 	<strong>{{$mes}}</strong> 
 </div>
  @endif

  @if($mes= Session::get('err'))
 <div class="alert alert-success">
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 	<strong>{{$err}}</strong> 
 </div>
  @endif

<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

	<form action="" method="POST" enctype="multipart/form-data" >
	@csrf
		<div class="form-group">
			<label  for="">Họ Và Tên</label>
			<input type="text" class="form-control" id="" placeholder="name" name="name" >
			@if($errors->has('name'))
				{{$errors->first('name')}}
			@endif
		</div>
		<div class="form-group">
			<label  for="">Mail</label>
			<input type="text" class="form-control" id="" placeholder="Nhập email" name="email" >
			@if($errors->has('email'))
				{{$errors->first('email')}}
			@endif
		</div>
        <br>
        <div class="form-group">
			<label  for="">Mật Khẩu</label>
			<input type="password" class="form-control" id="" placeholder="Nhập Mật Khẩu" name="password" >
			@if($errors->has('password'))
				{{$errors->first('password')}}
			@endif
		</div>
		
		<br>
        <div class="form-group">
			<label  for="">Nhập lại Mật Khẩu</label>
			<input type="password" class="form-control" id="" placeholder="Nhập lại mật khẩu" name="confirm_password" >
			@if($errors->has('confirm_password'))
				{{$errors->first('confirm_password')}}
			@endif
		</div>
		<div class="form-group">
			<label  for="">Địa Chỉ</label>
			<input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address" >
			@if($errors->has('address'))
				{{$errors->first('address')}}
			@endif
		</div>
		<div class="form-group">
			<label  for="">Số Điện Thoại</label>
			<input type="text" class="form-control" id="" placeholder="Nhập  SĐT" name="phone" >
			@if($errors->has('phone'))
				{{$errors->first('phone')}}
			@endif
		</div>

		<div class="form-group">
			<label  for=""></label>
			<input type="hidden" class="form-control" id=""  name="status" value="1" placeholder="trạng thái">
		</div>

		<div class="form-group">
			<label  for=""></label>
			<input type="hidden" class="form-control" id=""  name="level" value="1" placeholder="phân quyền">
		</div>

		<div class="form-group">
          <label  for="">Chọn ẢNh</label>
          <input type="file"    name="image"  >
          <img src="" alt="" width="50px">
          </div>
      @if($errors->has('image'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('image')}}
     </div>
      @endif

		
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
	<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Danh Sách Tài Khoản</div>
	

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Email</th>
				<th>Địa Chỉ</th>
				<th>Số Điện Thoại</th>
				<th>Avatar</th>
				<th></th>
			</tr>
		
		</thead>
		<tbody>
			@foreach($account as $ac)
			<tr>

				<td>{{$loop->index+1}}</td>
				<td>{{$ac->name}}</td>
				<td>{{$ac->email}}</td>
				<td>{{$ac->address}}</td>
				<td>{{$ac->phone}}</td>
				<td>
					<img src="{{url('/uploads')}}/{{$ac->image}}" alt="" width="50px">
				</td>
				
				<td>
					<a href="{{route('delete-account',[$ac->id])}}" title="Xóa" ><i class="glyphicon glyphicon-trash"></i></a>

					<a href="{{route('edit-account',[$ac->id])}}" title="Sửa" ><i class="glyphicon glyphicon-cog"></i></a>
					
				</td>
			</tr>
			@endforeach
			
		</tbody>

	</table>

</div>
</div>
</div>
 

@stop