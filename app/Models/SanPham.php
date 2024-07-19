<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function listSanPhams() {
        $listSanPhams = DB::table('san_phams')->orderBy('id','DESC')->get();
        return $listSanPhams;
    }
    public function createSanPham($data) {
        DB::table('san_phams')->insert($data);
    }
    public function getDetailProduct($id) {
        $sanPham = DB::table('san_phams')->where('id',$id)->first();
        return $sanPham;
    }
    public function deleteProduct($id) {
        DB::table('san_phams')->where('id',$id)->delete();
    }
    public function updateProduct($id, $params) {
        DB::table('san_phams')->where('id', $id)->update($params);
    }

    protected $table = "san_phams";
    protected $fillable = [
        'hinh_anh',
        'ma_san_pham',
        'ten_san_pham',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai'
    ];
}
