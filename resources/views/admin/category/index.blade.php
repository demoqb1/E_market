

@extends('admin.master')
@section('title','Danh Mục')
@section('main')
<div class="clearfix">
  <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
  <!-- validate form thêm mới -->
  @if($mes=Session::get('succsess'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$mes}}!</strong> 
  </div>
  @endif

  <!-- Validate form xóa  -->
  @if($mes=Session::get('alertCucsses'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$mes}}!</strong> 
  </div>
  @endif

  <form action="{{route('addCate')}}" method="POST" class="" role="form">
  @csrf
    <div class="form-group">
      <label class="" for="">Tên Danh Mục</label>

      <input type="name" class="form-control" id="" placeholder="Nhập tên danh mục" name="name">
      <!-- validate input -->
      @if($errors->has('name'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('name')}}
     </div>
      @endif

    </div>

    <div class="form-group">
      <label class="" for="">Trạng Thái</label>
      <br>
      <input type="radio"  name="status" value="0">Ẩn
      <input type="radio"  name="status" value="1">Hiện 
      @if($errors->has('status'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('status')}}
     </div>
      @endif
    </div>

    <div class="form-group">
      <label class="" for="">Danh Mục </label>
      <br>
      <input type="radio"  name="type" value="1">Danh Mục Sản Phẩm
      <input type="radio"  name="type" value="2">Danh Mục Bài Viết
      @if($errors->has('type'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('type')}}
     </div>
      @endif
    </div>
  
    <button type="submit" class="btn btn-primary">OK</button>
  </form>
</div>
<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
    <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Quản Lý Danh Mục</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên Danh Mục</th>
              <th>Trạng Thái</th>
              <th>Phân Loại</th>
              <th> </th>
              
            </tr>
          </thead>
          <tbody>
          @foreach($category as $cate)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$cate->name}}</td>

              @if($cate->status==1)
              <td>Hiện</td>
              @else
              <td>Ẩn</td>
              @endif

              @if($cate->type==1)
              <td>Danh Mục Sản Phẩm</td>
              @else
              <td>Danh Mục Bài Viết</td>
              @endif
             
              <td>
                <a href="{{route('edit-category',[$cate->id])}}" title="Sửa"><i class="glyphicon glyphicon-pencil" alt=""></i></a>
                <a href="{{route('delete-category',[$cate->id])}}" title="Xóa"><i class="glyphicon glyphicon-trash" alt=""></i></a>
              </td>

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