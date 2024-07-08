<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vasthraController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[vasthraController::class,'index']);
Route::post('/contactAction',[vasthraController::class,'contactAction']);


Route::get('/adminindex',[adminController::class,'adminindex']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::post('/addaboutAction',[adminController::class,'addaboutAction']);
Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/viewaboutedit/{id}',[adminController::class,'viewaboutedit']);
Route::post('/editviewaboutAction/{id}',[adminController::class,'editviewaboutAction']);
Route::get('/viewaboutdelete/{id}',[adminController::class,'viewaboutdelete']);
Route::get('/addcategory',[adminController::class,'addcategory']);
Route::post('/addcategoryAction',[adminController::class,'addcategoryAction']);
Route::get('/viewcategory',[adminController::class,'viewcategory']);
Route::get('/viewcatedit/{id}',[adminController::class,'viewcatedit']);
Route::post('/editcategoryAction/{id}',[adminController::class,'editcategoryAction']);
Route::get('/viewcatdelete/{id}',[adminController::class,'viewcatdelete']);
Route::get('/addproducts',[adminController::class,'addproducts']);
Route::post('/addproductAction',[adminController::class,'addproductAction']);
Route::get('/viewproducts',[adminController::class,'viewproducts']);
Route::get('/viewproductsedit/{id}',[adminController::class,'viewproductsedit']);
Route::post('/viewproductsupdateAction/{id}',[adminController::class,'viewproductsupdateAction']);
Route::get('/viewproductsdelete/{id}',[adminController::class,'viewproductsdelete']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/viewcontact',[adminController::class,'viewcontact']);
Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminloginAction',[adminController::class,'adminloginAction']);
Route::get('/adminlogout',[adminController::class,'adminlogout']);




Route::get('/userindex',[userController::class,'userindex']);
Route::get('/userregister',[userController::class,'userregister']);
Route::post('/userregAction',[userController::class,'userregAction']);
Route::post('/userloginAction',[userController::class,'userloginAction']);
Route::get('/addcart/{id}',[userController::class,'addcart']);
Route::post('/addcartAction/{id}',[userController::class,'addcartAction']);
Route::get('/cartdelete/{id}',[userController::class,'cartdelete']);
Route::get('/userviewcart',[userController::class,'userviewcart']);
Route::get('/userprofile',[userController::class,'userprofile']);
Route::get('/userlogout',[userController::class,'userlogout']);
// Route::get('/addingproducts/{val}',[userController::class,'addingproducts']);
Route::get('/placeorder',[userController::class,'placeorder']);
Route::post('/placeorderAction',[userController::class,'placeorderAction']);
Route::get('/proceed_to_pay',[userController::class,'proceed_to_pay']);
Route::get('/payment',[userController::class,'payment']);
Route::get('/message',[userController::class,'message']);