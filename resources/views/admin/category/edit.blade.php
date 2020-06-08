@extends('admin.master')
@section('main')

  
  @if($mes=Session::get('succsess'))
  <div class="alert alert-success">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	<strong>{{$mes}}</strong> 
  </div>
  @endif
   
  <form action="" method="POST" class="" role="form">
  @csrf
    <div class="form-group">
      <label class="" for="">Tên Danh Mục</label>

      <input type="name" class="form-control" id="" placeholder="Nhập tên danh mục" name="name" value="{{$model->name}}">
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
      <input type="radio"  value="0"  name="status" {{($model->status == 0)?'checked':''}} >Ẩn
			<input type="radio"  value="1"  name="status" {{($model->status == 1)?'checked':''}} >Hiện
			@if($errors->has('status'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('status')}}
     </div>
      @endif
      @if($errors->has('status'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('status')}}
     </div>
      @endif
    </div>

    <div class="form-group">
      <label class="" for="">Danh Mục </label>
      <br>
     		<input type="radio"  value="0"  name="type"{{($model->type == 0)?'checked':''}}>Danh Mục Bài Viết
			<input type="radio"  value="1"  name="type"{{($model->type == 1)?'checked':''}}>Danh Mục Sản Phẩm
      @if($errors->has('type'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('type')}}
     </div>
      @endif
    </div>
  
    <button type="submit" class="btn btn-primary">OK</button>
  </form>

@stop





