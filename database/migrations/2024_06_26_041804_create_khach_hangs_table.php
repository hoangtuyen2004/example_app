<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang',10)->unique();
            $table->string('ten',255);
            $table->boolean('gioi_tinh')->default();
            $table->string('email',255)->unique();
            $table->string('so_dien_thoai',15)->is_int();
            $table->string('dia_chi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
