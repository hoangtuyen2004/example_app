{{-- @extends() dùng để kế thừa masterlayout --}}
@extends('layouts.client')

@section('title')
{{-- Hiển thị dữ liệu --}}
{{$title}}
@endsection

@section('css')
{{-- Nhứng thư viện hoặc css dùng riêng được đặt ở đây --}}
<style>
    /* .content{
        background-color: violet;
    } */
</style>
<link rel="stylesheet" href="{{ asset('asset/clients/css/index.css') }}">
@endsection

{{-- @section: Định nghĩa của section --}}
@section('content')
<h1 class="text-light px-5 py-3 text-center">{{$text}}</h1>

{{-- Phiên dịch mã html --}}
<h3>{!! $content !!}</h3>

<button onclick="alert('1234');">Nút</button>

{{-- Các cấu trúc trong blade view --}}
@php 
    $flag = true
@endphp

{{-- Cấu trúc vòng lặp --}}
@for($i = 0; $i < 4; $i++)
    <p>Key: {{ $i }}</p>
@endfor

{{-- Vòng lặp foreach --}}
@foreach($students as $key => $student)
    <p>STT: {{ $key+1 }}</p>
    <p>Học sinh: {{ $student}} </p>
@endforeach

{{-- Forelse trong blade --}}
@forelse($students as $key => $student)
    <p>STT: {{ $key+1 }}</p>
    <p>Học sinh: {{ $student}} </p>
@empty
    <p>Không có phẩn từ nào trong mảng</p>
@endforelse

{{-- Cấu trúc rẽ nhánh --}}
    {{-- Điều kiện if --}}
        @if($flag)
            <p>Điều kiện đúng</p>
        @endif
    {{-- Câu điều kiện ifelse --}}
        @if(true)
            <p>Điều kiện đúng</p>
        @else
            <p>Điều kiện sai</p>
        @endif
    {{-- Câu lệnh if-elseif --}}

@endsection

@section('js')
    <script>
        function onsubmit() {
            console.log('1234');
        }
    </script>
@endsection