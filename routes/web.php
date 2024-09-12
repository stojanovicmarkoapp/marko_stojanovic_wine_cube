<?php

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

Route::get("/issues", function(){
   return view("vistas.end_user.issues");
})->name('issues');
Route::group(['middleware'=>['items']], function() {
    Route::get("/",[\App\Http\Controllers\HomeController::class,"home"])->name("home");
    Route::get("/wines",[\App\Http\Controllers\WineController::class,"wines"])->name("wines");
    Route::get("/contact",[\App\Http\Controllers\ContactController::class,"contact"])->name("contact");
    Route::get("/author",[\App\Http\Controllers\AuthorController::class,"author"])->name("author");
    Route::get("/documentation",[\App\Http\Controllers\AuthorController::class,"documentation"])->name("documentation");
    Route::get("/wines/{id}", [\App\Http\Controllers\WineController::class, "wine"])->name("wine");
        Route::post("/user/change",[\App\Http\Controllers\UserControlController::class,"change_user"])->name("user.change");
        Route::post("/review",[\App\Http\Controllers\WineController::class,"review"])->name("review");
        Route::post("/put_one_item",[\App\Http\Controllers\CartController::class,"put_one_item"])->name("put_one_item");
        Route::post("/take_one_item",[\App\Http\Controllers\CartController::class,"take_one_item"])->name("take_one_item");
        Route::post("/buy",[\App\Http\Controllers\CartController::class,"buy"])->name("buy");
        Route::post("/take_all_items",[\App\Http\Controllers\CartController::class,"take_all_items"])->name("take_all_items");
    Route::group(['middleware'=>['logged_in']], function(){
        Route::get("/user",[\App\Http\Controllers\UserControlController::class,"user_corner"])->name("user");
        Route::get("/write_checkout",[\App\Http\Controllers\CartController::class,"get_checkout"])->name("write_checkout");
        Route::get("/write_orders",[\App\Http\Controllers\CartController::class,"get_orders"])->name("write_orders");
        Route::get("/log_out",[\App\Http\Controllers\UserControlController::class,"log_out"])->name("log_out");
    });
});
Route::get("/control_panel",[\App\Http\Controllers\ControlPanelController::class,"home"])->name("control_panel.home");
Route::get("/control_panel/wines",[\App\Http\Controllers\ControlPanelController::class,"wines"])->name("control_panel.wines");
Route::get("/sign_up",[\App\Http\Controllers\UserControlController::class,"create_sign_up_form"])->name("sign_up.create");
Route::post("/sign_up",[\App\Http\Controllers\UserControlController::class,"store_sign_up_data"])->name("sign_up.store");
Route::get("/log_in",[\App\Http\Controllers\UserControlController::class,"create_log_in_form"])->name("log_in.create");
Route::post("/log_in",[\App\Http\Controllers\UserControlController::class,"log_in"])->name("log_in");
