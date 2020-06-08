

@extends('admin.master')
@section('title','Danh Mục')
@section('main')
<div class="clearfix">
  @if($mes= Session::get('succsess'))
 <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>{{$mes}}</strong> 
 </div>
  @endif
   <div class="row">

     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
       <div class="panel panel-info">
         <div class="panel-heading">
           <h3 class="panel-title">Thông Tin Khách Hàng</h3>
         </div>
         <div class="panel-body">
              <p>Họ Tên : {{$us->name}}</p>
              <p>Địa Chỉ : {{$us->address}}</p>
              <p>Số Điện Thoại: {{$us->phone}}</p>
              <p>Email : {{$us->email}}</p>
         </div>

         <div class="panel panel-info">
           <div class="panel-heading">
             <h3 class="panel-title">Trạng Thái</h3>
           </div>
           <div class="panel-body">
             <form action="" method="POST" >
             @csrf
               <div class="form-group">
                 <label for="">Trạng Thái</label>
                 <select name="status" >
                   <option value="0" {{$orderDetail->status==0?'selected':'0'}} >Chờ Duyệt</option>
                   <option value="1"{{$orderDetail->status==0?'selected':'1'}}>Đang Giao</option>
                   <option value="2"{{$orderDetail->status==0?'selected':'2'}}>Hoàn Thành</option>
                   
                 </select>
               </div>
             
               
             
               <button type="submit" class="btn btn-primary">Cập Nhật</button>
             </form>
           </div>
         </div>
       </div>
     </div>
    
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Danh Sách Sản Phẩm</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Tên</th>
                  <th>Ảnh</th>
                  <th>Ảnh</th>
                  <th>Giá</th>
                  <th>Số Lượng</th>
                  <th>Thành Tiền </th>
                </tr>
              </thead>
              <tbody>
                @foreach($orderDetail->detail as $od)
                <tr>

                  <td>{{$loop->index+1}}</td>
                  <td>{{$od->pro->name}}</td>

                  <td>
                     <img src="{{url('/')}}/uploads/{{$od->pro->image}}" width="50px">  
                  </td>
                   <td>{{$od->pro->price}} Đ</td>
                    <td>{{$od->quantity}}</td>
                    <td>{{($od->quantity)*($od->pro->price)}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   </div>

</div>


@stop