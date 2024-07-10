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
    <form action="/update_khach_hang" method="post">
        <div class="row">
            <div class="mb-3 col">
                <label class="form-label">Mã khách hàng</label>
                <input type="text" class="form-control" id="" value="" readonly>
                <div id="" class="form-text">Vui lòng không bỏ trống</div>
            </div>
            <div class="mb-3 col">
                <label for="" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" id="" value="">
                <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label class="form-label">Giới tính</label>
                <select class="form-select">
                    <option selected>--Chọn--</option>
                    <option value="0">One</option>
                    <option value="1">Two</option>  
                </select>
                <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
            </div>
            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" value="">
                <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="tel" class="form-control" value="">
                <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
            </div>
            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control"  value="">
                <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
            </div>
        </div>
        <div class="container d-flex justify-content-center mb-3">
            <button class="btn btn-primary w-50">Cập nhật</button>
        </div>
        <div class="container d-flex justify-content-center mb-3">
            <a href="/" class="btn btn-success w-25">Hủy</a>
        </div>
    </form>
</div>
@endsection

{{-- JavaScript --}}
@section('js')
    
@endsection