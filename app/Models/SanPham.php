<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    public function listSanPhams() {
        $listSanPhams = DB::table('san_phams')->orderBy('id','DESC')->get();
        return $listSanPhams;
    }
    public function createSanPham($data) {
        DB::table('san_phams')->insert($data);
    }
}
