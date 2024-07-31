<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SanPhamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

        // Cấu hình lại dữ liệu trả về
        // return [
        //     'san_pham_id' => $this->id,
        //     'nam_sp' => $this->ten_san_pham,
        //     'gia_sp' => $this->gia,
        //     'ngay' =>$this->ngay_nhap
        // ];
    }
}
