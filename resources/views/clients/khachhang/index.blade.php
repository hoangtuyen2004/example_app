@extends('layouts.client')

{{-- TITLE --}}
@section('title')
    {{$title}}
@endsection

{{-- CSS --}}
@section('css')
    
@endsection

{{-- CONTENT --}}
@section('content')
<h1 class="bg-secondary px-5 py-3 text-light mb-5 text-center">{{$text}}</h1>
<div class="container">
    <table class="table table-hover">
        <thead>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Tên</th>
            <th>Giới tính</th>
            <th>Email</th>
            <th>Số điên thoại</th>
            <th>Địa chỉ</th>
            <th>Chức năng</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>KH01</td>
                <td>Hoàng Tuyến</td>
                <td>Nam</td>
                <td>tuyen@gmail.com</td>
                <td>0239393993</td>
                <td>Bắc Giang</td>
                <td>
                    <a class="btn btn-danger" href="/">Xóa</a>
                    <a class="btn btn-warning" href="/edit_khach_hang">Sửa</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <a class="btn btn-success w-25" href="/add_khach_hang">Thêm mới +</a>
    </div>
</div>
@endsection

{{-- JavaScript --}}
@section('js')
    
@endsection