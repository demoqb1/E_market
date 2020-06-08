@extends('master')
@section('main')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
                    </ol>
                </div><!-- End .container-fluid -->
            </nav>
            @if($mes= Session::get('success'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{$mes}}</strong> 
                </div>
                @endif

               <div class="main-container">
                 <div class="category-list" id="category-list">
                    <ul class="nav category-list-nav">
                        <li class="nav-item green">
                            <a href="{{route('producta')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/fashion.svg" width="28" alt="Category Name"></span>
                                <span class="cat-list-text">Thời trang</span>
                            </a>
                        </li>
                        <li class="nav-item orange">
                            <a href="{{route('productb')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/electronics.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Thiết bị điện tử và máy tính</span>
                            </a>
                        </li>
                        <li class="nav-item red">
                            <a href="{{route('productc')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/toys.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ chơi</span>
                            </a>
                        </li>
                        <li class="nav-item lime">
                            <a href="{{route('productd')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/home.svg" width="32" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ dùng gia đình</span>
                            </a>
                        </li>
                        <li class="nav-item blue">
                            <a href="{{route('producte')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/decor.svg" width="25" alt="Category Name"></span>
                                <span class="cat-list-text">Nội thất</span>
                            </a>
                        </li>
                        <li class="nav-item gray">
                            <a href="{{route('productf')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/sports.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ dùng thể thao</span>
                            </a>
                        </li>
                        <li class="nav-item lightblue">
                            <a href="{{route('productg')}}" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/gifts.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Quà tặng</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cart-table-container">
                                    <table class="table table-cart">
                                        <thead>
                                            <tr>
                                                <th class="product-col">Sản Phẩm</th>
                                                <th class="price-col">Giá</th>
                                                <th class="qty-col">Số Lượng</th>
                                                <th>Tổng Giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart->items as $cc)

                                            <form action="{{route('update')}}" method="POST">
                                                @csrf
                                                <tr class="product-row">
                                                <td class="product-col">
                                                    <figure class="product-image-container">
                                                        <a href="" class="product-image">
                                                            <img src="{{url('/')}}/uploads/{{$cc['image']}}" alt="product">
                                                        </a>
                                                    </figure>
                                                    <h2 class="product-title">
                                                        <a href="">{{$cc['name']}}</a>
                                                    </h2>
                                                </td>
                                                <td>{{$cc['price']}} Đ</td>
                                                <td>
                                                    <input class="" type="text" value="{{$cc['quantity']}}" name="quantity">
                                                    
                                                    <input type="hidden" name="id" value="{{$cc['id']}}">
                                                </td>
                                                <td>{{$cc['price']*$cc['quantity']}}</td>
                                            </tr>
                                            <tr class="product-action-row">
                                                <td colspan="4" class="clearfix">
                                                    
                                                    
                                                    <div class="float-right">
                                                        <button type="submit" style="border: none;background: none">
                                                            <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Cập nhật</span><i class="icon-pencil"></i></a>
                                                        </button>
                                             
                                                        <a href="{{route('delete',['id'=>$cc['id']])}}" title="Remove product" class="btn-remove"><span class="sr-only">Xóa</span></a>
                                                    </div><!-- End .float-right -->
                                                </td>
                                            </tr>

                                            </form>
                                            
                                            @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="clearfix">
                                                    <div class="float-left">
                                                        <a href="{{route('homepage')}}" class="btn btn-outline-secondary">Tiếp Tục Đi Chợ</a>
                                                    </div><!-- End .float-left -->

                                                    <div class="float-right">
                                                        <a href="{{route('deleteAll')}}" class="btn btn-outline-secondary btn-clear-cart">Xóa Hết Giỏ Hàng</a>
                                                    </div><!-- End .float-right -->
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- End .cart-table-container -->

                            </div><!-- End .col-lg-8 -->

                            <div class="col-lg-4">
                                <div class="cart-summary">
                                    <h3>Chi tiết đơn hàng</h3>

                                    
                                    <table class="table table-totals">
                                        <tbody>
                                            <tr>
                                                <td>Số Lượng Sản Phẩm</td>
                                                <td>{{$cart->total_quantity}}</td>
                                            </tr>

                                           <!--  <tr>
                                                <td>Thuế VAT (%)</td>
                                                <td>10%</td>
                                            </tr> -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Giá trị đơn hàng </td>
                                                <td>{{$cart->total_price}}Đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="checkout-methods">
                                        @if(Auth::check())
                                        <a href="{{route('checkout')}}" class="btn btn-block btn-sm btn-primary">Đặt Hàng</a>
                                         @else
                                         <a data-toggle="modal" href='#modal-id' class="btn btn-block btn-sm btn-primary">Đặt Hàng</a>
                                         @endif
                                    </div><!-- End .checkout-methods -->
                                </div><!-- End .cart-summary -->
                            </div><!-- End .col-lg-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .main-content -->
            </div><!-- End .main-container -->
        </main><!-- End .main -->
@stop
