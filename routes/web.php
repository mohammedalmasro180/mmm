<?php

use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/adminn', function () {
    return view('addminn');
});
Route::get('/body', function () {
    return view('body');
});
Route::get('/ennbody', function () {
    return view('ennbody');
});


Route::get('/test', function () {
    return view('test');
});
Route::get('/arcon', function () {
    return view('ar‏‏contact');
});
Route::get('/ed', function () {
    return view('admin.post.ed');
});


Auth::routes();
Route::post("/add","Postcontroller@addpost"); 
Route::get("/post","Postcontroller@show");
Route::put('/updatepost{id}', 'Postcontroller@updatepost');
Route::get("/all","Postcontroller@all");
//Poductscontroller
Route::post("/productadd","Poductscontroller@addProduct"); 
Route::get("/product","Poductscontroller@show");
Route::post('updatepost', 'Postcontroller@updatepost');
Route::get("/productall","Poductscontroller@all");
Route::get("/prodel{id}","Poductscontroller@del");
Route::get('/productupdate{id}', 'Poductscontroller@edit'); 
Route::post('/proupdate', 'Poductscontroller@updateProduct'); 
//Block
Route::get("/block1","BlockController@show");
Route::get("/blockk","BlockController@edit");
Route::post("/blockup","BlockController@block");
//Block
Route::get("/blockk2","BlockkController@show");
Route::get("/editblock","BlockkController@edit");
Route::post("/blockkup","BlockkController@block");

Route::get("/arblockk2","BlockController@arshow");
Route::get("/areditblock","BlockController@aredit");
Route::post("/arblockup","BlockController@arblock");

//about
Route::get("/about","Aboutcontroller@show");
Route::get("/gid{id}","Aboutcontroller@about");
Route::get("/aboutt","Aboutcontroller@newsshow");
Route::get("/news{id}","Aboutcontroller@news");
Route::get("/enaboutt","Aboutcontroller@ennewsshow");
Route::get("/ennews{id}","Aboutcontroller@ennews");

//aboutar

Route::get("/araboutt","Aboutcontroller@arshoww");
Route::get("/argid{id}","Aboutcontroller@arabout");



//Sliderscontroller


Route::post("/slideradd","Sliderscontroller@addslider"); 
Route::get("/Slider","Sliderscontroller@show");
Route::put('/updatepost{id}', 'Sliderscontroller@updatepost');
Route::get("/Sliderall","Sliderscontroller@all");
Route::get("/prodel{id}","Sliderscontroller@del");
Route::get('/sliderupdate{id}', 'Sliderscontroller@edit');   

//EmailController
Route::get("/contact","EmailController@show");
Route::post("/mail","EmailController@mail");
Route::get("/mailall","EmailController@all");
Route::get("/mdel{id}","EmailController@del");


Route::get('/en', 'Postcontroller@en'); 
Route::get('/', 'Postcontroller@ar'); 
Route::get('/update{id}', 'Postcontroller@edit'); 


//updatepost


Route::get("/del{id}","Postcontroller@del");
Route::get('/adminn', function () {
    return view('addminn');
});


Auth::routes();

Route::group(['middleware' => ['auth','isAdmin']], function () {

   
    Route::get('/dashboard', function () {
        return view('admin.admin');
    });
    
});