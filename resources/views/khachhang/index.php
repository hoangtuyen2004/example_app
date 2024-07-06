<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center bg-success mt-5 p-3 text-light mb-3"><?= $title ?></h1>
    <div class="container">
        <table class="table table-hover table-striped">
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
                <?php foreach ($khachhangs as $key => $khachhang) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $khachhang['ma_khach_hang'] ?></td>
                        <td><?= $khachhang['ten'] ?></td>
                        <td><?= $khachhang['gioi_tinh'] ?></td>
                        <td><?= $khachhang['email'] ?></td>
                        <td><?= $khachhang['so_dien_thoai'] ?></td>
                        <td><?= $khachhang['dia_chi'] ?></td>
                        <td>
                            <a href= "/edit_khach_hang/<?=$khachhang['id']?>" class="btn btn-warning text-light">Sửa</a>
                            <button onclick="return confirm('bạn có chắc muốn xóa')" class="btn btn-danger" type="submit">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="container">
            <form class="w-100 d-flex justify-content-center" action="/add_khach_hang" method="">
                <button class="btn btn-primary w-50">Thêm mới +</button>
            </form>
        </div>

    </div>

</body>

</html>