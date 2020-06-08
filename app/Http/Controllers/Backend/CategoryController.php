<?php 
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

CLass CategoryController extends Controller
{

    public function index()
    {
    	$category=category::paginate(6);
        return view ('admin.category.index',compact('category'));
    }

    public function addCate(Request $req){
    	$this->validate($req,[
    		'name'=>'required|unique:category',
    		'status'=>'required',
    		'type'=>'required'
    	],[
             'name.required'=>'Vui lòng nhập tên vào input',
             'name.unique'=>'Tên đã tồn tại',
             'status.required'=>'Vui lòng chọn trạng thái',
             'type.required'=>'Vui lòng Phân loại'
    	]);
       $inputF=Category::create($req->all());
       if ($inputF) {
       	return redirect()->back()->with('succsess','Thêm mới thành công');
       }
    }

    public function deleteCategory($id){
    	$delete=category::find($id)->delete();
    	if ($delete) {
    		return redirect()->back()->with('alertCucsses','Xóa Thành Công');
    	}
    	else{
    		return redirect()->back()->with('alertErrors','Lỗi');
    	}
    }	

    public function editCategory($id){
    	$model=category::where('id',$id)->first();
      return view ('admin.category.edit',compact('model'));

    }

    public function updateCategory(Request $req,$id){
      

      $this->validate($req,[
    		'name'=>'required',
    		'status'=>'required',
    		'type'=>'required'
    	],[
             'name.required'=>'Vui lòng nhập tên vào input',
             'status.required'=>'Vui lòng chọn trạng thái',
             'type.required'=>'Vui lòng Phân loại'
    	]);

         $data=category::find($id)->update([
         	'name'=>$req->name,
         	'status'=>$req->status,
         	'type'=>$req->type,
         ]);
         if ($data) {
         	return redirect()->route('category')->with('succsess','Cập Nhật thành công');
         }
      


    }
}
 ?>