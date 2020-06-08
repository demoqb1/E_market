@extends('master')
@section('main')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh Mục</a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </div><!-- End .container-fluid  -->
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
                        <nav class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-sort">
                                    <div class="select-custom">
                                        
                                        <div class="text-center">
                                             Sản Phẩm Theo Danh Mục
                                        </div>
                                    </div><!-- End .select-custom -->

                                    <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                                </div><!-- End .toolbox-item -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-item toolbox-show">
                               <!--  <label>Showing 1–9 of 60 results</label> -->
                            </div><!-- End .toolbox-item -->

                            <div class="layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div><!-- End .layout-modes -->
                        </nav>

                        <div class="row row-sm">
                            @foreach($product as $pro)
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product">
                                        </a>
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="btn-quickview">Xem Chi Tiết</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="{{route('productDetail',[$pro->slug,$pro->id])}}">{{$pro->name}}</a>
                                        </h2>
                                         @if($pro->sale_price>0)
                                        <div class="price-box">
                                           <span class="old-price"> {{$pro->price}} Đ</span> 
                                            <span class="product-price"> {{$pro->sale_price}} Đ</span>
                                        </div><!-- End .price-box -->
                                       @else

                                        <div class="price-box">
                                            <span class="product-price">{{$pro->price}} Đ</span>
                                        </div>
                                        @endif

                                        <div class="product-action">
                                            

                                            <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="paction add-cart" title="Add to Cart">
                                                <span>Thêm Vào Giỏ Hàng</span>
                                            </a>

                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .col-xl-2 -->
                            @endforeach

                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <!-- <label>Showing 1–9 of 60 results</label> -->
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><span>...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .container-fluid -->
                </div><!-- End .main-content -->
            </div><!-- End .main-container -->

        </main><!-- End .main -->
@stop
