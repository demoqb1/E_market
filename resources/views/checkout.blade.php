@extends('master')
@section('main')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container-fluid -->
            </nav>

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
                            <div class="col-lg-4">
                                <div class="order-summary">
                                    <h3>Thông tin</h3>

                                    <h4>
                                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">Có {{$cart->total_quantity}} Sản Phẩm Trong Giỏ Hàng</a>
                                    </h4>

                                    <div class="collapse" id="order-cart-section">
                                        <table class="table table-mini-cart">

                                            <tbody>
                                                 @foreach($cart->items as $cc)
                                                <tr>
                                               
                                                    <td class="product-col">
                                                        <figure class="product-image-container">
                                                            <a href="product.html" class="product-image">
                                                                <img src="{{url('/')}}/uploads/{{$cc['image']}}" alt="product">
                                                            </a>
                                                        </figure>
                                                        <div>
                                                            <h2 class="product-title">
                                                                <a href="product.html">{{$cc['name']}}</a>
                                                            </h2>

                                                            <span class="product-qty">{{$cc['quantity']}}</span>

                                                        </div>
                                                    </td>
                                                    <td class="price-col">{{$cart->total_price}} Đ</td>
                                               
                                                    
                                                </tr>
                                                 @endforeach
                                            </tbody>    
                                        </table>
                                    </div><!-- End #order-cart-section -->
                                </div><!-- End .order-summary -->

                                <!-- <div class="checkout-info-box">
                                    <h3 class="step-title">Ship To:
                                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                    </h3>

                                    <address>
                                        Desmond Mason <br>
                                        123 Street Name, City, USA <br>
                                        Los Angeles, California 03100 <br>
                                        United States <br>
                                        (123) 456-7890
                                    </address>
                                </div>

                                <div class="checkout-info-box">
                                    <h3 class="step-title">Shipping Method: 
                                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                    </h3>

                                    <p>Flat Rate - Fixed</p>
                                </div> -->
                            </div><!-- End .col-lg-4 -->

                            <div class="col-lg-8 order-lg-first">
                                <div class="checkout-payment">
                                   <!--  <h2 class="step-title">Phương Thức Thanh Toán</h2>

                                   
                                    
                                    <div class="form-group-custom-control">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                                            
                                        </div>
                                    </div>
                                    <div id="checkout-shipping-address">
                                        <address>
                                            Desmond Mason <br>
                                            123 Street Name, City, USA <br>
                                            Los Angeles, California 03100 <br>
                                            United States <br>
                                            (123) 456-7890
                                        </address>
                                    </div> -->

                                    <div id="new-checkout-address" class="show">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="form-group required-field">
                                                <label>Họ Tên </label>
                                                <input type="text" class="form-control" required name="name" value="{{Auth::user()->name}}">
                                            </div><!-- End .form-group -->

                                            <div class="form-group required-field">
                                                <label>Email </label>
                                                <input type="text" class="form-control" required name="email" value="{{Auth::user()->email}}">
                                            </div><!-- End .form-group -->

                                            <div class="form-group required-field">
                                                <label>Địa Chỉ </label>
                                                <input type="text" class="form-control" required name="address" value="{{Auth::user()->address}}" >
                                            </div><!-- End .form-group -->


                                            <div class="form-group required-field">
                                                <label>Số Điện Thoại </label>
                                                <div class="form-control-tooltip">
                                                    <input type="tel" class="form-control" required name="phone"value="{{Auth::user()->phone}}">
                                                    <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right" name=""><i class="icon-question-circle"></i></span>
                                                </div><!-- End .form-control-tooltip -->
                                            </div><!-- End .form-group -->

                                    

                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-primary float-left">Đặt Hàng</button>
                                     
                                    </div><!-- End .clearfix -->
                                </form>
                                </div><!-- End .checkout-payment -->

                                <div class="checkout-discount">
                                    <h4>
                                        <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section"></a>
                                    </h4>

                                    <div class="collapse" id="checkout-discount-section">
                                        <form action="#">
                                                <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                                <button class="btn btn-sm btn-outline-secondary" type="submit"></button>
                                        </form>
                                    </div><!-- End .collapse -->
                                </div><!-- End .checkout-discount -->
                            </div><!-- End .col-lg-8 -->
                        </div><!-- End .row -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .main-content -->
            </div><!-- End .main-container -->
        </main><!-- End .main -->
@stop
