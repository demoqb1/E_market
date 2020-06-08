

@extends('admin.master')
@section('title','Danh Mục')
@section('main')
<div class="clearfix">
  
<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
    <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Quản Lý Đơn Hàng</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên Khách Hàngc</th>
              <th>Trạng Thái</th>
              <th>Ngày Đặt</th>
              <th> </th>
              
            </tr>
          </thead>
          <tbody>
          @foreach($order as $od)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$od->us->name}}</td>
              @if($od->status==0)
              <td><span class="btn btn-danger">Chưa Xửa Lý</span></td>
              @elseif($od->status==1)
             <td><span class="btn btn-warning">Đang Giao</span></td>
              @else
              <td><span class="btn btn-success">Hoàn Thành</span></td>
              @endif
              <td>{{$od->created_at}}</td>
              <td><a href="{{route('orderDetail',['id'=>$od->id])}}" title="">Chi tiết</a></td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</div>
</div>

@stop