

<?php 
      Route::get('','HomeController@index')->name('homepage');
      Route::get('producttype','HomeController@show')->name('producttype');
      Route::get('{slug}/{id}.html','HomeController@productDetail')->name('productDetail');
      Route::get('productAll','HomeController@showproduct')->name('productAll');
      

      //Route sản phẩm theo danh mục 
      Route::get('producta','HomeController@producta')->name('producta');
      Route::get('productb','HomeController@productb')->name('productb');
      Route::get('productc','HomeController@productc')->name('productc');
      Route::get('productd','HomeController@productd')->name('productd');
      Route::get('producte','HomeController@producte')->name('producte');
      Route::get('productf','HomeController@productf')->name('productf');
      Route::get('productg','HomeController@productg')->name('productg');

      Route::get('showhotpro','HomeController@showProHot')->name('showhotpro');

 
      // Route logout,login người dùng
      Route::post('logon','HomeController@logon')->name('logon');
      Route::get('logoutCustomer','HomeController@logoutCustomer')->name('logoutCustomer');
      Route::get('dangky','HomeController@dangky')->name('dangky');
      Route::post('dangky','HomeController@postDangky');
      
      Route::post('logon','HomeController@logon')->name('logon');
      
      Route::get('checkout','HomeController@checkout')->name('checkout');
      Route::post('checkout','HomeController@postcheckout')->name('postcheckout');
      Route::get('search','HomeController@search')->name('search');
      
   
   //Route Danh Mục
   	Route::Group(['prefix'=>'backend','namespace'=>'Backend','middleware'=>'auth'],function(){
   	Route::get('/','BackendController@index')->name('home');
   	Route::get('category','CategoryController@index')->name('category');
   	Route::post('addCate','CategoryController@addCate')->name('addCate');
   	Route::get('delete-category/{id}','CategoryController@deleteCategory')->name('delete-category');

   	Route::get('edit-cate/{id}','CategoryController@editCategory')->name('edit-category');
   	
   	Route::post('edit-cate/{id}','CategoryController@updateCategory')->name('edit-category');
       Route::get('search','BackendController@search')->name('search-admin');
   
   //Route Sản Phẩm
   	Route::get('add-product','ProductController@index')->name('addProduct'); 
      Route::post('add-product','ProductController@addProduct')->name('PostaddProduct'); 
      Route::get('listproduct','ProductController@showPro')->name('listproduct');       
      Route::get('listDetail','ProductController@listDetail')->name('listDetail');       
      Route::get('deleteProduct/{id}','ProductController@delete')->name('deleteProduct');       
      Route::get('editProduct/{id}','ProductController@edit');   
      Route::post('editProduct/{id}','ProductController@update')->name('editProduct');       
   //Route cho user
      Route::get('add-account','UserController@index')->name('add-account');
      Route::post('add-account','UserController@creat')->name('post-add-account');
      Route::get('account','UserController@store')->name('account');
      Route::get('delete-account/{id}','UserController@delete')->name('delete-account');
      Route::get('edit-account/{id}','UserController@edit')->name('edit-account');
      Route::post('edit-account/{id}','UserController@update')->name('post-edit-account');

      //Route quản lý đơn hàng
      Route::get('order','BackendController@order')->name('order');
      Route::get('orderDetail/{id}','BackendController@orderDetail')->name('orderDetail');
      Route::post('orderDetail/{id}','BackendController@updateOrder')->name('updateOrder');

     
   });

      Route::get('login','Backend\BackEndController@login')->name('login');
      Route::post('login','Backend\BackEndController@postLogin');
      Route::get('logout','Backend\BackEndController@logout')->name('logout');


     //Route cho cart
      Route::Group(['prefix'=>'cart'],function(){
             Route::get('add/{id}','CartController@add')->name('add');
             Route::get('delete/{id}','CartController@delete')->name('delete');
             Route::get('/','CartController@showcart')->name('show-cart');
             Route::post('update','CartController@update')->name('update');
             Route::get('deleteAll','CartController@deleteAll')->name('deleteAll');

   });


   	


  
 ?>



