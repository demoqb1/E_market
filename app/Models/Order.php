<?php 
   
   namespace App\Models;
   use Illuminate\Database\Eloquent\Model;
   Class Order extends Model
    {
        protected $table='orders';
        protected $fillable=['cus_id','status'];


        public function us(){
         return $this ->hasOne('App\Models\Account','id','cus_id');
         }

        public function detail(){
         return $this ->hasMany('App\Models\OrderDetail','order_id','id');
        }
    
    }
    

 ?>