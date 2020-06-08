@extends('master')
@section('main')
<main class="main">
            

            <div class="main-container">
                <div class="category-list" id="category-list">
                    <ul class="nav category-list-nav">
                        <li class="nav-item green">
                            <a href="#cat-1" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/fashion.svg" width="28" alt="Category Name"></span>
                                <span class="cat-list-text">THỜI TRANG</span>
                            </a>
                        </li>
                        
                        <li class="nav-item orange">
                            <a href="#cat-2" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/electronics.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Thiết bị điện tử và máy tính</span>
                            </a>
                        </li>
                        <li class="nav-item red">
                            <a href="#cat-3" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/toys.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ chơi</span>
                            </a>
                        </li>
                        <li class="nav-item lime">
                            <a href="#cat-4" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/home.svg" width="32" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ dùng gia đình</span>
                            </a>
                        </li>
                        <li class="nav-item blue">
                            <a href="#cat-5" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/decor.svg" width="25" alt="Category Name"></span>
                                <span class="cat-list-text">Nội thất</span>
                            </a>
                        </li>
                        <li class="nav-item gray">
                            <a href="#cat-6" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/sports.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Đồ dùng thể thao</span>
                            </a>
                        </li>
                        <li class="nav-item lightblue">
                            <a href="#cat-7" class="nav-link">
                                <span class="cat-list-icon"><img src="{{url('/')}}/public/assetss/images/category-icons/gifts.svg" width="24" alt="Category Name"></span>
                                <span class="cat-list-text">Quà tặng</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- End .category-list -->

                <div class="main-content">
                    <div class="container-fluid">
                        <div id="cat-1" class="category-section">
                            <div class="category-title">
                                <div class="dropdown" >
                                    <a href="#" class="dropdown-toggle cat-title" data-display="static" data-toggle="dropdown">THỜI TRANG<i class="fa fa-angle-down"></i></a>
                                    
                                </div><!-- End .dropdown -->
                                <a href="{{route('producta')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->
                            
                            <div class="products-carousel owl-carousel owl-theme">
                                @foreach($producta as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="{{route('add',['id'=>$pro->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  

                            </div><!-- End .products-carousel -->

                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-1.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-2.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-2" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Thiết bị điện tử và máy tính</div>
                                <a href="{{route('productb')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->
                            
                            <div class="products-carousel owl-carousel owl-theme">
                                  @foreach($productb as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="{{route('add',['id'=>$pro->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  
                                
                           
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-3.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-4.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-3" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Đồ chơi</div>
                                <a href="{{route('productc')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->

                            <div class="products-carousel owl-carousel owl-theme">

                                   @foreach($productc as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="{{route('add',['id'=>$pro->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  
                                
                            </div><!-- End .products-carousel -->
                            
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-5.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-6.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-4" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Đồ dùng gia đình</div>
                                <a href="{{route('productd')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->

                            <div class="products-carousel owl-carousel owl-theme">
                                   @foreach($productd as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  
                            </div><!-- End .products-carousel -->
                            
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-7.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-8.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-5" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Nội thất</div>
                                <a href="{{route('producte')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->

                            <div class="products-carousel owl-carousel owl-theme">

                                 @foreach($producte as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  

                                
                            </div><!-- End .products-carousel -->
                            
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-9.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-10.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-6" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Đồ dùng thể thao</div>
                                <a href="{{route('productf')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->

                            <div class="products-carousel owl-carousel owl-theme">
                                 @foreach($productf as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="{{route('add',['id'=>$pro->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  

                                
                            </div><!-- End .products-carousel -->
                            
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-11.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-12.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->

                        <div id="cat-7" class="category-section">
                            <div class="category-title">
                                <div class="cat-title">Quà tặng</div>
                                <a href="{{route('productg')}}" class="btn btn-outline-primary">Xem nhiều hơn</a>
                            </div><!-- End .category-title -->

                            <div class="products-carousel owl-carousel owl-theme">
                                    @foreach($productg as $pro)
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="{{route('productDetail',[$pro->slug,$pro->id])}}" class="product-image">
                                            <img src="{{url('/')}}/uploads/{{$pro->image}}" alt="product" width="100%">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Xem ngay</a>
                                        <span class="product-label label-new">New</span>
                                    </figure>
                                    
                                    <div class="product-details">
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
                                            

                                            <a href="{{route('add',['id'=>$pro->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>

                                       
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                      
                                </div><!-- End .product -->
                                 @endforeach  

                            </div><!-- End .products-carousel -->
                            
                            <div class="banners-group">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-13.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-14.jpg" alt="banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .banners-group -->
                        </div><!-- End .category-section -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .main-content -->
            </div><!-- End .main-container -->
        </main><!-- End .main -->
@stop
