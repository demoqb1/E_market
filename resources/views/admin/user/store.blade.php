@extends('admin.master')
@section('nd','Danh Mục')
@section('main')

 
@if($mes= Session::get('thongbao'))
 <div class="alert alert-success">
 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 	<strong>{{$mes}}</strong> 
 </div>
  @endif

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
				<th>Email</th>
				<th>Ảnh</th>
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
				 <td><img src="{{url('/uploads')}}/{{$ac->image}}" alt="" width="50px"></td>
				
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

@stop