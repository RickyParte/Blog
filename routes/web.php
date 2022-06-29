<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
Route::view('welcome', 'welcome');
Route::get('/',[UserController::class,'userViewBlog']);

Route::get('admin/dashboard', function () {
    return view('dashboard');
});
Route::view("/admin/addblog","addblog");
Route::view("/admin/viewblog","viewblog");
Route::view("/admin/login","login");
Route::view("/admin/register","register");
Route::post("/register",[LoginController::class,"registerUser"]);
Route::post("/login",[LoginController::class,"loginUser"]);
Route::post("/addpost",[UserController::class,"addPost"]);
Route::get("/admin/viewblog",[UserController::class,"retrievePostByUser"]);
Route::get("/edit/{id}",[UserController::class,"retrievePostById"]);
Route::view("edit","edit");
Route::post("updatepost/{id}",[UserController::class,"updatePost"]);
Route::get("delete/{id}",[UserController::class,"deletePost"]);
// Route::post();
