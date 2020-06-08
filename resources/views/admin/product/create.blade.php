@extends('admin.master')
@section('title','Danh Mục')
@section('main')
@if($mes=Session::get('sucsses'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{$mes}}</strong> 
</div>
@endif
<div class="clearfix">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<form action="{{route('PostaddProduct')}}" method="POST"  enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label class="" for="">Tên Sản Phẩm</label>
    <input class="form-control" type="text"  id="name" name="name" placeholder="Nhập Tên sản phẩm" onkeyup="ChangeToSlug()">
    @if($errors->has('name'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('name')}}
     </div>
      @endif
  </div>

  <div class="form-group">
    <label  for="">Slug</label>
    <input class="form-control" type="text"  id="slug" name="slug" placeholder="Nhap-Ten-san-pham">
  </div>

  <div class="form-group">
    <label  for="">Danh Mục</label> 
     <select  class="form-control" name="cate_id" placeholder="Chọn Danh Mục">
      @foreach($category as $cate)
       <option value="{{$cate->id}}">{{$cate->name}}</option>
       @endforeach
     </select>
  </div>

   <div class="form-group">
    <label  for="">Giá</label>
    <input  class="form-control" type="text"  id="" name="price" placeholder="Nhập Giá">
    @if($errors->has('price'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('price')}}
     </div>
      @endif
  </div>
   <div class="form-group">
    <label  for="">Giá Khuyến Mãi</label>
    <input  class="form-control" type="text"  id="" name="sale_price" placeholder="Nhập Giá KM">
  </div>

   <div class="form-group">
    <label  for="">Mô Tả Sản Phẩm</label>
    <input  class="form-control" type="text"  id="" name="description" placeholder="Mô Tả">
    @if($errors->has('description'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('description')}}
     </div>
      @endif
  </div>

     <div>
        <div class="form-group">
        <label  for="">Chọn ẢNh</label>
        <input type="text" class="form-control" id="image"  name="image" >
        <a class="btn btn-primary" data-toggle="modal" href='#modal-file' ><i class="glyphicon glyphicon-picture"></i></a>
        @if($errors->has('image'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('image')}}
     </div>
      @endif
        
        <div class="form-group">
        <img src="" alt="" id="showImg" class="img-responsive">
        </div>  
      </div>

      <div class="form-group">
        <label  for="">Chọn ẢNh Mô Tả</label>
        <input type="text"  id="imageList"  name="image1" >
        @if($errors->has('image1'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('image1')}}
     </div>
      @endif
        <a class="btn btn-primary" data-toggle="modal" href='#modal-file-list' ><i class="glyphicon glyphicon-picture"></i></a>

        <div class="form-group">
          <div class="row ListShow" class="img-responsive">
            <!-- Đoạn cmt cắt sang master vứt vào js để gọi ra nhóm ảnh -->
            <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 thumbnail">
                 <img src="http://localhost/php1904shop/uploads/Penguins.jpg">
            </div> -->
          </div>
      </div>

     </div>
        
      </div>
      <div class="form-group">
        <label  for="">Trạng Thái</label>
        <input type="radio"  id=""  name="status" value="0">Ẩn
        <input type="radio"  id=""  name="status" value="1" checked="">Hiện
        @if($errors->has('status'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('status')}}
     </div>
      @endif
      </div>
      
      <div class="form-group">
        <label  for="">Sản Phẩm Bán Chạy</label>
        <input type="radio"  id=""  name="hot_pro" value="0">Không
        <input type="radio"  id=""  name="hot_pro" value="1" checked="">Có
        @if($errors->has('hot_pro'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('hot_pro')}}
     </div>
      @endif
      </div>

  <button type="submit" class="btn btn-primary">OK</button>
</form>
</div>

<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
  
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Danh Sách Danh Mục</div>
  

  <!-- Table -->
  <table class="table">
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
        <td> <img src="" alt="">
        	</td>
        
      </tr>

      @endforeach
    
    </thead>
    <tbody>
     
      
    </tbody>

  </table>
 {{$product->links()}}
</div>
</div>
<script>
  function ChangeToSlug()
{   
  // alert('dada');
    var name, slug;
 
    //Lấy text từ thẻ input title 
    //name trong trường id='name' của ô nhập sản phẩm
    name = document.getElementById("name").value;
    console.log(name);
    //Đổi chữ hoa thành chữ thường
    slug = name.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>

@stop

