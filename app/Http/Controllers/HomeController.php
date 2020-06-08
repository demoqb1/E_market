<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ImgProduct;
use App\Models\Account;
use DB;
use Auth;
use App\Helper\CartHelper;
use Mail;

class HomeController extends Controller
{ 
     public function index(){
     	$producta=Product::where('cate_id',13)->where('status',1)->limit(5)->get();
     	$productb=Product::where('cate_id',14)->where('status',1)->limit(5)->get();
     	$productc=Product::where('cate_id',15)->where('status',1)->limit(5)->get();
     	$productd=Product::where('cate_id',16)->where('status',1)->limit(5)->get();
     	$producte=Product::where('cate_id',17)->where('status',1)->limit(5)->get();
     	$productf=Product::where('cate_id',18)->where('status',1)->limit(5)->get();
     	$productg=Product::where('cate_id',19)->where('status',1)->limit(5)->get();
     	return view ('index',compact('producta','productb','productc','productd','producte','productf','productg'));
     }
    
     public function producta(){
      $product=Product::where('cate_id',13)->where('status',1)->get();
      return view ('producta',compact('product'));
     }

     public function productb(){
      $product=Product::where('cate_id',14)->where('status',1)->get();
      return view ('productb',compact('product'));
     }

     public function productc(){
      $product=Product::where('cate_id',15)->where('status',1)->get();
      return view ('productc',compact('product'));
     }
     public function productd(){
      $product=Product::where('cate_id',16)->where('status',1)->get();
      return view ('productd',compact('product'));
     }
     public function producte(){
      $product=Product::where('cate_id',17)->where('status',1)->get();
      return view ('producte',compact('product'));
     }
     public function productf(){
      $product=Product::where('cate_id',18)->where('status',1)->get();
      return view ('productf',compact('product'));
     }
     public function productg(){
      $product=Product::where('cate_id',19)->where('status',1)->get();
      return view ('productg',compact('product'));
     }

     public function show(){
     	$hot_pro=Product::where('status',1)->where('hot_pro',1)->limit(5)->get();
     	$sale_pro=Product::where('status',1)->where('sale_price','>',0)->limit(5)->get();
     	$new_pro=Product::where('status',1)->orderBy('created_at','desc')->limit(6)->get();
     	return view ('producttype',compact('hot_pro','sale_pro','new_pro'));
     }

     public function showProHot(){
      $hot_pro=Product::where('status',1)->where('hot_pro',1)->get();
      return view ('showhotpro',compact('hot_pro'));
     }

     public function productDetail( $slug,$id){
     	$product=Product::find($id);
     	$img=ImgProduct::where('id_product',$id)->get();
     	$splq=Product::where('cate_id',$product->cate_id)->where('id','<>',$id)->get();
     	return view('productDetail',compact('product','img','splq'));
     }

     public function showproduct(){
     	$product=Product::all();
     	return view ('productAll',compact('product'));
     }

     public function logon(Request $req){
        $this->validate($req,[
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ],[
            'email.required'=>'Email không được để rỗng',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'mật khẩu không được để rỗng',
            'password.min'=>'mật khẩu ít nhất 6 ký tự', 
            'password.max'=>'mật khẩu không được quá 20 kí tự', 
        ]);

                 $demo=$req->only('email','password');

               if(Auth::attempt($demo  )){
          return redirect()->back();
               }
     }

     public function logoutCustomer(){
       Auth::logout();
       return redirect()->route('homepage');
     }     
    


    public function dangky(){

      return view ('dangky');
    }



     public function postDangky(Request $req){
       $this->validate($req,[
        'name'=>'required',
        'email'=>'required|email|unique:account',
        'password'=>'required|min:6|max:20',
        'confirm_password'=>'required',
        'confirm_password'=>'same:password',
        'address'=>'required',
        'phone'=>'required',
        
      ],[ 
        'name.required'=>'Tên không được để rỗng',
        'email.required'=>'Nhập vào email',
        'email.email'=>'Không đúng định dạng',
         'email.unique'=>'email đã có người sử dụng',
        'password.required'=>'Mật khẩu không được để rỗng',
         'password.min'=>'Mật khẩu ít nhất 6 ký tự',
        'confirm_password.required'=>' khẩu không được để rỗng',
        'confirm_password.same'=>'Xác nhận mật khẩu không đúng',
         'address.required'=>'Địa Chỉ không được để rỗng',
         'phone.required'=>'SDT không được để rỗng',
         
      ]);
      
      $pass = bcrypt($req->password);
      $req->merge(['password'=>$pass]);

        $account=Account::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'status'=>$req->status,
            'level'=>$req->level,
        ]);


         if ($account) {
          return redirect()->route('homepage')->with('Success','Đăng ký thành công, bây giờ bạn có thể đăng nhập để mua hàng');
         }
         else{
            return redirect()->route('add-account')->with('err','Thêm mới thất bại');
          }
         
     }

     
     
     public function checkout(){
          return view('checkout');
     }

     public function postcheckout(CartHelper $cart,Request $req){
       $or =order::create([
          'cus_id'=>Auth::id(), 
       ]);
       $order = order::orderBy('id','desc')->limit(1)->first();
       foreach ($cart->items as $value) {
           $od=OrderDetail::create([
          'order_id'=>$or->id,
          'product_id'=>$value['id'],
          'quantity'=>$value['quantity'],
          'price'=>$value['price']
       ]);
       }
          
       
        // $data=[
        //   'name'=>$req->name,
        //   'email'=>$req->email,
        // ];
        // $email=[
        //   $data['email'],
        //   'quyhoang.gtvt@gmail.com',
        // ];
          
        // Mail::send('viewmail',$data,function($mes) use ($data,$email){
        //   $mes->form('demobkap123@gmail.com');
        //   $mes->to($email,'viewmail')->subject('Thank');
        // });
        
        $cart->clear();
        return redirect()->route('show-cart')->with('success','Bạn Đã Đặt Hàng Thành Công');
     }
   
     
     public function search (Request $req  ){
    $product=Product::where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
    return view ('viewseach',compact('product'));
     }

 }   


?>
