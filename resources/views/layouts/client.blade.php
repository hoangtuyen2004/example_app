<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Những thư viện hoặc file css dùng chung cho toàn bộ dự án mới được phép đặt ở đây --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('css')
</head>
<body>
    <header>
        @include('clients.blocks.header')
    </header>
    <main>
        <aside>
            @include('clients.blocks.sidebar')
        </aside>
        <div class="content">
            {{-- @yield: Chỉ định trang section có tên trong yield --}}
            @yield('content')
        </div>
    </main>
    <footer>
        @include('clients.blocks.footer')
    </footer>
    {{-- Nhứng thư viện hoặc file js dùng cho toàn dự án mới được đặt ở đây --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>