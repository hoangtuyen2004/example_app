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
        <form action="/post_khach_hang" method="post">
            <div class="row">
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Mã khách hàng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Giới tính</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--Chọn--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                    <div id="" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="container d-flex justify-content-center mb-3">
                <button class="btn btn-primary w-50">Thêm khách hàng</button>
            </div>
            <div class="container d-flex justify-content-center mb-3">
                <a href="/" class="btn btn-success w-25">Quay lại</a>
            </div>
        </form>
    </div>
@endsection

{{-- JavaScript --}}
@section('js')
    
@endsection