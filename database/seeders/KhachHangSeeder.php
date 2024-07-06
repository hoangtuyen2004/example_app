<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('khach_hangs')->insert(
            [
                [
                    'ma_khach_hang'=>'KH01',
                    'ten'=>'Tuyến',
                    'gioi_tinh'=>true,
                    'email'=>Str::random(10).'@gmail.com',
                    'so_dien_thoai'=>'01234567890',
                    'dia_chi'=>'Hà Nội',
                ],
                [
                    'ma_khach_hang'=>'KH02',
                    'ten'=>'Huy',
                    'gioi_tinh'=>true,
                    'email'=>Str::random(10).'@gmail.com',
                    'so_dien_thoai'=>'09876543210',
                    'dia_chi'=>'Bắc Giang',
                ]
            ]
        );
    }
}
