<?php

use App\Http\Controllers\admins\SanPhamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
//Sử dụng Route để trỏ đến view
//Cách 1:
    // Route::get('/hello',function() {
    //     return view('xinchao');
    // });
//Cách 2:
    // Route::view('/hello','xinchao');

//Truyền dữ liệu sang view
        // Route::get('/hello',function() {
        //     $title = "Tuyến đẹp trai";
        //     $text = "Siêu đẹp trai";
        //     return view('xinchao', ['title'=>$title, 'text'=>$text]);
        // });

        // Route::view('/hello','xinchao', ['title'=>'Chào Tuyến Đẹp zai', 'text'=>'I needs more power']);

// Tạo Route trỏ đến hàm trong controller
        // Route::get('/san_pham', [SanPhamController::class, 'index']);
        Route::get('/khach_hang', [KhachHangController::class, 'index']);
        
        Route::get('/add_khach_hang',[HomeController::class, 'addKhachHang']);
        Route::post('/post_khach_hang', [KhachHangController::class, 'postKhachHang']);

        Route::get('/edit_khach_hang', [HomeController::class, 'updateKhachHang']);
        Route::post('/update_khach_hang', [KhachHangController::class, 'updateKhachHang']);

        Route::resource('sanpham', SanPhamController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
