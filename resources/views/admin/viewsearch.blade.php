@extends('admin.master')
@section('title','Danh Mục')
@section('main')
<div class="clearfix">
@if($mes= Session::get('thongbao'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{$mes}}</strong> 
      </div>
@endif

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Tìm thấy {{count($product)}} sản phẩm</div>
  

  <!-- Table -->
  <table class="table text-center" >
    <thead>
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Danh Mục</th>
        <th>Giá </th>
        <th>Giá KM</th>
        <th>Mô Tả</th>
        <th>Ảnh</th>
        
        <th>Trạng Thái</th>
        <!-- <th>SP Bán Chạy</th> -->
        <th></th>
        <th></th>
      </tr>
      @foreach($product as $pro)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$pro->name}}</td>
        <td>{{$pro->category->name}}</td>
        <td>{{$pro->price}}</td>
        <td>{{$pro->sale_price}}</td>
        <td>{{$pro->description}}</td>
         <td><img src="{{url('/uploads')}}/{{$pro->image}}" alt="" width="50px"></td>
         
        
        @if($pro->status==1)
        <td>Hiện</td>
        @else
        <td>Ẩn</td>
        @endif
        <!-- <td>{{$pro->hot_pro}}</td> -->
        <td>
           <a href="{{route('editProduct',[$pro->id])}}" title="Sửa"><i class="glyphicon glyphicon-pencil" alt=""></i></a>
            <a href="{{route('deleteProduct',[$pro->id])}}" title="Xóa"><i class="glyphicon glyphicon-trash" alt=""></i></a>
            
         </td>
      </tr>

      @endforeach
    
    </thead>
    <tbody>
     
      
    </tbody>

  </table>
  
</div>

@stop

