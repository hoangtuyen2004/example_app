<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Sử dụng Query builder để thêm dữ liệu mẫu
        //Tìm hiểu tạo dữ liệu mẫu bằng faker thêm dư liệu
        DB::table('san_phams')->insert(
            [
                [
                    'ma_san_pham' => 'SP01',
                    'ten_san_pham' => 'Iphone 16',
                    'gia' => '10000',
                    'so_luong' => 10,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true
                ],
                [
                    'ma_san_pham' => 'SP02',
                    'ten_san_pham' => 'Iphone 13',
                    'gia' => '30000',
                    'so_luong' => 20,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => false
                ]
            ]
        );
    }
}
