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
        $data['text'] = "Đây là trang Client 111111111";
        $data['content'] = "<i>Chào mừng bạn đến bình nguyên vô tận</i>";
        $data['students'] = [
            'Minh',
            'Hoàng',
            'Linh',
        ];
        return view('clients.index', $data);
    }
}