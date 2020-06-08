<?php 
   
   namespace App\Models;
   use Illuminate\Database\Eloquent\Model;
   Class Product extends Model
    {
        protected $table='product';
        protected $fillable=['name'	,'slug','cate_id','color_id','image','description','price','sale_price','hot_pro','status'];
    
    public function category(){
    		// 1 sản phẩm sẻ có 1 danh mục 
    		return $this ->hasOne('App\Models\Category','id','cate_id');
    	}

     

    	// public function ImgProduct(){
    	// 	// 1 sản phẩm sẻ có 1 danh mục 
    	// 	return $this ->hasMany('App\Models\ImgProduct','id_product','image');
    	// }
    }

 ?>