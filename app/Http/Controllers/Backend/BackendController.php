<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Account;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

CLass BackendController extends Controller
{

    public function index()
    {
    	return view('admin.master');
    }

    public function addCate()
    {
      
    }
     public function login(){
        return view('admin.login');
     }
     // đăng nhập
     public function postLogin(Request $req){
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email không được để rỗnggggg',
            'password.required'=>'mật khẩu không được để rỗng'
        ]);
          //    $data=[
      //   'email'=>$req->email,
      //   'password'=>$req->password,
      //   'level'=>1,
      // ];
      // if(Auth::attempt($data)){
      //   return redirect()->back();
      // }else{
      //   echo " no ok";
      // }
        //------------------------------
          //        $demo=$req->only('email','password')->where('level',1);
          //      if(Auth::attempt($demo)){
          // return redirect()->back();
          //      }
          //-------------------------
     //    if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1])) {
     //      return redirect()->back();
     //      }
     // }
        // if (Auth::attempt(array('email' => $email, 'password' => $password), Input::has('remember_me')))

          
			if(Auth::attempt([
                'email'=>$req->email,
                'password'=>$req->password,
                'level'=>1,
            ], 
            Input::has('remember'))){
        
    		return redirect()->route('home');
    	}
    	else{
    		return redirect()->route('login')->with('succsess','Bạn không có quyền vào trang này');
    	}
    }

     public function logout(){
         Auth::logout();
        return redirect()->route('login');
     } 


     public function order(){
        $order=order::all();
        // dd($order);
        $account=Account::all();
        
        return view ('admin.order.index',compact('order','account'));
     }

     public function orderDetail($id){

        $orderDetail=order::find($id);
        $id_us=order::find($id)->cus_id;
        $us=Account::find($id_us);
        
        return view ('admin.order.detail',compact('orderDetail','us'));
     }

     public function updateOrder(Request $req,$id){

        $od=Order::find($id)->update(['status'=>$req->status]);
        if ($od) {
            return redirect()->route('order')->with('succsess','Cập Nhật Trạng Thái Thành Công');
        }
        
     }
     public function search (Request $req  ){
    $product=Product::where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
    return view ('admin.viewsearch',compact('product'));
     }

}
 ?>


