<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImgProduct;
use DB;

class ProductController extends Controller
{  
   public function index(){
    
   	$category=category::all();
   	return view ('admin.product.create',compact('category'));
   }
   
   public function addProduct(Request $req){
    $listImage=json_decode($req->image1);
      $this->Validate($req,[

      	'name'=>'required|unique:category',
      	'image'=>'required',
      	'description'=>'required',
      	'price'=>'required',
      	'hot_pro'=>'required',
      	'status'=>'required',
      	'image1'=>'required',
      ],[

      	'name.required'=>'Tên Sản Phẩm Không Được Để Rỗng',
      	'name.unique'=>'Tên Sản Phẩm phải là duy nhất',
      	'description.required'=>'Nhập vào Mô Tả',
      	'price.required'=>'Giá không được để rỗng',
      	'hot_pro.required'=>'Vui lòng chọn trạng thái',
      	'status.required'=>'Vui lòng chọn trạng thái ',
      	'image.required'=>'Vui lòng chọn Ảnh ',
      	'image1.required'=>'Vui lòng chọn Ảnh Mô tả'

      ]);
      $file_name= $req->image;
      $image=str_replace(url('/uploads').'/','',  $file_name);
      $req->merge(['image'=>$image]);
      $pro=product::create($req->all());
      foreach ($listImage as $key => $value) {
       DB::table('img_product')->insert([
            'id_product'=>$pro->id,
            'image'=>$value,
      ]);
      }
      
     	if ($pro) {
     		return redirect()->route('listproduct')->with('sucsses','Thêm mới thành công');
     	}
     	else {
     		return redirect()->back()->with('er','Thêm mới thất bại');
     	}

   }

   	public function showPro(){
   			$product=Product::all();
        $product=Product::paginate(8);
   			$category=category::all();
   		return view('admin.product.create',compact('product','category'));
   }

   public function listDetail(){
   	$product=Product::all();
    $product=Product::paginate(10);
   	$imgproduct=ImgProduct::all();
   	
   		return view('admin.product.index',compact('product','imgproduct'));
   }




   public function delete($id){
    $product=product::find($id)->delete();
    return redirect()->route('listDetail')->with('thongbao','Xóa thành công');
   }
   

   public function edit ($id){
      $product=Product::find($id); 
      $category=Category::all();
      return view ('admin.product.edit',compact('product','category'));
   }

   public function update(Request $req,$id){

   	$this->Validate($req,[

   		'name'=>'required',
      	'image'=>'required',
      	'description'=>'required',
      	'price'=>'required',
      	'hot_pro'=>'required',
      	'status'=>'required',
      ],[
      	'name.required'=>'Tên Sản Phẩm Không Được Để Rỗng',
      	'description.required'=>'Nhập vào Mô Tả',
      	'price.required'=>'Giá không được để rỗng',
      	'hot_pro.required'=>'Vui lòng chọn trạng thái',
      	'status.required'=>'Vui lòng chọn trạng thái ',
      	'image.required'=>'Vui lòng chọn Ảnh ',
      ]);

   	 $product= Product::find($id);
     
       if ($req->hasFile('image')) {
        $file=$req->image;
        $file_name=$file->getClientOriginalName();
        $file->move(base_path('uploads'),$file_name);
      }
      else{
        $file_name=$product->image;
      }
      
      $pro= Product::find($id)->update([
        'name'=>$req->name,
        'cate_id'=>$req->cate_id,
        'price'=>$req->price,
        'sale_price'=>$req->sale_price,
        'image'=>$file_name,
        'status'=>$req->status,
        'hot_pro'=>$req->hot_pro,
        'status'=>$req->status,
        'description'=>$req->description,
        'slug'=>$req->slug
      ]);
      
      if ($pro) {
        return redirect()->route('listDetail')->with('mes','Cập Nhật thành công');
      }
      
   }
}
