<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // dd(12345);
        // $title = "Trang chủ";
        // return view('clients.index', ['title'=>$title]);
        $data = [];
        $data['title'] = "Trang chủ";
        $data['text'] = "Quản lý khách hàng";
        // $data['content'] = "<i>Chào mừng bạn đến bình nguyên vô tận</i>";
        // $data['students'] = [
        //     'Minh',
        //     'Hoàng',
        //     'Linh',
        // ];
        return view('clients.khachhang.index', $data);
    }
    public function addKhachHang() {
        $data['title'] = "Thêm mới";
        $data['text'] = "Thêm mới khách hàng";

        return view('clients.khachhang.add', $data);
    }
    public function updateKhachHang() {
        $data['title'] = "Update";
        $data['text'] = "Cập nhật khách hàng";

        return view('clients.khachhang.update',$data);
    }
}
