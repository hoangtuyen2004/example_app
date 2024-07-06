<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham',10)->unique();//unique():Dữ liệu không bị trùng
            $table->string('ten_san_pham',255);
            $table->double('gia', 8, 2);//double('tên', độ dài, độ dài thập phân)
            $table->integer('so_luong')->nullable();//nullable():Cho phé giá trị null
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->boolean('trang_thai')->default(0);//default(): Xét giá trị mặc định
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
