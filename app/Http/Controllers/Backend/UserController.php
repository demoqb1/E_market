<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account; 

class UserController extends Controller
{
     public function index(){
     	$account=Account::all();
     	return view('admin.user.list',compact('account'));
     }
     public function store(){
     	$account=Account::all();
     	return view('admin.user.store',compact('account'));
     }
     public function creat(Request $req){
     	$this->validate($req,[
     		'name'=>'required',
     		'email'=>'required|email|unique:account',
     		'password'=>'required|min:6|max:20',
     		'confirm_password'=>'required',
     		'confirm_password'=>'same:password',
            'address'=>'required',
            'phone'=>'required',
            'image'=>'required',
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
            'image.required'=>'Ảnh không được để rỗng',
     	]);
     	
     	$pass = bcrypt($req->password);
     	$req->merge(['password'=>$pass]);

        if ($req->hasFile('image')) {
        $file=$req->image;
        $file_name=$file->getClientOriginalName();

        $file->move(base_path('uploads'),$file_name);
        }

      
        $account=Account::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
            'image'=>$file_name,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'status'=>$req->status,
            'level'=>$req->level,
        ]);


         if ($account) {
         	return redirect()->route('add-account')->with('Success','Thêm mới thành công');
         }
         else{
         		return redirect()->route('add-account')->with('err','Thêm mới thất bại');
         	}
         
     }

     public function delete($id){
     	$account= Account::find($id)->delete();
     	return redirect()->route('account')->with('thongbao','Đã Xóa');
     }

     public function edit($id){
     	$account=Account::find($id);   
     	return view('admin.user.edit',compact('account'));
     }

     public function update(Request $req,$id){

        if ($req->hasFile('image')) {
        $file=$req->image;
        $file_name=$file->getClientOriginalName();
        $file->move(base_path('uploads'),$file_name);
        }
      $account= account::find($id)->update([
        'name'=>$req->name,
        'email'=>$req->email,
        'image'=>$file_name,
        'address'=>$req->address,
        'phone'=>$req->phone,
      ]);
      if ($account) {
        return redirect()->route('account')->with('thongbao','Cập Nhật thành công');
      }
      
   }

}
