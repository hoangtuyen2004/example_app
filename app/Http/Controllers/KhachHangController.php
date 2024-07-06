<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    //
    public function index() {
        // dd('Đây là trang KhachHangController');
        $title = "Quản lý khách hàng";
        $khachhangs = KhachHang::all();
        return view('khachhang.index', ['title'=>$title, 'khachhangs'=>$khachhangs]);
    }
    public function themKhachHang() {
        // dd("Đây là chức năng thêm mới khách hàng");
        $title = "Thêm mới khách hàng";
       return view('khachhang.add', ['title'=>$title]);
    }

    public function suaKhachHang($id) {
        $khachhang = KhachHang::find($id);
        $title = "Sửa thông tin khách hàng";
        return view('khachhang.edit', ['title'=>$title, 'khachhang'=>$khachhang]);
    }
    public function updateKhachHang(Request $request, $id) {
        $data = $request->all();
        var_dump($data);
        $khachhang = KhachHang::find($id);
        $khachhang->ten = $data['ten'];
        $khachhang->gioi_tinh = $data['gioi_tinh'];
        $khachhang->email = $data['email'];
        $khachhang->so_dien_thoai = $data['so_dien_thoai'];
        $khachhang->dia_chi = $data['dia_chi'];
        $khachhang->save();
        return redirect('/khach_hang')->with('success', 'Cập nhập thành công');
    }
}
