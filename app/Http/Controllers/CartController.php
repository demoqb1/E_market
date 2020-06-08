<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImgProduct;
use DB;
use App\Helper\CartHelper;

class CartController extends Controller
{   

     public function add(CartHelper $cart,$id){

     $product=Product::find($id);
     $cart->add($product);
     return view('view-cart');
     }

     public function delete(CartHelper $cart,$id){
            
            $cart->delete($id);
            return redirect()->route('show-cart');
     }
     public function showcart(){
          return view('view-cart');
     }

      public function update(CartHelper $cart,Request $req ){
          
          $id=$req->id;
          $quantity=$req->quantity;
          //dùng hàm ceil làm tròn số lượng
          $cart->update($id,ceil(abs($quantity)));
          
          return redirect()->route('show-cart');
     }

     public function deleteAll(CartHelper $cart,Request $req ){
          $cart->clear();
          return redirect()->route('show-cart');
     }
}
