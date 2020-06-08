<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2019 04:12:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>All in One by Group 3</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('/')}}/public/assetss/images/images.png">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url('/')}}/public/assetss/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('/')}}/public/assetss/css/style.min.css">
    <style>
        .logo-light{
             width: 30% !important;
             
        }
        
        .home-slide .slide-bg owl-lazy{
            width: 100% !important;
        }
        .home-slide-content p{
            color: black;
        }
    </style>
</head>
 @if($mes= Session::get('Success'))
 <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$mes}}</strong> 
 </div>
  @endif
  
<body class="homepage" data-spy="scroll" data-target="#category-list" data-offset="130">
    <div class="page-wrapper">
        <header class="header header-transparent">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <a href="{{route('producttype')}}" class="logo">
                            <img src="{{url('/')}}/public/assetss/images/download1.png" class="logo-dark">

                           
                           <!--  <img src="{{url('/')}}/public/assetss/images/download2.png" class="logo-light"  > -->
                        </a>
                            
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                
                                 

                                @if(Auth::check())
                                <li class="active"><a href="">{{Auth::user()->email}}</a></li>
                                @endif
                                
                             
                                <li class="active"><a href="{{route('homepage')}}">Trang chủ</a></li>
                                
                                <li >
                                    <a href="{{route('productAll')}}" >Sản phẩm</a>
                                    
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Xem Nhiều</a>

                                    <ul>
                                        <li><a href="cart.html">Giỏ Hàng</a></li>
                                        <li><a href="{{route('checkout')}}">Thủ tục thanh toán</a>
                                            <ul>
                                                <li><a href="checkout-shipping.html">Trạng khái giao hàng</a></li>
                                                <!-- <li><a href="checkout-review.html">Checkout Review</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="my-account.html">Tài khoản của bạn</a>
                                        </li>
                                         <li><a href="{{route('dangky')}}">Đăng kí</a>
                                        </li>
                                        
                                        <li><a data-toggle="modal" href='#modal-id' >Đăng nhập</a></li>
                                        <li><a href="{{route('logoutCustomer')}}">Đăng Xuất</a>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                         
                        <div class="header-contact">
                            <div class="widget widget-search">
                                        <form  method="get"  action="{{route('search')}}">
                                            @csrf
                                            <input type="search" class="form-control" placeholder="Nhập Từ Khóa" name="key" >
                                            <button type="submit" class="search-submit" title="Search">
                                                <i class="icon-search"></i>
                                                <span class="sr-only">Tìm kiếm</span>
                                            </button>
                                        </form>
                                    </div>
                        </div><!-- End .header-contact -->
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            @if(auth::check())
                                <span class="cart-count">{{$cart->total_quantity}}</span>
                            @endif
                            </a>

                            <div class="dropdown-menu" >
                                @if(auth::check())
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">

                                        @foreach($cart->items as $cc)
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="">{{$cc['name']}}</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">{{$cc['quantity']}}</span>
                                                    x {{$cc['price']}}
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="" class="product-image">
                                                    <img src="{{url('/')}}//uploads/{{$cc['image']}}" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->
                                        @endforeach
                                        
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Tổng</span>

                                        <span class="cart-total-price">{{$cart->total_price}}</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{route('show-cart')}}" class="btn">Xem Giỏ Hàng</a>
                                        <a href="{{route('checkout')}}" class="btn">Thanh Toán</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                                 @endif
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
     <div class="home-slider-container">
                <div class="home-slider owl-carousel owl-theme">
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy" data-src="{{url('/')}}/public/assetss/images/slider/slide-1.jpg"></div><!-- End .slide-bg -->
                        
                        <div class="home-slide-content container">
                            <div class="slide-content-wrapper">
                                <h3>TƯNG BỪNG KHAI TRƯƠNG</h3>
                                <h1>KHUYẾN MÃI TỚI<br>70% </h1>
                                <a href="{{route('producta')}}" class="btn btn-outline-primary">MUA NGAY!</a>
                            </div><!-- End .slide-content-wrapper -->
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->

                    <div class="home-slide">
                        <div class="slide-bg owl-lazy" data-src="{{url('/')}}/public/assetss/images/iphone-11-mockups.jpg"></div><!-- End .slide-bg -->
                        <div class="home-slide-content container">
                            <div class="row">
                                <div class="col-md-6 offset-md-6">
                                    <p>Sản phẩm được ưa chuộng nhất trong năm!</p>
                                    <h3></h3>
                                    <h1 class="smaller">Iphone 11 max pro</h1>
                                    <a href="{{route('productb')}}" class="btn btn-outline-primary">Mua ngay!</a>
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->
            
        @yield('main')

        <footer class="footer">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget widget-about">
                                <h4 class="widget-title">Có thể bạn chưa biết!</h4>
                                <p>Website của chúng tôi bán tất cả mọi thứ từ trên trời cho xuống dưới đáy đại dương.Nếu không tin bạn hãy quay lên trên để xem lại 1 lần nữa :v. Cảm ơn nhiều!!!</p>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-5 -->

                        

                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="widget-title">Thông tin liên lạc</h4>
                                        <ul class="contact-info">
                                            <li>
                                                <span class="contact-info-label">Địa chỉ:</span>Bkap
                                            </li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <ul class="contact-info">
                                            <li>
                                                <span class="contact-info-label">Điện thoại:</span>Đường dây nóng: <a href="tel:">(123) 456-789</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Email:</span> <a href="">bkap@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div>

                              <div class="col-lg-3">
                                      <div class="widget widget-social">
                                            <div class="social-icons">
                                                 <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                                 <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                                 <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                                    </div><!-- End .social-icons -->
                                     </div><!-- End .widget -->
                                     </div>
                        <!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .footer-top -->

            

            <div class="footer-bottom">
                <div class="container-fluid">
                    <p class="footer-copyright">Hỗ trợ thanh toán qua các thẻ sau</p>
                    <img src="{{url('/')}}/public/assetss/images/payments.png" alt="payment methods" class="footer-payments">
                </div><!-- End .container-fluid -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{url('/')}}/public/assetss/js/jquery.min.js"></script>
    <script src="{{url('/')}}/public/assetss/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/public/assetss/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="{{url('/')}}/public/assetss/js/main.min.js"></script>


    <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="mfp-content"><div class="modal-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="title mb-8">Đăng Nhập</h2>

                <form action="{{route('logon')}}" class="mb-1" method="POST">
                    @csrf
                    <label for="login-email">Email <span class="required">*</span></label>
                    <input type="email" class="form-input form-wide mb-2" id="login-email" name="email">

                    @if($errors->has('email'))
                     <div class="help-block">
                    {{$errors->first('email')}}
                    </div>
                     @endif

                    <label for="login-password">Mật Khẩu <span class="required">*</span></label>
                    <input type="password" class="form-input form-wide mb-2" id="login-password" name="password">

                    @if($errors->has('password'))
                     <div class="help-block">
                    {{$errors->first('password')}}
                    </div>
                     @endif
                    <a href="{{route('dangky')}}" class="forget-password"> Bạn chưa có tài khoản ?</a> 
                    <div class="form-footer"    >
                        <button type="submit" class="btn btn-primary btn-md">Đăng Nhập</button>

                        <div class="custom-control custom-checkbox form-footer-right">
                            <input type="checkbox" class="custom-control-input" id="lost-password">
                            <label class="custom-control-label form-footer-right" for="lost-password">Nhớ Mật Khẩu</label>
                        </div>
                    </div><!-- End .form-footer -->
                   
                </form>
            </div><!-- End .col-md-6 -->

            
        </div><!-- End .row -->
    </div><!-- End .container -->

    
<button title="Close (Esc)" type="button" class="mfp-close">×</button></div></div>
                </div>
               
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2019 04:12:56 GMT -->
</html>