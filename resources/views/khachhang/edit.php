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
    <h1 class="text-center bg-secondary mt-5 p-3 text-light mb-3"><?= $title ?></h1>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="mb-3 col">
                    <label class="form-label">Mã khách hàng</label>
                    <input type="text" class="form-control" id="" value="<?=$khachhang['ma_khach_hang']?>" readonly>
                    <div id="" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control" id="" value="<?=$khachhang['ten']?>">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label class="form-label">Giới tính</label>
                    <select class="form-select">
                        <option selected>--Chọn--</option>
                        <option <?php if($khachhang['gioi_tinh']==0) {echo "selected";}?> value="0">One</option>
                        <option <?php if($khachhang['gioi_tinh']==1) {echo "selected";}?> value="1">Two</option>  
                    </select>
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?=$khachhang['email']?>">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" value="<?=$khachhang['so_dien_thoai']?>">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control"  value="<?=$khachhang['dia_chi']?>">
                    <div id="emailHelp" class="form-text">Vui lòng không bỏ trống</div>
                </div>
            </div>
            <div class="container d-flex justify-content-center mb-3">
                <button class="btn btn-primary w-50">Cập nhật</button>
            </div>
            <div class="container d-flex justify-content-center mb-3">
                <a href="/khach_hang" class="btn btn-success w-25">Hủy</a>
            </div>
        </form>
    </div>
</body>

</html>