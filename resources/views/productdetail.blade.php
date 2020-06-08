@extends('master')
@section('main')
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid">
                    <ol class="breadcrumb">
<!--                         <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li> -->
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

                <div class="main-content mt-3 mt-xl-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="sidebar-overlay"></div>
                            <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
                            <aside class="sidebar-product col-lg-3 mobile-sidebar">
                                <div class="sidebar-wrapper">
                                    <!-- <div class="widget widget-collapse">
                                        <h3 class="widget-title">
                                            <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">electronics</a>
                                        </h3>

                                        <div class="collapse show" id="widget-body-1">
                                            <div class="widget-body">
                                                <ul class="cat-list">
                                                    <li><a href="#">Smart TVs</a></li>
                                                    <li><a href="#">Cameras</a></li>
                                                    <li><a href="#">Head Phones</a></li>
                                                    <li><a href="#">Games</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="widget widget-banner">
                                        <div class="banner banner-image">
                                            <a href="#">
                                                <img src="{{url('/')}}/public/assetss/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </aside>

                            <div class="col-lg-9">
                                <div class="product-single-container product-single-default">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="product-single-gallery">
                                                <div class="product-slider-container product-item">
                                                    <div class="product-single-carousel owl-carousel owl-theme">
                                                     <!-- Chơi ở đây -->
                                                        <div class="product-item">
                                                            <img class="product-single-image" src="{{url('/')}}/uploads/{{$product->image}}" >
                                                        </div>
                                                        @foreach($img as $data)
                                                        <div class="product-item">
                                                            <img class="product-single-image" src="{{$data->image}}" data-zoom-image="product-single-image" src="{{$data->image}}"/>
                                                        </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                    <!-- End .product-single-carousel -->
                                                    <span class="prod-full-screen">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                </div>
                                                <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>

                                                    <div class="col-3 owl-dot">
                                                        <img src="{{url('/')}}/uploads/{{$product->image}}"/>
                                                    </div>
                                                     @foreach($img as $data)
                                                    <div class="col-3 owl-dot">
                                                        <img  src="{{$data->image}}"/>
                                                    </div>
                                                     @endforeach
                                                </div>
                                            </div><!-- End .product-single-gallery -->
                                        </div><!-- End .col-lg-7 -->

                                        <div class="col-lg-5 col-md-6">
                                            <div class="product-single-details">
                                                <h1 class="product-title">{{$product->name}}</h1>

                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->

                                                    <a href="#" class="rating-link"></a>
                                                </div><!-- End .product-container -->

                                                <div class="price-box">
                                                    <span class="old-price">{{$product->price}} Đ</span>
                                                    <span class="product-price">{{$product->sale_price}} Đ</span>
                                                </div><!-- End .price-box -->

                                                <div class="product-desc">
                                                    <p>{{$product->description}}</p>
                                                </div><!-- End .product-desc -->

                                                

                                                <div class="product-action">
                                                    <!-- <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text">
                                                    </div>
 -->
                                                    <a href="{{route('add',['id'=>$product->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                        <span>Thêm Vào Giỏ Hàng</span>
                                                    </a>
                                                </div><!-- End .product-action -->

                                                
                                            </div><!-- End .product-single-details -->
                                        </div><!-- End .col-lg-5 -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-single-container -->

                                <div class="product-single-collapse" id="productAccordion">
                                    <div class="product-collapse-panel">
                                        <h3 class="product-collapse-title">
                                            <a data-toggle="collapse" href="#product-collapse-desc" role="button" aria-expanded="true" aria-controls="product-collapse-desc">Mô Tả Sản Phẩm</a>
                                        </h3>

                                        <div class="product-collapse-body collapse show" id="product-collapse-desc" data-parent="#productAccordion">
                                            <div class="collapse-body-wrapper">
                                                <div class="product-desc-content">
                                                    <!-- <img src="{{url('/')}}/public/assetss/images/products/single/product-img.jpg" alt="image desc" class="float-right"> -->
                                                    <p>{{$product->description}}</p>
                                                          Đây là mô tả sản phẩm
                                                    <p>{{$product->description}}</p>

                                                    <br>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="feature-box feature-box-simple text-center">
                                                                <i class="icon-star"></i>

                                                                <div class="feature-box-content">
                                                                    <h3>Dịch Vụ Tận Tâm</h3>
                                                                    <p>Tham khảo ý kiến ​​các chuyên gia của chúng tôi để được giúp đỡ với một đơn đặt hàng, tùy chỉnh hoặc tư vấn thiết kế
</p>
                                                                </div><!-- End .feature-box-content -->
                                                            </div><!-- End .feature-box -->
                                                        </div><!-- End .col-md-4 -->
                                                        
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="feature-box feature-box-simple text-center">
                                                                <i class="icon-reply"></i>

                                                                <div class="feature-box-content">
                                                                    <h3>ĐỔI TRẢ MIỄN PHÍ
</h3>
                                                                    <p>Chúng tôi luôn muốn tạo niềm tin cho khách hàng khi sử dụng sản phẩm .
</p>
                                                                </div><!-- End .feature-box-content -->
                                                            </div><!-- End .feature-box -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="feature-box feature-box-simple text-center">
                                                                <i class="icon-paper-plane"></i>

                                                                <div class="feature-box-content">
                                                                    <h3>Giao Hàng Quốc Tế</h3>
                                                                    <p>Hiện tại hơn 50 quốc gia đủ điều kiện để chuyển phát nhanh quốc tế.
</p>
                                                                </div><!-- End .feature-box-content -->
                                                            </div><!-- End .feature-box -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .collapse-body-wrapper -->
                                        </div><!-- End .product-collapse-body -->
                                    </div><!-- End .product-collapse-panel -->

                                    <div class="product-collapse-panel">
                                        
                                    </div><!-- End .product-collapse-panel -->

                                    <div class="product-collapse-panel">
                                        

                                        <div class="product-collapse-body collapse" id="product-collapse-reviews" data-parent="#productAccordion">

                                        </div><!-- End .product-collapse-body -->
                                    </div><!-- End .product-collapse-panel -->
                                </div><!-- End .product-single-collapse -->
                                
                                <div class="featured-section pt-sm bg-white">
                                    <h2 class="carousel-title">Sản Phẩm Liên Quan</h2>
                                    <div class="featured-products owl-carousel owl-theme owl-dots-top">
                                        @foreach($splq as $data)
                                        <div class="product">
                                            <figure class="product-image-container">
                                                <a href="{{route('productDetail',[$data->slug,$data->id])}}" class="product-image">
                                                    <img src="{{url('/')}}/uploads/{{$data->image}}" alt="product">
                                                </a>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview">Xem nhanh</a>
                                            </figure>

                                            <div class="product-details">
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <h2 class="product-title">
                                                    <a href="product.html">{{$data->name}}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">{{$data->price}} Đ</span>
                                                </div><!-- End .price-box -->

                                                <div class="product-action">
                                                    
                                                    <a href="{{route('add',['id'=>$data->id])}}" class="paction add-cart" title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </a>

                                                   
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                        @endforeach

                                    </div><!-- End .featured-proucts -->
                                </div><!-- End .featured-section -->
                            </div><!-- End .col-lg-9 -->`
                        </div><!-- End .row -->

                        <div class="mb-lg-4"></div><!-- margin -->
                    </div><!-- End .container-fluid -->
                </div><!-- ENd .main-content -->
            </div><!-- ENd .main-container -->
        </main><!-- End .main -->
@stop
