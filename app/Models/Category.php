<?php 
   
   namespace App\Models;
   use Illuminate\Database\Eloquent\Model;
   Class Category extends Model
    {
        protected $table='category';
        protected $fillable=['name','status','type'];
    }



 ?>