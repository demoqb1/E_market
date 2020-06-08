<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Chào mừng đến với trang quản trị</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{url('/')}}/public/admin/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/vendor/bootstrap/{{url('/')}}/public/admin/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/fonts/font-awesome-4.7.0/{{url('/')}}/public/admin/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/css/util.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/css/main.css">

</head>
<body>
<div class="limiter">
  <div class="container-login100">
     <div class="wrap-login100">
         <div class="login100-pic js-tilt" data-tilt>
       <img src="{{url('/')}}/public/admin/images/img-01.png" alt="IMG">
     </div>

<form class="login100-form validate-form" method="POST" action="{{route('login')}}">
  @csrf
    <span class="login100-form-title">Chào Bạn Đến Với Trang Quản Trị Viên</span>
     <div class="wrap-input100 validate-input" >
      <input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}">

        
         @if($errors->has('email'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('email')}}
     </div>
      @endif

      <span class="focus-input100"></span>
      <span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span>
    </div>
  <div class="wrap-input100 validate-input" >
    <input class="input100" type="password" name="password" placeholder="Mật Khẩu" value="{{old('password')}}">
      @if($errors->has('password'))
      <div class="alert alert-danger" role="alert">
      {{$errors->first('password')}}
     </div>
      @endif
    <!-- validate cho quyền quản trị -->
      @if($mes= Session::get('succsess'))
 <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$mes}}</strong> 
 </div>
  @endif
        <span class="focus-input100"></span>
          <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
  </div>
<div class="col-xs-6">
          <div class="checkbox icheck">
            <label >
              <input  type="checkbox"  name="remember"> Nhớ Mật Khẩu
            </label>
          </div>
        </div>
<div class="container-login100-form-btn">
        
<button class="login100-form-btn">Đăng Nhập</button>
</div>
<div class="text-center p-t-12">
  <span class="txt1">Quên</span>
    <a class="txt2" href="#">Tên người dùng / Mật Khẩu?</a></div>
      <!-- <div class="text-center p-t-136"><a class="txt2" href="#">Create your Account -->
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></a>
</div>
</form>
</div>
</div>
</div>

<script src="{{url('/')}}/public/admin/vendor/jquery/jquery-3.2.1.min.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>

<script src="{{url('/')}}/public/admin/vendor/bootstrap/{{url('/')}}/public/admin/js/popper.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>
<script src="{{url('/')}}/public/admin/vendor/bootstrap/{{url('/')}}/public/admin/js/bootstrap.min.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>

<script src="{{url('/')}}/public/admin/vendor/select2/select2.min.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>

<script src="{{url('/')}}/public/admin/vendor/tilt/tilt.jquery.min.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>
<script type="478fce0291f8f324ba11b9e5-text/javascript">
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="478fce0291f8f324ba11b9e5-text/javascript"></script>
<script type="478fce0291f8f324ba11b9e5-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>

<script src="{{url('/')}}/public/admin/js/main.js" type="478fce0291f8f324ba11b9e5-text/javascript"></script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="478fce0291f8f324ba11b9e5-|49" defer=""></script></body>

</html>

