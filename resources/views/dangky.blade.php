<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Đăng ký</title>

<link rel="stylesheet" href="{{url('/')}}/public/login/fonts/material-icon/{{url('/')}}/public/login/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="{{url('/')}}/public/login/css/style.css">
</head>
<body>
<div class="main">

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
        <h2 class="form-title">Đăng Ký Tài Khoản</h2>

 @if($mes= Session::get('thongbao'))
 <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$mes}}</strong> 
 </div>
  @endif

 
<form method="POST" class="register-form" id="register-form">
@csrf

    <div class="form-group">
        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
        <input type="text" name="name"  placeholder="Họ Và Tên" />

        @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
    </div>

    <div class="form-group">
        <label for="email"><i class="zmdi zmdi-email"></i></label>
        <input type="email" name="email"  placeholder="Email" />

        @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
    </div>

    <div class="form-group">
        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
        <input type="password" name="password" id placeholder="Mật Khẩu" />

        @if($errors->has('password'))
                {{$errors->first('password')}}
            @endif
    </div>

    <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="password" name="confirm_password"  placeholder="Nhập Lại Mật Khẩu" />
        @if($errors->has('confirm_password'))
                {{$errors->first('confirm_password')}}
            @endif
    </div>
    
      <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="text" name="address"  placeholder="Địa chỉ" />
        @if($errors->has('address'))
                {{$errors->first('address')}}
            @endif
    </div>

      <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="text" name="phone" placeholder="Số Điện Thoại" />
        @if($errors->has('phone'))
                {{$errors->first('phone')}}
            @endif
    </div>
    
    <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="hidden" name="status" placeholder="trạng thái"  value="1" /> 
    </div>

    <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <input type="hidden" name="level" placeholder="phân cấp" value="0" />
    </div>
   
    

    <div class="form-group form-button">
     <input type="submit" class="form-submit" value="Đồng ý" />
    </div>
</form>
</div>

<div class="signup-image">
<figure><img src="{{url('/')}}/public/login/images/signup-image.jpg" alt="sing up image"></figure>
<a href="#" class="signup-image-link">TÔI ĐÃ CÓ TÀI KHOẢN</a>
</div>

</div>
</div>
</section>


</div>

<script src="{{url('/')}}/public/login/vendor/jquery/jquery.min.js" type="2a53dd4c4e8edec4539608fd-text/javascript"></script>
<script src="{{url('/')}}/public/login/js/main.js" type="2a53dd4c4e8edec4539608fd-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2a53dd4c4e8edec4539608fd-text/javascript"></script>
<script type="2a53dd4c4e8edec4539608fd-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2a53dd4c4e8edec4539608fd-|49" defer=""></script></body>

</html>