<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\loginController;
/* ('/', function () {
    return view('posts', ['posts' => Post::all()]);
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Route::get('login', [loginController::class,'index']);
Route::post('login', [loginController::class,'loginSubmit'])->name('login.submit');
Route::get('login/{d}/{e}/{f}', [loginController::class,'indexx']);





Route::get('/', function () {
	$d=new Post; dd($d->all()->$files);
});

route::view("tt", "welcome");

Route::get('post/{post}', function ($slug) {

    $post= Post::find($slug);



    return view('post', ['post' => $post]);
}) ->where('$post', '[A-z_\-');
