<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SanPhamController;
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
        Route::get('/san_pham', [SanPhamController::class, 'index']);
        Route::get('/khach_hang', [KhachHangController::class, 'index']);
        
        Route::get('/add_khach_hang',[KhachHangController::class, 'themKhachHang']);
        Route::post('/post_khach_hang', [KhachHangController::class, 'postKhachHang']);

        Route::get('/edit_khach_hang/{id}', [KhachHangController::class, 'suaKhachHang']);
        Route::post('/update_khach_hang', [KhachHangController::class, 'updateKhachHang']);